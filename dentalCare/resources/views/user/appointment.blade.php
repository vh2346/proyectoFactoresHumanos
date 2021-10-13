<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Agenda una cita médica</h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Apellido</label>
            <input type="text" name="apellido" class="form-control" placeholder="Apellido">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Número de identificación</label>
            <input type="text" name="identificacion" class="form-control" placeholder="Ingrese su No.de Identificacion">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <label>Fecha</label>
            <input type="date" name="fecha" class="form-control">
          </div>
          <div class="col-12 col-sm-9 py-2 wow fadeInRight" >
          <label>Agenda Disponible (Revisar disponibilidad antes de agendar)</label>
            <select name="agenda" id="agenda" class="custom-select ">

            <option value = "doctor">--Revisar-- </option>
              @foreach($doctor as $doctors)
              
              <option value="{{$doctors->nombre}}">{{$doctors->nombre}}_{{$doctors->apellido}} | {{$doctors->especialidad}} | {{$doctors->horario}} </option>
              
              @endforeach
              

            </select>
            </div>  
          <div class="col-12 col-sm-13 py-2 wow fadeInLeft" >
          <label class="text-info col-sm-13 col-form-label col-form-label-lg">De acuerdo a la disponibilidad, confirme los datos del medico , especialidad y hora* </label>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" >
          
          <label>Doctor </label>
            <select name="doctor" id="departement" class="custom-select">

            <option value = "doctor">Seleccionar Doctor </option>
              @foreach($doctor as $doctors)
              
              <option value="{{$doctors->nombre}}_{{$doctors->apellido}}">{{$doctors->nombre}}_{{$doctors->apellido}} </option>
              
              @endforeach
              

            </select>
            </div>  
            <div class="col-12 col-sm-6 py-2 wow fadeInLeft" >
            <label>Especialidad</label>
            <select name="especialidad" id="departement" class="custom-select">

            <option value = "especialidad">Seleccionar Especialidad</option>
              @foreach($doctor as $doctors)
              
              <option value="{{$doctors->especialidad}}">{{$doctors->especialidad}} </option>
              
              @endforeach
              
              
            </select>
            </div>  
            <div class="col-12 col-sm-6 py-2 wow fadeInRight" >
            <label>Horario</label>
            <select name="horario" id="departement" class="custom-select">

            <option value = "horario">Seleccionar Horario</option>
              @foreach($doctor as $doctors)
              
              <option value="{{$doctors->horario}}">{{$doctors->horario}} </option>
              
              @endforeach
              
              
            </select>
            </div>  
           
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label>Telefono</label>
            <input type="text" name = "telefono" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label>Ingrese su mensaje</label>
            <textarea name="mensaje" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Agendar cita</button>
      </form>
    </div>
  </div> <!-- .page-section -->