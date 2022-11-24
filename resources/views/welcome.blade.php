<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ColHeath</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{asset('index/img/favicon.png')}}">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
		<link rel="stylesheet" href="{{asset('index/css/bootstrap-5.0.0-beta1.min.css')}}">
        <link rel="stylesheet" href="{{asset('index/css/LineIcons.2.0.css')}}">
		<link rel="stylesheet" href="{{asset('index/css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('index/css/tiny-slider.css')}}">
		<link rel="stylesheet" href="{{asset('index/css/glightbox.min.css')}}">
		<link rel="stylesheet" href="{{asset('index/css/main.css')}}">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- ========================= preloader start ========================= -->
        <div class="preloader">
            <div class="loader">
                <div class="spinner">
                    <div class="spinner-container">
                        <div class="spinner-rotator">
                            <div class="spinner-left">
                                <div class="spinner-circle"></div>
                            </div>
                            <div class="spinner-right">
                                <div class="spinner-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- ========================= header start ========================= -->
        <header class="header navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{asset('index/img/logo/logo.svg')}}" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#inicio">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#acerca">Acerca</a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#modulos">Módulos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#funcion">Funcionalidades</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#ventajas">Ventajas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contacto">Contacto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ route('login') }}" id="iniciar">Iniciar sesión</a>
                                    </li>
                                </ul>
                                
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        
        </header>
        <!-- ========================= header end ========================= -->

        <!-- ========================= hero-section start ========================= -->
        <a name="inicio"></a>
        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="hero-content-wrapper">
                            <!--<h2 class="mb-25 wow fadeInDown" data-wow-delay=".2s"></h2>-->
                            
                            <h1 class="mb-25 wow fadeInDown" data-wow-delay=".2s">COLHEALTH</h1>
                            <p class="mb-35 wow fadeInLeft" data-wow-delay=".4s">Software de agendamiento de citas médicas para EPS e IPS .</p>
                            <a href="{{ route('login') }}" class="theme-btn">Iniciar sesión</a>
                            
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="hero-img">
                            <div class="d-inline-block hero-img-right">
                                <img src="{{asset('index/img/pngwing.com.png')}}" alt="" class="image wow fadeInRight" data-wow-delay=".5s">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- ========================= hero-section end ========================= -->

        <section id="about" class="pt-100">
            <a name="acerca"></a>
            <div class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-img-wrapper">
                                <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                                    <img src="{{asset('index/img/about/about-img.jpg')}}" alt="">

                                    <div class="about-experience">
                                        <h3>¡Muy fácil de usar!</h3>
                                        <p>Colhealth es sencillo e intuitivo a la hora de realizar sus funcionalidades.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-content-wrapper">
                                <div class="section-title">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">Acerca de ColHealth</span>
                                    <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Software de agendamiento de citas médicas generales</h2>
                                </div>
                                <div class="about-content">
                                    <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">El software Colhealth se especializa en realizar agendamientos de citas médicas generales, donde los pacientes tienen su propio médico asignado y dispuesto al 100% para tratar sus necesidades.</p>
                                    <div class="counter-up wow fadeInUp" data-wow-delay=".5s">
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-1" cup-end="30" cup-append="k">1.</span>
                                            <h4>Pacientes satisfechos</h4>
                                            <p>Es importante para nosotros que el <br class="d-none d-md-block d-lg-none d-xl-block">sistema sea rápido y sin errores.</p>
                                        </div>
                                        <div class="counter" >
                                            <span id="secondo" class="countup count color-2" cup-end="42" cup-append="k">2.</span>
                                            <h4>Reservas en linea</h4>
                                            <p>Ahora puedes programar y revisar tus <br class="d-none d-md-block d-lg-none d-xl-block"> citas de manera virtual.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        


        
        <!-- ========================= feature-section start ========================= -->
        <a name="modulos"></a>
        <section class="feature-section pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Módulos</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-layers"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Médico</h4>
                                <p>Rol encargado de revisar las citas que tiene programadas, las horas de las mismas y generar las incapacidades para el paciente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-agenda"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Paciente</h4>
                                <p>Este es el usuario con la capacidad de generar sus citas con una hora y médico disponibles, además de poder revisar o modificar sus citas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-code-alt"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Administrador</h4>
                                <p>Rol capáz de gestionar la página y ofrecer soporte a las funcionalidades por si fallan. Tambien tiene la capacidad de reactivar o modificar cuentas de los usuarios.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= feature-section end ========================= -->

        <!--========================= about-section start========================= -->
     
        <!--========================= about-section end========================= -->

        <!-- ========================= service-section start ========================= -->
        <a name="funcion"></a>
        <section id="service" class="service-section pt-130 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Servicios</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Funcionalidades</h2>            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-capsule"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Agendamiento de citas</h4>
                                <p>Su función principal permite la creación de citas por parte del paciente o administrador, con una hora y médico disponible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-pencil-alt"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Modificar cita creada</h4>
                                <p>En caso de realizar un ingreso incorrecto de datos puede modificar o cancelar la cita, el paciente contara con un tiempo prudente de antelación para ello.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-eye"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Revisar el historial de citas</h4>
                                <p>Para recordar que citas tiene asignadas, se le ofrece el historial, donde muestra la información detallada de la cita de cada paciente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-circle-plus"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Creación de incapacidades</h4>
                                <p>En caso de que el paciente presente una discapacidad que afecte su funcionalidad o actividad normal, se le permite al médico efectuar la creación de dicha incapacidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-dashboard"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Activar o inactivar cuentas</h4>
                                <p>En caso de que un usuario presente fallas en su cuenta  se le permitirá al administrador inactivar o reactivar dicho usuario del sistema.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-reload"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Modificar su información</h4>
                                <p>El sistema le permitirá modificar su información personal al usuario en caso de alguna actualización de sus respectivos datos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= service-section end ========================= -->
 <!-- ========================= carousel-section end ========================= -->
 <a name="ventajas"></a>
    <div class="row">    
            <div class="section-title text-center">
                <h2 class="wow fadeInUp" data-wow-delay=".4s">Ventajas de ColHealth</h2>            
            </div>
    </div>
 <section class="contact-section pt-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="contact-item-wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item align-items-center">
                                <div class="contact-icon">
                                    <i class="lni lni-thunder-alt"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Agilidad en el sistema</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item align-items-center">
                                <div class="contact-icon">
                                    <i class="lni lni-cloud-network"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Rapida respuesta del software</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item align-items-center">
                                <div class="contact-icon">
                                    <i class="lni lni-control-panel"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Confibilidad</h4>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-6">
                <div class="contact-item-wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item align-items-center">
                                <div class="contact-icon">
                                    <i class="lni lni-shield"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Seguridad</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item align-items-center">
                                <div class="contact-icon">
                                    <i class="lni lni-slideshare"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Integridad Médico-Paciente</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item align-items-center">
                                <div class="contact-icon">
                                    <i class="lni lni-ruler-alt"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Diseño Responsive</h4>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
            
        </div>
    </div>
