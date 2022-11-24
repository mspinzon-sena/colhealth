<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 d-flex justify-content-center align-items-center" href="{{ url('/home') }}">
        <img src="{{ asset('argon/img/logo.svg')}}" class="navbar-brand-img " alt="main_logo">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
            @if (auth()->user()->role == 'admin')
            Gestión general
            @else
            Menú
            @endif
          </h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/home') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-home text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Inicio</span>
          </a>
        </li>
        
        @include('includes.panel.menu.'.auth()->user()->role)

        <li class="nav-item">
          <a class="nav-link " href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
          >
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-sign-in-alt text-danger text-sm opacity-10"></i>  
            </div>
            <span class="nav-link-text ms-1">Cerrar sesión</span>
          </a>
          <form action="{{ route('logout') }}" method="POST" style="display:none;" id="formLogout">
            @csrf
          </form>
          
        </li>
      </ul>
    </div>
  </aside>