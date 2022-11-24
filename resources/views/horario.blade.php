@extends('layouts.panel')
@section('title','Mi horario')
@section('content')
<form action="{{ url('/horario')}}" method="POST">
    @csrf
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Gestionar Horario</h6>
                <button type="submit" class="btn btn-sm btn-success">Guardar cambios</a>
              </div>
              <div class="card-body">
                @if (session('notification'))
                    <div class="alert alert-success" role="alert">
                    {{ session('notification')}}
                    </div>           
                @endif
                @if (session('errors'))
                    <div class="alert alert-danger" role="alert">
                        Los cambios han sido guardados , pero se encontró lo siguiente:
                        <ul>
                           @foreach(session('errors') as $error)
                           <li>{{$error}}</li>
                           @endforeach 
                        </ul>
                    {{ session('notification')}}
                    </div>           
                @endif
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0 w-95">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Día</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Activo</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Turno Mañana</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Turno Tarde</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($horarios as $key=>$horario)
                      <tr> 
                          <th class="mb-0 text-sm ps-4" >{{ $days[$key] }}</th>
                          <td> 
                              <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"  name="active[]" value="{{ $key }}" 
                                  @if($horario->active)checked @endif
                                  >
                                </div>
                          </td>
                          <td>
                              <div class="row">
                                  <div class="col">
                                      <select class="form-control text-uppercase text-center py-1 px-0" name="morning_start[]">
                                          @for ($i=8; $i<=11; $i++)
                                              <option value="{{($i<10 ? '0' : '').$i}}:00"
                                              @if($i.':00 AM' == $horario->morning_start) selected @endif>
                                              {{$i}}:00 AM</option>
                                              <option value="{{($i<10 ? '0' : '').$i}}:30"
                                              @if($i.':30 AM' == $horario->morning_start) selected @endif>
                                              {{$i}}:30 AM</option>
                                          @endfor
                                      </select>
                                  </div>
                                  <div class="col">
                                      <select class="form-control text-uppercase text-center py-1 px-0" name="morning_end[]">
                                          @for ($i=8; $i<=11; $i++)
                                              <option value="{{($i<10 ? '0' : '').$i}}:00"
                                              @if($i.':00 AM' == $horario->morning_end) selected @endif>
                                              {{$i}}:00 AM</option>
                                              <option value="{{($i<10 ? '0' : '').$i}}:30"
                                              @if($i.':30 AM' == $horario->morning_end) selected @endif>
                                              {{$i}}:30 AM</option>
                                          @endfor
                                      </select>
                                  </div>
                              </div>
                          </td>
                          <td>
                              <div class="row">
                                  <div class="col">
                                      <select class="form-control text-uppercase text-center py-1 px-0" name="afternoon_start[]">
                                          @for ($i=2; $i<=11; $i++)
                                              <option value="{{$i+12}}:00"
                                              @if($i.':00 PM' == $horario->afternoon_start) selected @endif>
                                              {{$i}}:00 PM</option>
                                              <option value="{{$i+12}}:30"
                                              @if($i.':30 PM' == $horario->afternoon_start) selected @endif>
                                              {{$i}}:30 PM</option>
                                          @endfor
                                      </select>
                                  </div>
                                  <div class="col">
                                      <select class="form-control text-uppercase text-center py-1 px-0" name="afternoon_end[]">
                                          @for ($i=2; $i<=11; $i++)
                                              <option value="{{$i+12}}:00"
                                              @if($i.':00 PM' == $horario->afternoon_end) selected @endif>
                                              {{$i}}:00 PM</option>
                                              <option value="{{$i+12}}:30"
                                              @if($i.':30 PM' == $horario->afternoon_end) selected @endif>
                                              {{$i}}:30 PM</option>
                                          @endfor
                                      </select>
                                  </div>
                              </div>
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
</form>


@endsection
