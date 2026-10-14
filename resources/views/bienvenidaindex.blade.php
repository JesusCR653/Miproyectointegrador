<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Dashboard</title>

    <link href="../../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../../public/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../public/css/bracket.css">
    
    <style>
        body, .form-control, .btn, input, select, textarea, button, .form-control-custom { font-family: 'Nunito', sans-serif !important; }
        .br-logo a, .header-welcome-centered h6, h1, h2, h3, h4, h5, h6, .form-control-label-custom { font-family: 'Baloo 2', cursive !important; }
        .br-sideleft { background-color: #0c6b2e !important; }
        .br-header { background-color: #118A3B !important; border: none !important; }
        .sidebar-label { color: #ffffff !important; opacity: 0.7; }
        .br-menu-link { color: #ffffff !important; }
        .br-menu-link.active { background-color: #1c9a48 !important; color: #ffffff !important; }
        
        .br-logo { 
            background-color: #118A3B !important; 
            border: none !important;
        }
        .br-logo a {
            color: #ffffff !important;
            font-weight: 700;
        }
        .br-logo a span {
            color: #8bc34a !important;
            font-weight: 400;
        }
        
        .br-mainpanel {
            background: linear-gradient(180deg, #eaf6ee 0%, #ffffff 55%) !important;
            position: relative;
            min-height: 100vh;
            margin: 0 !important;
            padding: 0 !important;
            overflow: hidden;
        }
        .br-mainpanel::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url('../../public/img/fondo.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0.06;
            pointer-events: none;
        }
        .br-mainpanel .br-pagebody { position: relative; z-index: 1; }

        .br-pagebody {
            margin: 0 !important;
            padding: 100px 0 0 0 !important;
        }

        .header-welcome-centered {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white;
            width: auto;
        }
        .header-welcome-centered h6 { margin: 0; font-weight: bold; font-size: 16px; }
        .header-welcome-centered p { margin: 0; font-size: 11px; opacity: 0.9; }

        .logged-name { color: #ffffff !important; }
        .navicon-left a i { color: #ffffff !important; }
    </style>
</head>

<body>

    <div class="br-logo"><a href="index.blade.php"><span>DR. </span>WOOF<span>+</span></a></div>
    
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">Menú Principal</label>
        <div class="br-sideleft-menu">
            <a href="index.blade.php" class="br-menu-link active">
                <div class="br-menu-item">
                    <i class="icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Inicio</span>
                </div>
            </a>
            <a href="perfil.blade.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="icon ion-ios-person-outline tx-24"></i>
                    <span class="menu-item-label">Información Personal</span>
                </div>
            </a>
            <a href="registro-canino.blade.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="icon ion-ios-plus-outline tx-24"></i>
                    <span class="menu-item-label">Registro de mascota</span>
                </div>
            </a>
            <a href="listado_mascotas.blade.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="icon ion-ios-paw-outline tx-24"></i>
                    <span class="menu-item-label">Mis Mascotas</span>
                </div>
            </a>
        </div>

        <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20">Herramientas</label>
        <div class="br-sideleft-menu">
            <a href="agenda.blade.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="icon ion-ios-calendar-outline tx-24"></i>
                    <span class="menu-item-label">Agenda</span>
                </div>
            </a>
            <a href="recordatorios.blade.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="icon ion-ios-alarm-outline tx-24"></i>
                    <span class="menu-item-label">Recordatorios</span>
                </div>
            </a>
            <a href="comentarios.blade.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="icon ion-ios-chatboxes-outline tx-24"></i>
                    <span class="menu-item-label">Comentarios</span>
                </div>
            </a>
            <a href="respaldo.blade.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="icon ion-ios-gear-outline tx-24"></i>
                    <span class="menu-item-label">Mantenimiento</span>
                </div>
            </a>
        </div>
    </div>

    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down">
                <a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a>
            </div>
        </div>

        <div class="header-welcome-centered">
            <h6>¡Bienvenidos, Juan!</h6>
            <p>Bienvenido de nuevo al centro de control de DR. WOOF</p>
        </div>
      
        <div class="br-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">Juan Pérez López</span>
                        <img src="../../public/img/logo.png" class="wd-32 rounded-circle mg-l-10" alt="Perfil">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="perfil.blade.php"><i class="icon ion-ios-person"></i> Editar Perfil</a></li>
                            <li><a href="index.blade.php"><i class="icon ion-power"></i> Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="br-mainpanel">
        <div class="br-pagebody">
            <div class="text-center">
                
                <div class="d-flex justify-content-center mg-b-40">
                    <img src="../../public/img/logo.png" style="width: 350px; height: auto;" alt="Logo DR. WOOF">
                </div>
                
                <div class="d-flex justify-content-center">
                    <a href="registro-canino.blade.php" class="btn btn-info pd-x-50 pd-y-15 tx-uppercase tx-bold tx-14" style="background-color: #1c9a48; border: none; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
                        Registrar mascota
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>
</body>
</html>
