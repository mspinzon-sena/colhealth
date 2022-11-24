<?php
  use Illuminate\Support\Str; 
?>
@extends('layouts.panel')
@section('title','Editar médico')

  @section('styles')
  @endsection
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Editar Médico</h6>        
              <a href="{{ url('/medicos') }}" class="btn btn-sm btn-success ps-3"><i class="fas fa-arrow-left pe-3"></i> Regresar</a>
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
                <form action="{{ url('/medicos/'.$doctor->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nombre del médico</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name',$doctor->name)}}"> 
                    </div>
                    <div class="form-group">
                      <label for="specialties">Especialidades</label><br>
                      <select name="specialties[]" id="multiple-checkboxes" multiple required>
                        @foreach ($specialties as $especialidad)
                          <option value="{{$especialidad->id}}">{{$especialidad->name}}</option>
                        @endforeach
                      </select>           
                    </div>

                    <div class="form-group">
                        <label for="email">Correo electronico</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email',$doctor->email)}}">
                    </div>  
                    <div class="form-group">
                        <label for="cedula">Documento</label>
                        <input type="text" name="cedula" class="form-control" value="{{ old('cedula',$doctor->cedula)}}">
                    </div>
                    <div class="form-group">
                        <label for="celular">Teléfono / Celular</label>
                        <input type="text" name="celular" class="form-control" value="{{ old('celular',$doctor->celular)}}">
                    </div>
                    <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input type="text" name="password" class="form-control">
                      <small class="text-warning">Solo llena el campo si deseas cambiar la contraseña.</small>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success ps-3"><i class="fas fa-plus  mx-1"></i> Guardar Médico</button>
                </form> 
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('scripts')
  <script src="{{asset('multiselect/js/jquery.min.js')}}"></script>
  <script src="{{asset('multiselect/js/popper.js')}}"></script>
  <script src="{{asset('multiselect/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('multiselect/js/bootstrap-multiselect.js')}}"></script>
  <script src="{{asset('multiselect/js/main.js')}}"></script>

  <script>
    $(document).ready(()=>{});
    $('#multiple-checkboxes').selectpicker('val',@json($specialtys_ids)); 
  </script>
  @endsection