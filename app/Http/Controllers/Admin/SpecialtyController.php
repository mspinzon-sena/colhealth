<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Http\Controllers\Controller;

class SpecialtyController extends Controller
{   
    
    public function index(){
        $specialties = Specialty::all();
        return view('specialties.index',compact('specialties'));
    }
    //Método Crear (Create)
    public function create(){
        return view('specialties.create');
    }
    //Método Enviar información (sendData)
    public function sendData(Request $request){
        $rules = [
            'name' => 'required|min:3'
        ];
        $messages = [
            'name.required' => 'El nombre de la especialidad es obligatorio',
            'name.min' => 'El nombre de la especialidad debe tener más de tres caracteres',
        ];
        $this->validate($request,$rules,$messages);

        $specialty = new Specialty();

        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        $notification='La especialidad se ha creado correctamente.';

        return redirect('/especialidades')->with(compact('notification'));
    }
    //Método Editar (Edit)
    public function edit(Specialty $specialty){
        return view('specialties.edit', compact('specialty'));
    }
    //Método Actualizar información (update)
    public function update(Request $request, Specialty $specialty){
        $rules = [
            'name' => 'required|min:3'
        ];
        $messages = [
            'name.required' => 'El nombre de la especialidad es obligatorio',
            'name.min' => 'El nombre de la especialidad debe tener más de tres caracteres',
        ];
        $this->validate($request,$rules,$messages);

        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        $notification='La especialidad se ha actualizado correctamente.';

        return redirect('/especialidades')->with(compact('notification'));
    }
    //Método Eliminar (destroy)
    public function destroy(Specialty $specialty){
        $deleteName = $specialty->name;
        $specialty->delete();
        $notification='La especialidad '.$deleteName. ' se ha eliminado correctamente.';
        return redirect('/especialidades')->with(compact('notification'));
    }
}
