<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>DentalCare Clinic</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +57 3015915933</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> dental_care@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->
    <a class="navbar-brand"  href="home"><img height = 100 weight=100 src="admin/images/DENTALCARE.png" alt="logo" style="
    padding-left: 300px;" ></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
   
      <div class="container" id="loren">
        

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" style="background-color:#1453A6; color: white;" href="home">Inicio</a>
            </li>
            
            @if(Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="nav-link" style="background-color:#1453A6; color: white;" href="{{url('myappointment')}}">Mis citas médicas</a>
             
            </li>
            <li class="nav-item">
              <a class="nav-link" style="background-color:#1453A6; color: white;" href="{{url('myprofile')}}">Mi perfil</a>

            </li>

            <x-app-layout>
            </x-app-layout>

            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Registrarse</a>
            </li>
            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
    
  </header>
  
  @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
          {{session()->get('message')}}
        </div>
        @endif



  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Hacemos de tu sonrisa algo mejor</span>
        <h1 class="display-4">Cuida tu salud oral</h1>
        <a href="{{route('login')}}" class="btn btn-primary">Agendar una cita médica</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
   
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Bienvenido a DentalCare Clinic<br> </h1>
            <p class="text-grey mb-4">Nos ocupamos de tu sonrisa cuidando muy de cerca tu salud oral. Notarás resultados estéticos y funcionales hechos por profesionales altamente calificados, de la mano del Dr. Francisco Zuluaga, experto con mas de 35 años de experiencia. Por eso somos odontologia de verdad™.</p>
            <a href="about.html" class="btn btn-primary">Leer más</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

 
@include('user.doctor')


@include('user.latest')  

@include('user.appointment')

  <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
         
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
         <li>Proyecto Final Factores Humanos - 2021</li>
         <li>Hanna Villamil</li>
         <li>Elian Peña</li>
         <li>Diego Gonzales</li>

         
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
        
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contacto</h5>
          <p class="footer-link mt-2">Universidad Distrital Francisco Jose de Caldas</p>
          <a href="#" class="footer-link">+57 3015915933</a>
          <a href="#" class="footer-link">dental_care@gmail.com</a>

          <h5 class="mt-3">Redes Sociales</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2021  Factores Humanos</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>