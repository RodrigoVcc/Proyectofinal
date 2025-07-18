
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/panel" class="brand-link">
        <img src="{{ asset('images/logo_0.png') }}" alt="Logo" class="brand-image img-circle elevation-3" >
        <span class="brand-text font-weight" style="color: white">PANEL DE CONTROL</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">

                <!-- ROLES Y PERMISO -->
                @canany(['create','store','edit','delete'])
                 <li class="nav-item">

                     <a href="#" class="nav-link nav-">
                        <i class="far fa-edit"></i>
                        <p>
                            Roles y Permisos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.roles.index') }}" target="frameprincipal" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rol y Permisos</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.permisos.index') }}" target="frameprincipal" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuario</p>
                            </a>
                        </li>

                    </ul>
                 </li>
                @endcan
                 <li class="nav-item">
                        <a href="{{ route('clientes.index') }}" target="frameprincipal" class="nav-link">
                            <i class="fa fa-user-tie nav-icon"></i>
                        <p>clientes</p>
                        </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('weather') }}" target="frameprincipal" class="nav-link">
                        <i class="fas fa-cloud-sun nav-icon"></i>
                        <p>Ver clima actual</p>
                    </a>
                </li>
            </ul>
        </nav>
        <form method="POST" action="{{ route('admin.logout') }}" class="logout-form">
            @csrf
            <button type="submit" class="nav-link btn btn-link logout-btn">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>Salir</p>
            </button>
        </form>

    </div>
</aside>