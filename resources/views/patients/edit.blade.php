<?php
  use Illuminate\Support\Str; 
?>
@extends('layouts.panel')
@section('title','Editar paciente')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Editar Paciente</h6>        
              <a href="{{ url('/pacientes') }}" class="btn btn-sm btn-success ps-3"><i class="fas fa-arrow-left pe-3"></i> Regresar</a>
            </div>
            
            <div class="card-body">
              @if($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-warning" role="alert">
                    <i class="fas fa-exclamation-circle"></i>
                    <strong>Por favor!</strong> {{ $error }}
                </div>
                @endforeach
              @endif
                <form action="{{ url('/pacientes/'.$patient->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nombre del paciente</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name',$patient->name)}}"> 
                    </div>

                    <div class="form-group">
                        <label for="email">Correo electronico</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email',$patient->email)}}">
                    </div>  
                    <div class="form-group">
                        <label for="cedula">Documento</label>
                        <input type="text" name="cedula" class="form-control" value="{{ old('cedula',$patient->cedula)}}">
                    </div>
                    <div class="form-group">
                        <label for="celular">Teléfono / Celular</label>
                        <input type="text" name="celular" class="form-control" value="{{ old('celular',$patient->celular)}}">
                    </div>
                    <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input type="text" name="password" class="form-control">
                      <small class="text-warning">Solo llena el campo si deseas cambiar la contraseña.</small>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success ps-3"><i class="fas fa-plus  mx-1"></i> Guardar Cambios</button>
                </form> 
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
