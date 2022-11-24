@extends('layouts.panel')
@section('title','Lista de especialidades')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Especialidades</h6>
              <a href="{{ url('/especialidades/create') }}" class="btn btn-sm btn-success px-3"><i class="fas fa-plus me-2"></i>Nueva Especialidad</a>
            </div>
            <div class="card-body">
              @if (session('notification'))
              <div class="alert alert-success" role="alert">
                {{ session('notification')}}
              </div>
              @else
                  
              @endif
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descripción</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($specialties as $especialidad)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm ps-2">{{ $especialidad->name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $especialidad->description }}</p>
                      </td>
                      <td class="align-middle text-center text-sm d-flex justify-content-evenly">
                        <a href="{{ url('/especialidades/'.$especialidad->id.'/edit') }}" class="btn btn-sm btn-success ps-3"><i class="fas fa-edit me-3"></i>Editar</a>
                        <form action="{{ url('/especialidades/'.$especialidad->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Eliminar</a>
                        </form>
                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
