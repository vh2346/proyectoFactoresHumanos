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
    <a class="navbar-brand"  href="/home"><img height = 100 weight=100 src="/admin/images/DENTALCARE.png" alt="logo" style="
    padding-left: 300px;" align="center"></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
   
      <div class="container" id="loren">
        

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" style="background-color:#1453A6; color: white;" href="/home">Inicio</a>
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
    <div class="container" align="center" style="padding:top 100px;">
            @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
            {{session()->get('message')}}
            </div>
            @endif
        <h1 class="fw-bolder" style="padding-top: 60px;">Editar información del usuario</h1>
        <h1 class="fw-bolder" style="padding-top: 20px;"></h1>
        <form action="{{url('edit_profile',$data->id)}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div  style="padding:15px;">
                    <label for="disabledTextInput">Nombre del Usuario</label>
                    <input type="text"  id="disabledTextInput"  style="background-color:gray;" name="nombre" value="{{$data->nombre}}" readonly>
                    
        
                </div>
                <div style="padding:15px;">
                    <label>Apellido del Usuario</label>
                    <input type="text" id="disabledTextInput"  style="background-color:gray;" name="apellido" value="{{$data->apellido}}" readonly>
                    
        
                </div>
                <div style="padding:15px;">
                    <label>Identificacion</label>
                    <input type="text" id="disabledTextInput"  style="background-color:gray;" name="identificacion" value="{{$data->identificacion}}"readonly>
                    
        
                </div>
                <div style="padding:15px;">
                    <label>Edad</label>
                    <input type="text" style="color:black;" name="edad" value="{{$data->edad}}">
                    
        
                </div>
                <div style="padding:15px;">
                    <label>Email</label>
                    <input type="text" id="disabledTextInput"  style="background-color:gray;" name="email" value="{{$data->email}}" readonly>
                    
        
                </div>
                <div style="padding:15px;">
                    <label>Teléfono</label>
                    <input type="text" style="color:black;" name="telefono" value="{{$data->telefono}}">
                    
        
                </div>
                <div style="padding:15px;">
                    <label>Direccion</label>
                    <input type="text" style="color:black;" name="direccion" value="{{$data->direccion}}">
                    
        
                </div>
                
                <div style="padding:15px;">
                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Enviar</button>
                </div>
                

            
            </form>
        </div>   
    </div>    

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>