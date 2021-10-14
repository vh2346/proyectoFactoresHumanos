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
        <h1 class="fw-bolder" style="padding-top: 40px;">Doctores Registrados</h1>
        <h1 class="fw-bolder" style="padding-top: 20px;"></h1>
        <div class="float-right">
            <form class="form-inline"action="{{url('/searchDoctores')}}" method="GET" align="center">
              @csrf

              <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
                <option>Buscar por tipo</option>
                <option>Nombre</option>
                <option>Apellido</option>
                <option>identificacion</option>
                <option>Email</option>
                <option>Especialidad</option>
              </select> 
              <input type="text" name="buscarpor" style="color:blue;" placeholder="Buscar">
          
              <input type="submit" value="Buscar" class="btn btn-success">

            </form>  
            <br>
</div>
            <table>
                <tr style="background-color:#1453A6;" align="center">
                    <th style="padding:7px; font-size:13px; color:white;">Nombre Doctor</th>
                    <th style="padding:7px; font-size:13px; color:white;">Apellido Doctor</th>
                    <th style="padding:7px; font-size:13px; color:white;">Identificacion</th>
                    <th style="padding:7px; font-size:13px; color:white;">Email</th>
                    <th style="padding:7px; font-size:13px; color:white;">Teléfono</th>
                    <th style="padding:7px; font-size:13px; color:white;">Especialidad</th>
                    <th style="padding:7px; font-size:13px; color:white;">Horario</th>
                    <th style="padding:7px; font-size:13px; color:white;">Imagen</th>
                    <th style="padding:7px; font-size:13px; color:white;">Eliminar</th>
                    <th style="padding:7px; font-size:13px; color:white;">Actualizar</th>

  

                    

                </tr>   
                  @foreach($data as $doctor)
                  <tr style="background-color:#BFD1D9;">
                    <td style="padding:7px; font-size:12px; color:black;">{{$doctor->nombre}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$doctor->apellido}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$doctor->identificacion}}</td>
                    <td style="padding:7px; font-size:12px;  color:black;">{{$doctor->email}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$doctor->telefono}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$doctor->especialidad}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$doctor->horario}}</td>
                    
                    <td style="padding:7px; font-size:12px; color:black;"><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                    
                    <td>
                      <a onclick="return confirm('Estás seguro de eliminarlo?')" class="btn btn-danger btn-sm" href="{{url('deletedoctor',$doctor->id)}}">Eliminar</a>
                    </td>  
                    <td>
                    <a class="btn btn-primary btn-sm" href="{{url('updatedoctor',$doctor->id)}}">Actualizar</a>
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

