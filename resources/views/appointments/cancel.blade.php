@extends('layouts.panel')
@section('title','Cancelar Cita')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Cancelación de cita</h6>        
              <a href="{{ url('/miscitas') }}" class="btn btn-sm btn-success ps-3"><i class="fas fa-arrow-left pe-3"></i> Regresar</a>
            </div>
            
            <div class="card-body">
              @if($role == 'paciente')
              <p class="fw-light">Se cancelará tú cita reservada con el médico <b>{{$appointment->patient->name}} </b>(especialidad <b>{{$appointment->specialty->name}}</b>) 
                para el día <b>{{$appointment->scheduled_date}}</b>.</p>
              @elseif($role == 'doctor')
                <p class="fw-light">Se cancelará la cita médica del paciente <b>{{$appointment->patient->name}} </b>(especialidad <b>{{$appointment->specialty->name}}</b>) 
                  para el día <b>{{$appointment->scheduled_date}}</b>
                  , la hora <b>{{$appointment->Scheduled_Time_12}}</b>.</p>
              @elseif($role == 'admin')
                <p class="fw-light">Se cancelará la cita médica del paciente <b>{{$appointment->patient->name}} </b>
                  que será atendido por el doctor <b>{{$appointment->doctor->name}} </b>
                  (especialidad <b>{{$appointment->specialty->name}}</b>) 
                para el día <b>{{$appointment->scheduled_date}}</b>
                , la hora <b>{{$appointment->Scheduled_Time_12}}</b>.</p>
              @endif
                <form action="{{ url('/miscitas/'.$appointment->id.'/cancel') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="justification">Escribe el motivo de tu cancelación:</label>
                        <textarea name="justification" id="justification" rows="3" class="form-control" required></textarea>
                    </div>
                    <button class="btn btn-danger" type="submit">Cancelar Cita</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

