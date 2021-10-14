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
    padding-left: 300px;" align="center"></a>

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
  
    <div align="center" style="padding:70px;">
    <table>
                <tr style="background-color:#1453A6;" align="center">
                    <th style="padding:7px; font-size:13px; color:white;">Nombre Usuario</th>
                    <th style="padding:7px; font-size:13px; color:white;">Apellido Usuario</th>
                    <th style="padding:7px; font-size:13px; color:white;">Identificacion</th>
                    <th style="padding:7px; font-size:13px; color:white;">Edad</th>
                    <th style="padding:7px; font-size:13px; color:white;">Email</th>
                    <th style="padding:7px; font-size:13px; color:white;">Teléfono</th>
                    <th style="padding:7px; font-size:13px; color:white;">Direccion</th>
                
                    <th style="padding:7px; font-size:13px; color:white;">Actualizar</th>

  

                    

                </tr>   
                  @foreach($user as $users)
                  <tr style="background-color:#BFD1D9;">
                    <td style="padding:7px; font-size:12px; color:black;">{{$users->nombre}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$users->apellido}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$users->identificacion}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$users->edad}}</td>
                    <td style="padding:7px; font-size:12px;  color:black;">{{$users->email}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$users->telefono}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$users->direccion}}</td> 
                    
                    <td>
                    <a class="btn btn-primary btn-sm" href="{{url('update_profile',$users->id)}}">Actualizar</a>
                    </td>
                    
                 </tr>
            @endforeach
    </table> 
    </div>    

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>