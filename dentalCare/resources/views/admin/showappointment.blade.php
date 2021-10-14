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
        <h1 class="fw-bolder" style="padding-top: 40px;">Citas agendadas</h1>
        
        <h1 class="fw-bolder" style="padding-top: 20px;"></h1>
           
            <div class="float-right">
            <form class="form-inline"action="{{url('/searchCitas')}}" method="GET" align="center">
              @csrf

              <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
                <option>Buscar por tipo</option>
                <option>Nombre</option>
                <option>Apellido</option>
                <option>identificacion</option>
                <option>Email</option>
                <option>Fecha</option>
                <option>Doctor</option>
              </select> 
              <input type="text" name="buscarpor" style="color:blue;" placeholder="Buscar">
          
              <input type="submit" value="Buscar" class="btn btn-success">

            </form>  
            <br>
</div>

            <table>
                <tr style="background-color:#1453A6;" align="center">
                    <th style="padding:7px; font-size:13px; color:white;">Nombre Paciente</th>
                    <th style="padding:7px; font-size:13px; color:white;">Apellido Paciente</th>
                    <th style="padding:7px; font-size:13px; color:white;">Identificacion</th>
                    <th style="padding:7px; font-size:13px; color:white;">Email</th>
                    <th style="padding:7px; font-size:13px; color:white;">Fecha </th>
                    <th style="padding:7px; font-size:13px; color:white;">Doctor</th>
                    <th style="padding:7px; font-size:13px; color:white;">Especialidad</th>
                    <th style="padding:7px; font-size:13px; color:white;">Horario</th>
                    <th style="padding:7px; font-size:13px; color:white;">Teléfono</th>
                    <th style="padding:7px; font-size:13px; color:white;">Mensaje</th>
                    <th style="padding:7px; font-size:13px; color:white;">Estado</th>
                    <th style="padding:7px; font-size:13px; color:white;">Aceptar</th>
                    <th style="padding:7px; font-size:13px; color:white;">Cancelar</th>

                    

                </tr>   
                @foreach($data as $appoint)
                  <tr style="background-color:#BFD1D9;">
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->nombre}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->apellido}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->identificacion}}</td>
                    <td style="padding:7px; font-size:12px;  color:black;">{{$appoint->email}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->fecha}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->doctor}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->especialidad}}</td>
                    
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->horario}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->telefono}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->mensaje}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->estado}}</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="{{url('approved',$appoint->id)}}">Aceptar</a>  
                    </td>  
                    <td>
                      <a class="btn btn-danger btn-sm" href="{{url('canceled',$appoint->id)}}">Cancelar</a>
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

