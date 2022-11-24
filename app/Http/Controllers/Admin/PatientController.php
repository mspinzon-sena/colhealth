<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {   
        $patients = User::patients()->paginate(10);
        return view('patients.index',compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
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
            'name.required' => 'El nombre del paciente es obligatorio',
            'name.min' => 'El nombre del paciente debe tener más de 3 caracteres',

            'email.required' => 'El correo del paciente es obligatorio',
            'email.email' => 'El correo del paciente debe tener el formato de correo "example@example.example"',

            'cedula.required' => 'La cédula del paciente es obligatoria',
            'cedula.digits' => 'La cédula del paciente debe tener 10 dígitos',

            'celular.min' => 'El teléfono/celular del paciente debe tener al menos 6 caracteres',
        ];
        $this->validate($request,$rules,$messages);

        User::create(
            $request->only('name','email','cedula','celular')
            + [
                'role' => 'paciente',
                'password' => bcrypt($request->input('password'))
            ]
        );
        $notification = 'El paciente se ha registrado correctamente.';
        return redirect('/pacientes')->with(compact('notification'));
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
        $patient = User::Patients()->findOrFail($id);
        return view('patients.edit',compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'cedula' => 'required|digits:10',
            'celular' => 'nullable|min:6',
        ];
        $messages = [
            'name.required' => 'El nombre del paciente es obligatorio',
            'name.min' => 'El nombre del paciente debe tener más de 3 caracteres',

            'email.required' => 'El correo del paciente es obligatorio',
            'email.email' => 'El correo del paciente debe tener el formato de correo "example@example.example"',

            'cedula.required' => 'La cédula del paciente es obligatoria',
            'cedula.digits' => 'La cédula del paciente debe tener 10 dígitos',

            'celular.min' => 'El teléfono/celular del paciente debe tener al menos 6 caracteres',
        ];
        $this->validate($request,$rules,$messages);
        $user = User::Patients()->findOrFail($id);

        $data = $request->only('name','email','cedula','celular');
        $password = $request->input('password');

        if ($password) 
            $data['password'] = bcrypt($password);
        
        $user->fill($data);
        $user->save();
        
        $notification = 'La información del paciente se ha actualizado correctamente.';
        return redirect('/pacientes')->with(compact('notification'));
    }

    public function destroy($id)
    {
        $user = User::Patients()->findOrFail($id);
        $PacienteName = $user->name;
        $user->delete();
        $notification = "La información del médico $PacienteName se ha eliminado correctamente.";

        return redirect('/pacientes')->with(compact('notification'));
    }
}
