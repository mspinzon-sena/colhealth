@extends('layouts.form')
@section('title','Login')
@section('content')
<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../">
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
                  <a href="../" class="btn btn-sm mb-0 me-1 btn-primary">Volver</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">     
                <div class="card-body">
                @if($errors->any())
                <div class="pt-5">
                    <h4 class="font-weight-bolder">Inicia sesión</h4>
                    <p class="mb-1 ms-3"><strong>¡Un momento!</strong></p>
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-warning pb-2 text-white" role="alert">
                        {{ $error }}
                    </div>
                    @endforeach
                </div>
                @else
                <div class="mb-4">
                  <h4 class="font-weight-bolder">Inicia sesión</h4>
                  <p class="mb-0">Ingresa tu correo y contraseña para ingresar</p>
                </div>
                @endif

                  <form role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="Correo Electrónico" aria-label="Email" name="email" value="{{ old('email') }}" required autocomplete="email" >
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="Contraseña" aria-label="Password" name="password" required autocomplete="current-password">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label" for="remember">Recuerdame</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Ingresar</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    ¿No tienes una cuenta?
                    <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Registrate</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://images.pexels.com/photos/8460157/pexels-photo-8460157.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
                            background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">¡Entra a nuestro sistema!</h4>
                <p class="text-white position-relative">Sencillo de usar, explora las funciones que se manejan allí ahora</p>
              </div>
            </div>
          </div>         
        </div>
      </div>
    </section>  
</main>

@endsection
