<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Especialidad</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fecha</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($oldAppointments as $cita)
          <tr>
            <td>
              <p class="text-xs font-weight-bold mb-0">{{ $cita->specialty->name }}</p>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">{{ $cita->scheduled_date }}</p>
            </td>
            <td class="align-middle text-center text-sm d-flex justify-content-evenly">
              
              <a href="{{ url('/miscitas/'.$cita->id) }}" class="btn btn-success btn-sm">Consultar</a>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>