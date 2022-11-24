<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripción</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Especialidad</th>
            @if($role == 'paciente')
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Médico</th>
            @elseif($role == 'doctor')
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Paciente</th>
            @endif  
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fecha</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hora</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tipo</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pendingAppointments as $cita)
          <tr>
            <td >
              <div class="d-flex px-2 py-1 ">
                <div class="d-flex flex-column justify-content-center  ">
                  <h6 class="text-xs font-weight-bold ps-3 mb-0 ">{{ $cita->description }}</h6>
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">{{ $cita->specialty->name }}</p>
            </td>
            @if ($role == 'paciente')
              <td>
                <p class="text-xs font-weight-bold mb-0">{{ $cita->doctor->name }}</p>
              </td>
            @elseif ($role == 'doctor')
              <td>
                <p class="text-xs font-weight-bold mb-0">{{ $cita->patient->name }}</p>
              </td>
            @endif
            
            <td>
              <p class="text-xs font-weight-bold mb-0">{{ $cita->scheduled_date }}</p>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">{{ $cita->Scheduled_Time_12 }}</p>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">{{ $cita->type }}</p>
            </td>
            
            <td class="align-middle text-center text-sm d-flex justify-content-evenly">
              @if($role == 'admin')
              <a href="{{url('/miscitas/'.$cita->id)}}" class="btn btn-sm btn-info mt-1" title="Ver cita">
                Ver</a>
              @endif
              @if($role == 'doctor' || $role == 'admin')
                <form action="{{ url('/miscitas/'.$cita->id.'/confirm') }}" method="POST" class="d-inline-block">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-success mt-1" title="Confirmar cita">
                    Confirmar</a>
                </form>
              @endif
              <form action="{{ url('/miscitas/'.$cita->id.'/cancel') }}" method="POST" class="d-inline-block">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger mt-1" title="Cancelar cita">
                  Cancelar</a>
              </form>
              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>