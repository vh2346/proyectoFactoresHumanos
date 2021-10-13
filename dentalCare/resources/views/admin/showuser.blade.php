<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="es">

<head>
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
        <div align="center" style="padding-left:20px;">
        <h1 class="fw-bolder" style="padding-top: 40px;">Usuarios Registrados</h1>
        <h1 class="fw-bolder" style="padding-top: 20px;"></h1>
            <table>
                <tr style="background-color:#1453A6;" align="center">
                    <th style="padding:7px; font-size:13px; color:white;">Nombre Usuario</th>
                    <th style="padding:7px; font-size:13px; color:white;">Apellido Usuario</th>
                    <th style="padding:7px; font-size:13px; color:white;">Identificacion</th>
                    <th style="padding:7px; font-size:13px; color:white;">Edad</th>
                    <th style="padding:7px; font-size:13px; color:white;">Email</th>
                    <th style="padding:7px; font-size:13px; color:white;">Teléfono</th>
                    <th style="padding:7px; font-size:13px; color:white;">Direccion</th>
                
                    <th style="padding:7px; font-size:13px; color:white;">Eliminar</th>
                    <th style="padding:7px; font-size:13px; color:white;">Actualizar</th>

  

                    

                </tr>   
                  @foreach($data as $user)
                  <tr style="background-color:#BFD1D9;">
                    <td style="padding:7px; font-size:12px; color:black;">{{$user->nombre}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$user->apellido}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$user->identificacion}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$user->edad}}</td>
                    <td style="padding:7px; font-size:12px;  color:black;">{{$user->email}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$user->telefono}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$user->direccion}}</td>
                    
                    
                    
                    
                    <td>
                      <a onclick="return confirm('Estás seguro de eliminarlo?')" class="btn btn-danger btn-sm" href="{{url('deleteuser',$user->id)}}">Eliminar</a>
                    </td>  
                    <td>
                    <a class="btn btn-primary btn-sm" href="{{url('updateuser',$user->id)}}">Actualizar</a>
                    </td>
                   
                    
                 </tr>
                @endforeach
            </table>    
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

