<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        
          <li class="nav-item nav-category">Doctor</li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('add_doctor_view')}}">
              <i class="menu-icon mdi mdi-account-plus"></i>
              <span class="menu-title">Agregar Doctor</span>
            </a>
          </li>
          <li class="nav-item nav-category">Usuario</li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('add_user_view')}}">
              <i class="menu-icon mdi mdi-account-plus"></i>
              <span class="menu-title">Agregar Usuario</span>
            </a>
          </li>
          <li class="nav-item nav-category">Citas médicas</li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('showappointment')}}">
              <i class="menu-icon mdi mdi-calendar-check"></i>
              <span class="menu-title">Administrar citas</span>
            </a>
          </li>
          <li class="nav-item nav-category">Ver Doctores</li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('showdoctor')}}">
              <i class="menu-icon mdi mdi-human"></i>
              <span class="menu-title">Todos los doctores</span>
            </a>
          </li>
          <li class="nav-item nav-category">Ver Usuarios</li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('showuser')}}">
              <i class="menu-icon mdi mdi-human-male-female"></i>
              <span class="menu-title">Todos los usuarios</span>
            </a>
          </li>

        </ul>
</nav>