<?php
  use Illuminate\Support\Str; 
?>
@extends('layouts.panel')
@section('title','Crear paciente')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Nuevo Paciente</h6>        
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
                <form action="{{ url('/pacientes') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre del paciente</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name')}}" required> 
                    </div>

                    <div class="form-group">
                        <label for="email">Correo electronico</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email')}}">
                    </div>  
                    <div class="form-group">
                        <label for="cedula">Documento</label>
                        <input type="text" name="cedula" class="form-control" value="{{ old('cedula')}}">
                    </div>
                    <div class="form-group">
                        <label for="celular">Teléfono / Celular</label>
                        <input type="text" name="celular" class="form-control" value="{{ old('celular')}}">
                    </div>
                    <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input type="text" name="password" class="form-control" value="{{ old('password',Str::random(10)) }}">
                    </div>

                    <button type="submit" class="btn btn-sm btn-success ps-3"><i class="fas fa-plus  mx-1"></i> Crear Paciente</button>
                </form> 
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
