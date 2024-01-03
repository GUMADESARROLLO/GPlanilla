<nav class="navbar navbar-standard navbar-expand-lg fixed-top navbar-dark btn-bg-umk" data-navbar-darken-on-scroll="data-navbar-darken-on-scroll">
        <div class="container"><a class="navbar-brand" href="{{ route('Home') }}"><span class="text-white dark__text-white">GPLANILLA</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
              <li class="nav-item dropdown"><a class="nav-link" href="{{ route('Home') }}">Dashboard</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Empleados</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('Employee') }}">Lista</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('AddEmployee') }}">Agregar</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Solcitudes</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="#!">Listas</a>
                    <a class="dropdown-item link-600 fw-medium" href="#!">Crear</a>
                    <a class="dropdown-item link-600 fw-medium" href="#!">Tipos</a>
                    <a class="dropdown-item link-600 fw-medium" href="#!">Estados</a>
                  </div>
                </div>
              </li>             
              <li class="nav-item dropdown"><a class="nav-link" href="{{ route('Catalogos') }}">Catalogos</a>
              
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2">
                  <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Tema claro"><span class="fas fa-sun fs-0"></span></label>
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Tema oscuro"><span class="fas fa-moon fs-0"></span></label>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownLogin" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('name_session')}}</a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card" aria-labelledby="navbarDropdownLogin">
                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('Usuarios') }}" >Usuarios</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('logout') }}">Salir</a>
                  </div>
                </div>
              </li>
              <div class="d-flex align-items-center position-relative">
                
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{ asset('images/user/avatar-4.jpg') }}"   />
                </div>
                </div>
            </ul>
          </div>
        </div>
      </nav>