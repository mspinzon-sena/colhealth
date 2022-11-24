<?php
  use Illuminate\Support\Str; 
?>
@extends('layouts.panel')
@section('title','Reservar Cita')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Registrar una nueva cita</h6>        
              <a href="{{ url('/home') }}" class="btn btn-sm btn-success ps-3"><i class="fas fa-arrow-left pe-3"></i> Regresar</a>
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
                <form action="{{ url('/reservarcitas') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="specialty">Especialidad</label>
                        <select name="specialty_id" id="specialty" class="form-control">
                          <option value="">Seleccione una especialidad</option>
                          @foreach($specialties as $especialidad)
                            <option value="{{$especialidad->id}}"
                              @if(old('specialty_id')== $especialidad->id) selected @endif>
                              {{$especialidad->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      
                      <div class="form-group col-md-6">
                          <label for="doctor">Médico</label>
                          <select name="doctor_id" id="doctor" class="form-control" required>
                            @foreach($doctors as $doctor)
                            <option value="{{$doctor->id}}"
                              @if(old('doctor_id')== $doctor->id) selected @endif>
                              {{$doctor->name}}</option>
                          @endforeach
                          </select>
                      </div>
                    </div>
                    
                      
                    <div class="form-group">
                        <label for="date">Fecha de la cita</label>
                          <input id="date" name="scheduled_date" class="form-control" 
                          type="date" placeholder="Seleciona la fecha de tu cita" value="{{ old('scheduled_date')}}">                      
                    </div>
                    <div class="form-group">
                        <label for="hours">Hora de atención</label>
                        <div class="container">
                          <div class="row">
                            <div class="col">
                              <h4 class="my-3" id="titleMorning"></h4>
                              <div id="hoursMorning">
                                @if($intervals)
                                <h6>Horario Mañana</h6>
                                  @foreach($intervals['morning'] as $key => $interval)
                                  <div class="form-check mb-3">
                                    <input  type="radio" id="intervalMorning{{ $key }}" name="scheduled_time" value="{{ $interval['start'] }}" class="form-check-input">
                                    <label class="custom-control-label" for="intervalMorning{{ $key }}">{{ $interval['start']}} - {{ $interval ['end']}}</label>
                                  </div>
                                  @endforeach
                                @else
                                
                                <div class="alert alert-warning col-12" role="alert">
                                    <i class="fas fa-exclamation-circle"></i>
                                      Selecciona una especialidad, un médico disponible y la fecha de tu cita para ver las horas.
                                </div>
                                  
                                @endif
                              </div>
                            </div>
                            <div class="col">
                              <h4 class="my-3" id="titleAfternoon"></h4>
                              <div id="hoursAfternoon">
                                @if($intervals)
                                <h6>Horario Tarde</h6>
                                  @foreach($intervals['afternoon'] as $key => $interval)
                                  <div class="form-check mb-3">
                                    <input  type="radio" id="intervalAfternoon{{ $key }}" name="scheduled_time" value="{{ $interval['start'] }}" class="form-check-input" required>
                                    <label class="custom-control-label" for="intervalAfternoon{{ $key }}">{{ $interval['start']}} - {{ $interval ['end']}}</label>
                                  </div>
                                  @endforeach
                                @endif
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Tipo de consulta</label>
                      <div class="form-check mb-3 mt-3">
                        <input class="form-check-input" type="radio" name="type" id="type1" 
                        @if(old('type')== 'Consulta') checked @endif value="Consulta">
                        <label class="custom-control-label" for="type1">Consulta</label>
                      </div>
                      <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="type" id="type2" 
                        @if(old('type')== 'Examen') checked @endif value="Examen">
                        <label class="custom-control-label" for="type2">Examen</label>
                      </div>
                      <!-- <div class="form-check mb-5">
                        <input class="form-check-input" type="radio" name="type" id="type3" 
                        @if(old('type')== 'Operación') checked @endif value="Operación">
                        <label class="custom-control-label" for="type3">Operación</label>
                      </div> -->
                  </div>

                  <div class="form-group">
                    <label for="description">Sintomas</label>
                    <textarea name="description" id="description" type="text" class="form-control"
                    rows="5" placeholder="Descripción de sus sintomas." required></textarea>
                  </div>
                    <button type="submit" class="btn btn-sm btn-success ps-3"><i class="fas fa-plus mx-1"></i>Guardar</button>
                </form> 
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>
    config={
    minDate: "today",
    maxDate: new Date().fp_incr(30)
    }
    flatpickr("input[type=date]", config);
  </script>
  <script src="{{asset('/js/appointments/create.js')}}">
    
  </script>
@endsection

