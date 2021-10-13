<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <base href="/public">
  <style type ="text/css">
    label
    {
        display: inline-block;
        width: 200px;
    }
    </style>
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
         
            
            
          
            <div class="events pt-4 px-3">
              
              
            </div>
          </div>
          <!-- To do section tab ends -->
         
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin.side')
      <div class="container-fluid page-body-wrapper">
      

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
            <form action="{{url('edituser',$data->id)}}" method="POST" enctype="multipart/form-data">  
                
                @csrf

                <div  style="padding:15px;">
                    <label>Nombre del Usuario</label>
                    <input type="text"  style="color:black;" name="nombre" value="{{$data->nombre}}">
                    
        
                </div>
                <div style="padding:15px;">
                    <label>Apellido del Usuario</label>
                    <input type="text" style="color:black;" name="apellido" value="{{$data->apellido}}">
                    
        
                </div>
                <div style="padding:15px;">
                    <label>Identificacion</label>
                    <input type="text" style="color:black;" name="identificacion" value="{{$data->identificacion}}">
                    
        
                </div>
                <div style="padding:15px;">
                    <label>Edad</label>
                    <input type="text" style="color:black;" name="edad" value="{{$data->edad}}">
                    
        
                </div>
                <div style="padding:15px;">
                    <label>Email</label>
                    <input type="text" style="color:black;" name="email" value="{{$data->email}}">
                    
        
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
                    <input type="submit" class="btn btn-success">
                </div>
                

            
            </form>
        </div>   
    </div>   
      <!-- partial -->
      <!-- @include('admin.body') -->
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include('admin.script')
  <!-- End custom js for this page-->
</body>

</html>