</section>
 <!--<section class="carousel-section-wrapper">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-section carousel-item active clip-bg pt-225 pb-200 img-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 mx-auto">
                            <div class="carousel-content text-center">
                                <div class="section-title">
                                    <h2 class="text-white">¡Utiliza Colhealth ahora!</h2>
                                    <p class="text-white">En Colhealth contamos con el mejor servicio para el agendamiento de citas, ofreciendole soporte y recordatorio de los detalles.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-section carousel-item clip-bg pt-225 pb-200 img-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 mx-auto">
                            <div class="carousel-content text-center">
                                <div class="section-title">
                                    <h2 class="text-white">¡Alta velocidad!</h2>
                                    <p class="text-white">Nuestro sistema responde de manera inmediata frente a sus peticiones, evite procedimientos largos y aburridos.</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control carousel-control-prev" href="#carouselExampleCaptions" role="button"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
                <i class="lni lni-arrow-left"></i>
            </span>
        </a>
        <a class="carousel-control carousel-control-next" href="#carouselExampleCaptions" role="button"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
                <i class="lni lni-arrow-right"></i>
            </span>
        </a>
    </div>
</section> -->
<!-- ========================= carousel-section end ========================= -->

        <!-- ========================= contact-section start ========================= -->
        <section id="contact" class="contact-section cta-bg img-bg pt-110 pb-100" style="background-image: url('{{asset('index/img/pexels-pavel-danilyuk-5998443.jpg')}}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="section-title mb-60">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s">Contactenos</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">¿Desea contactarse con nosotros?</h2>
                           
                        </div>
                    </div>
            
        </section>
        <!-- ========================= contact-section end ========================= -->
        <a name="contacto"></a>
        <section class="contact-section pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="contact-item-wrapper">
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-phone"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Teléfono</h4>
                                            <p>(+57)0098367234</p>
                                            <p>colheath@colhealth.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-map-marker"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Dirección</h4>
                                            <p>C. 19A, Bogotá</p>
                                            <p>Colombia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-alarm-clock"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Horario</h4>
                                            <p>14 Horas / Lunes - Viernes </p>
                                            <p>Horario: 6 A.M. - 8:00 P.M.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="contact-form-wrapper">
                            <div class="row">
                                <div class="col-xl-10 col-lg-8 mx-auto">
                                    <div class="section-title text-center mb-50">
                              
                                        </span>
                                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Contacto</h2>
                                        <p class="wow fadeInUp" data-wow-delay=".6s">Enviar información sobre inquietudes o aspectos a mejorar.</p>
                                    </div>
                                </div>
                            </div>
                            <form action="{{asset('index/php/mail.php')}}" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" placeholder="Nombre" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" id="email" placeholder="Correo" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="phone" id="phone" placeholder="Celular" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="subject" id="email" placeholder="Destinatario" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <textarea name="message" id="message" placeholder="Escribe tu mensaje" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="button text-center">
                                            <button type="submit" class="theme-btn">Enviar mensaje</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= pricing-section start ========================= -->
    
        <!-- ========================= pricing-section end ========================= -->

        <!-- ========================= subscribe-section start ========================= -->

        <!-- ========================= subscribe-section end ========================= -->

        <!-- ========================= footer start ========================= -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center mb-4">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-widget mt-4 wow fadeInLeft" data-wow-delay=".2s">
                            <a href="index.html" class="logo"><img src="{{asset('index/img/logo/logo.svg')}}" alt="logo" style="max-width: 100%;"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-widget mt-4 wow fadeInLeft " data-wow-delay=".2s">
                            <div class="section-title pt-50">
                                <span class="wow fadeInUp" data-wow-delay=".2s">ColHealth</span>
                                <h3 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Software ideal para tu empresa</h3>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <p class="wow fadeInUp" data-wow-delay=".3s">© 2022 ColHealth - Software by <a
                                    href="https://Sena.edu.co" rel="nofollow">Sena</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========================= footer end ========================= -->

        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-arrow-up"></i>
        </a>
        
		<!-- ========================= JS here ========================= -->
		<script src="{{asset('index/js/bootstrap.bundle-5.0.0-beta1.min.js')}}"></script>
		<script src="{{asset('index/js/contact-form.js')}}"></script>
        <script src="{{asset('index/js/count-up.min.js')}}"></script>
        <script src="{{asset('index/js/tiny-slider.js')}}"></script>
        <script src="{{asset('index/js/isotope.min.js')}}"></script>
        <script src="{{asset('index/js/glightbox.min.js')}}"></script>
        <script src="{{asset('index/js/wow.min.j')}}s"></script>
        <script src="{{asset('index/js/imagesloaded.min.js')}}"></script>
		<script src="{{asset('index/js/main.js')}}"></script>
    </body>
</html>
