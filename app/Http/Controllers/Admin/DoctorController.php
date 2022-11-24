<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Specialty;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {   
        $doctors = User::doctors()->paginate(10);
        return view('doctors.index',compact('doctors'));
    }

    public function create()
    {   
        $specialties = Specialty::all();
        return view('doctors.create', compact('specialties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'cedula' => 'required|digits:10',
            'celular' => 'nullable|min:6',
        ];
        $messages = [
            'name.required' => 'El nombre del médico es obligatorio',
            'name.min' => 'El nombre del médico debe tener más de 3 caracteres',

            'email.required' => 'El correo del médico es obligatorio',
            'email.email' => 'El correo del médico debe tener el formato de correo "example@example.example"',

            'cedula.required' => 'La cédula del médico es obligatoria',
            'cedula.digits' => 'La cédula del médico debe tener 10 dígitos',

            'celular.min' => 'El teléfono/celular del médico debe tener al menos 6 caracteres',
        ];
        $this->validate($request,$rules,$messages);

        $user = User::create(
            $request->only('name','email','cedula','celular')
            + [
                'role' => 'doctor',
                'password' => bcrypt($request->input('password'))
            ]
        );
        $user->specialties()->attach($request->input('specialties'));
        $notification = 'El médico se ha registrado correctamente.';
        return redirect('/medicos')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $doctor = User::doctors()->findOrFail($id);

        $specialties = Specialty::all();
        $specialtys_ids = $doctor->specialties()->pluck('specialties.id');
        return view('doctors.edit',compact('doctor','specialties','specialtys_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'cedula' => 'required|digits:10',
            'celular' => 'nullable|min:6',
        ];
        $messages = [
            'name.required' => 'El nombre del médico es obligatorio',
            'name.min' => 'El nombre del médico debe tener más de 5 caracteres',

            'email.required' => 'El correo del médico es obligatorio',
            'email.email' => 'El correo del médico debe tener el formato de correo "example@example.example"',

            'cedula.required' => 'La cédula del médico es obligatoria',
            'cedula.digits' => 'La cédula del médico debe tener 10 dígitos',

            'celular.min' => 'El teléfono/celular del médico debe tener al menos 6 caracteres',
        ];
        $this->validate($request,$rules,$messages);
        $user = User::doctors()->findOrFail($id);

        $data = $request->only('name','email','cedula','celular');
        $password = $request->input('password');

        if ($password) 
            $data['password'] = bcrypt($password);
        
        $user->fill($data);
        $user->save();
        $user->specialties()->sync($request->input('specialties'));

        
        $notification = 'La información del médico se ha actualizado correctamente.';
        return redirect('/medicos')->with(compact('notification'));
    }

    public function destroy($id)
    {
        $user = User::doctors()->findOrFail($id);
        $doctorName = $user->name;
        $user->delete();
        $notification = "La información del médico $doctorName se ha eliminado correctamente.";

        return redirect('/medicos')->with(compact('notification'));
    }
}
