
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/especialidades') }}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="fas fa-clipboard-check text-success text-sm opacity-10"></i>
      </div>
      <span class="nav-link-text ms-1">Especialidades</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/medicos') }}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="fas fa-user-md text-success text-sm opacity-10"></i>
      </div>
      <span class="nav-link-text ms-1">Médicos</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/pacientes') }}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="fas fa-id-card-alt text-success text-sm opacity-10"></i>
      </div>
      <span class="nav-link-text ms-1">Pacientes</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/miscitas') }}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="fas fa-calendar-alt text-success text-sm opacity-10"></i>
      </div>
      <span class="nav-link-text ms-1">Citas Médicas</span>
    </a>
  </li>
  <li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Reportes</h6>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ url ('/reportes/citas/line')}}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-book-bookmark text-dark text-sm opacity-10"></i>
      </div>
      <span class="nav-link-text ms-1">Citas</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ url ('/reportes/doctors/column')}}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-chart-bar-32 text-dark text-sm opacity-10"></i>
      </div>
      <span class="nav-link-text ms-1">Desempeño Médico</span>
    </a>
  </li>