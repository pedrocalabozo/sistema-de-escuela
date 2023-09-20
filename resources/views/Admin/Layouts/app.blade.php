

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link rel="stylesheet" href="{{ asset('asset/styles.css') }}" />

        @yield('css')
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Panel Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                   
                </div>
            </form>
            <span style="color: #fff;">
            @if(Auth::check())
    {{ Auth::user()->name }}
@endif

            </span>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
  
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Salir</a></li>
                    </ul>
                </li>
            </ul>

         
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        
                            <a class="nav-link" href="{{url('actividades/')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-sticky-note"></i></div>
                                NOTICIAS
                            </a>
                            <a class="nav-link" href="{{url('alumnos')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                ALUMNO
                            </a>  <a class="nav-link" href="{{url('alumnos/create')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                NUEVO ALUMNO
                            </a>

                            <a class="nav-link" href="{{ url('categorias') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-headset"></i></div>
                                CATEGORIAS
                            </a>

                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-headset"></i></div>
                                MANUAL
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-slash"></i></div>
                                SALIR
                            </a>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      



                        <main class="py-4">
            @yield('content')
        </main>

                        <div class="row">
















                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{!! asset('asset/scripts.js') !!}"></script>
    
  

      
        
     @yield('js')
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
