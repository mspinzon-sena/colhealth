@extends('layouts.panel')
@section('title','Vista Cita')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Información de la cita #{{ $appointment->id }}</h6>        
              <a href="{{ url('/miscitas') }}" class="btn btn-sm btn-success ps-3"><i class="fas fa-arrow-left pe-3"></i> Regresar</a>
            </div>
            
            <div class="card-body">
              <ul>
                <dd>
                    <strong>Fecha: </strong> {{$appointment->scheduled_date}}
                </dd>
                <dd>
                    <strong>Hora de atención: </strong> {{$appointment->Scheduled_Time_12}}
                </dd>
                @if($role == 'paciente' || $role == 'admin')
                <dd>
                    <strong>Doctor: </strong> {{$appointment->doctor->name}}
                </dd>
                @endif
                @if($role == 'doctor' || $role == 'admin')
                <dd>
                    <strong>Paciente: </strong> {{$appointment->patient->name}}
                </dd>
                @endif
                <dd>
                
                    <strong>Especialidad: </strong> {{$appointment->specialty->name}}
                </dd>
                <dd>
                    <strong>Tipo de consulta: </strong> {{$appointment->type}}
                </dd>
                <dd>
                    <strong>Estado: </strong> 
                    @if($appointment->status == 'Cancelada')
                        <span class="badge bg-danger">Cancelada</span>
                    @else
                        <span class="badge bg-primary">{{ $appointment->status }}</span>
                    @endif
                </dd>
                <dd>
                    <strong>Síntomas: </strong> {{$appointment->description}}
                </dd>
                @if($appointment->status == 'Cancelada')
                <div class="alert bg-light text-primary">
                    <h4>Detalles de la cancelación</h4>
                    @if($appointment->cancellation)
                    <ul>
                        <li>
                            <strong>Fecha de la cancelación: </strong>
                            {{ $appointment->cancellation->created_at }}
                        </li>
                        <li>
                            <strong>La cita fue cancelada por: </strong>
                            {{ $appointment->cancellation->cancelled_by->name }}
                        </li>
                        <li>
                            <strong>Motivo de la cancelación: </strong>
                            {{ $appointment->cancellation->justification }}
                        </li>
                    </ul>
                    @else
                    <ul>
                        <li>La cita fue cancelada antes de su confirmación.</li>
                    </ul>
                    @endif
                </div>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

