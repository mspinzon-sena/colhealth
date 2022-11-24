@extends('layouts.panel')
@section('title','Crear especialidad')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Nueva Especialidad</h6>        
              <a href="{{ url('/especialidades') }}" class="btn btn-sm btn-success ps-3"><i class="fas fa-arrow-left pe-3"></i> Regresar</a>
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
                <form action="{{ url('/especialidades') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre de la especialidad</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name')}}" required> 
                    </div>

                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="text" name="description" class="form-control" value="{{ old('description')}}">
                    </div>  

                    <button type="submit" class="btn btn-sm btn-success">Crear especialidad</button>
                </form> 
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
