@extends('layouts.form')
@section('title','Regístrate')
@section('content')
<body class="">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../">
        COLHEALTH
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link me-2" href="{{ route('register') }}">
              <i class="fas fa-user-circle opacity-6  me-1"></i>
              Regístrate
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="{{ route('login') }}">
              <i class="fas fa-key opacity-6  me-1"></i>
              Iniciar sesión
            </a>
          </li>
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="../" class="btn btn-sm mb-0 me-1 bg-gradient-light">Volver</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://images.pexels.com/photos/1181450/pexels-photo-1181450.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">¿No tienes cuenta?</h1>
            <p class="text-lead text-white">Crea tu usuario y accede como paciente.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-body">
            @if($errors->any())
               
                <div class="card-header text-center">
                    <h4>Regístrate</h4>
                </div>
                    <p class="mb-1 ms-3"><strong>Un momento!</strong></p>
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-warning pb-2 text-white" role="alert">
                        {{ $error }}
                    </div>
                    @endforeach
                
                @else            
                <div class="card-header text-center">
                    <h4>Regístrate</h4>
                </div>
                @endif
              <form role="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Nombre" aria-label="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Correo electrónico" aria-label="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Contraseña" aria-label="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Confirmar contraseña" aria-label="Password" d="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Registrarse</button>
                </div>
                <p class="text-sm mt-3 mb-0 text-center">
                    ¿Ya tienes una cuenta?
                  <a href="{{ route('login')}}" class="text-primary text-gradient font-weight-bold">Ingresa</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer py-5">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> ColHealth by SENA.
          </p>
        </div>
      </div>
    </div>
  </footer>
@endsection
