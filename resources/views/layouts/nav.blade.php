<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <a href="#">{{ config('app.name', 'SAPE') }}</a>
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="sidebar-header">
          <div class="user-pic">
            <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
              alt="User picture">
          </div>
          <div class="user-info">
            <span class="user-name">
              <strong>{{ Auth::user()->name }}</strong>
            </span>
            <span class="user-role">Alumno</span>
           
          </div>
        </div>
        <!-- sidebar-header  -->
        
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span>General</span>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-tachometer-alt"></i>
                <span>Materias</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="#">Materia 1</a>
                  </li>
                  <li>
                    <a href="#">Materia 2</a>
                  </li>
                  <li>
                    <a href="#">Materia 3</a>
                  </li>
                </ul>
              </div>
            </li>
            
           
            <li class="header-menu">
              <span>Otros</span>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Comunicados</span>
                <span class="badge badge-pill badge-primary">Nuevo</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Notificaciones</span><span class="badge badge-pill badge-danger">3</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-folder"></i>
                <span>Perfil</span>
              </a>
            </li>
            <li>
                <a href="#">
                  <i class="fa fa-folder"></i>
                  <span>Soporte</span>
                </a>
              </li>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
      <!-- sidebar-content  -->
      <div class="sidebar-footer">
        <a href="#">
          <i class="fa fa-bell"></i>
          <span class="badge badge-pill badge-warning notification">3</span>
        </a>
        <a href="#">
          <i class="fa fa-envelope"></i>
          <span class="badge badge-pill badge-success notification">7</span>
        </a>
        <a href="#">
          <i class="fa fa-cog"></i>
          <span class="badge-sonar"></span>
        </a>
        
      </div>
    </nav>     

    