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
        <h1 class="fw-bolder" style="padding-top: 60px;">Agregar Doctor</h1>
        @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
          {{session()->get('message')}}
        </div>
        @endif
        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div style="padding:15px;">
              <label>Nombre del Doctor</label>
              <input type="text" style="color:black;" name="nombre" placeholder="Escriba el nombre" required="">
           </div>
           <div style="padding:15px;">
              <label>Apellido del Doctor</label>
              <input type="text" style="color:black;" name="apellido" placeholder="Escriba el apellido" required="">
           </div>
           <div style="padding:15px;">
              <label>Identificación</label>
              <input type="number" style="color:black;" name="identificacion" placeholder="Escriba el número de identificación" required="">
           </div>
           <div style="padding:15px;">
              <label>Email</label>
              <input type="email" style="color:black;" name="email" placeholder="Escriba el correo eléctronico" required="">
           </div>
           <div style="padding:15px;">
              <label>Teléfono</label>
              <input type="number" style="color:black;" name="telefono" placeholder="Escriba el número de teléfono">
           </div>
           <div style="padding:15px;">
              <label>Especialidad</label>
              <select name="especialidad" style="color:black; width: 200px;" required="">
                <option value="Odontólogo general">Seleccione la especialidad</option>
                <option value="Odontólogo general">Odontólogo general</option>
                <option value="Odontopediatra">Odontopediatra</option>
                <option value="Ortodoncista">Ortodoncista</option>
                <option value="Periodoncista">Periodoncista</option>
                <option value="Endodoncista">Endodoncista</option>
                <option value="Cirujano oral">Cirujano oral</option>
              </select>
           </div>
           <div style="padding:15px;">
              <label>Horario de atención</label>
              <select name="horario" style="color:black; width: 200px;">
                 <option value="9:00am">Seleccione el horario</option>
                <option value="9:00am">9:00am</option>
                <option value="10:00am">10:00am</option>
                <option value="11:00am">11:00am</option>
                <option value="1:00pm">1:00pm</option>
                <option value="2:00pm">2:00pm</option>
                <option value="3:00pm">3:00pm</option>
                <option value="4:00pm">4:00pm</option>
              </select>
           </div>
           <div style="padding:15px;">
              <label>Imágen Doctor</label>
              <input type="file" name="file">
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

