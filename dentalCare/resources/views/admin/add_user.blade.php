<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="es">

<head>
  <style type="text/css">
    label{
      display: inline-block;
      width: 200px;
    } 
  </style>
  <!-- Required meta tags -->
  @include('admin.css')
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
     
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
         
            <div class="list-wrapper px-3">
           
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
          
            <div class="events pt-4 px-3">
              
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
         
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin.side')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        
        <div class="container" align="center" style="padding: top 100px;">
        <h1 class="fw-bolder" style="padding-top: 60px;">Agregar Usuario</h1>
        @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
          {{session()->get('message')}}
        </div>
        @endif
        <form action="{{url('upload_user')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div style="padding:15px;">
              <label>Nombre del Usuario</label>
              <input type="text" style="color:black;" name="nombre" placeholder="Escriba el nombre" required="">
           </div>
           <div style="padding:15px;">
              <label>Apellido del Usuario</label>
              <input type="text" style="color:black;" name="apellido" placeholder="Escriba el apellido" required="">
           </div>
           <div style="padding:15px;">
              <label>Identificación</label>
              <input type="number" style="color:black;" name="identificacion" placeholder="Escriba el número de identificación" required="">
           </div>
           <div style="padding:15px;">
              <label>Edad</label>
              <input type="text" style="color:black;" name="edad" placeholder="Escriba la edad" required="">
           </div>
           <div style="padding:15px;">
              <label>Email</label>
              <input type="email" style="color:black;" name="email" placeholder="Escriba el correo eléctronico" required="">
           </div>
           <div style="padding:15px;">
              <label>Contraseña</label>
              <input id="password" type="password" style="color:black;" name="password" placeholder="Escriba la nueva contraseña" required autocomplete="new-password" >
           </div>
           <div style="padding:15px;">
              <label>Confirmar contraseña</label>
              <input id="password_confirmation" type="password" style="color:black;" name="password_confirmation" placeholder="Escriba la nueva contraseña" required autocomplete="new-password" >
           </div>
           <div style="padding:15px;">
              <label>Teléfono</label>
              <input type="number" style="color:black;" name="telefono" placeholder="Escriba el número de teléfono">
           </div>
           <div style="padding:15px;">
              <label>Dirección</label>
              <input type="text" style="color:black;" name="direccion" placeholder="Escriba la dirección">
           </div>
           
           <div style="padding:15px;">
              <input type="submit" class="btn btn-success">
           </div>
        </form>
      </div>
    </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include('admin.script')
  <!-- End custom js for this page-->
</body>

</html>

