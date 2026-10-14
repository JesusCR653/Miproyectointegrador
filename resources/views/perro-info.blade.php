<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Información de Axel</title>

    <link href="../../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../../public/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../public/css/bracket.css">
    
    <style>
        body, .form-control, .btn, input, select, textarea, button, .form-control-custom { font-family: 'Nunito', sans-serif !important; }
        .br-logo a, .header-welcome-centered h6, h1, h2, h3, h4, h5, h6, .form-control-label-custom { font-family: 'Baloo 2', cursive !important; }
        .br-sideleft { 
            background-color: #0c6b2e !important; 
        }
        
        .sidebar-label, .br-menu-link {
            color: #ffffff !important;
        }

        .br-menu-link.active {
            color: #ffffff !important;
            background-color: #1a1a1a !important;
        }

        .br-header { 
            background-color: #118A3B !important; 
            border: none !important; 
        }
        
        .navicon-left a i, .logged-name {
            color: #ffffff !important;
        }

        .br-logo { 
            background-color: #118A3B !important; 
            border: none !important; 
        }
        .br-logo a { 
            color: #ffffff !important; 
            font-weight: 700; 
        }
        .br-logo a span { 
            color: #1a1a1a !important; 
            font-weight: 400; 
        }

        .br-mainpanel {
            background-color: #eaf6ee !important;
            min-height: 100vh;
        }

        .br-pageheader {
            display: none !important;
        }

        .br-pagebody {
            padding: 0 30px 30px 30px !important;
        }

        .br-section-wrapper {
            background-color: #ffffff !important;
            border-radius: 0 0 40px 40px !important;
            padding: 50px 40px !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: none !important;
            margin-top: 0 !important;
        }

        .form-control-label {
            color: #118A3B !important;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .form-control {
            background-color: #dcdcdc !important;
            color: #333333 !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 25px !important;
            font-size: 16px !important;
            font-weight: bold;
            height: auto !important;
            text-align: center;
        }

        .card.bd-0.shadow-base {
            border: 6px solid #118A3B !important;
            border-radius: 15px !important;
            overflow: hidden;
            background-color: #ffffff;
            max-width: 300px;
            margin: 0 auto;
        }
        .card-img-top {
            height: 240px;
            object-fit: cover;
        }

        .card-body.bg-gray-100 {
            background-color: #118A3B !important;
            padding: 12px !important;
        }
        .card-text.tx-inverse {
            color: #ffffff !important;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        .btn-secondary {
            background-color: #1a1a1a !important;
            border: none !important;
            color: #ffffff !important;
            border-radius: 25px !important;
            padding: 12px 40px !important;
            font-size: 16px !important;
            font-weight: bold;
            transition: background-color 0.2s;
        }
        .btn-secondary:hover {
            background-color: #0c6b2e !important;
        }
    </style>
</head>

<body class="show-left">

    <div class="br-logo"><a href="index.blade.php"><span>DR.</span> WOOF<span>+</span></a></div>

    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">Menú Principal</label>
        <div class="br-sideleft-menu">
            <a href="bienvenidaindex.blade.php" class="br-menu-link">
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
            <a href="listado_mascotas.blade.php" class="br-menu-link active">
                <div class="br-menu-item">
                    <i class="icon ion-ios-paw tx-24"></i>
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
        <div class="br-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">Juan Pérez López</span>
                        <img src="../../public/img/logo.png" class="wd-32 rounded-circle mg-l-10" alt="Perfil">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="perfil.blade.php"><i class="icon ion-ios-person"></i> Perfil</a></li>
                            <li><a href="index.blade.php"><i class="icon ion-power"></i> Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="index.blade.php">DR. WOOF</a>
                <span class="breadcrumb-item">Mascota</span>
                <span class="breadcrumb-item active">Axel</span>
            </nav>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper shadow-base bd-0">
                <div class="row align-items-center">

                    <div class="col-md-8">
                        <div class="form-layout form-layout-1">
                            <div class="row mg-b-25">
                              
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Tipo de Mascota:</label>
                                        <input class="form-control" type="text" value="Perro" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Nombre de la mascota:</label>
                                        <input class="form-control tx-bold tx-inverse" type="text" value="Axel" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 mg-t-20">
                                    <div class="form-group">
                                        <label class="form-control-label">Raza:</label>
                                        <input class="form-control" type="text" value="Labrador" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 mg-t-20">
                                    <div class="form-group">
                                        <label class="form-control-label">Edad:</label>
                                        <input class="form-control" type="text" value="3 años" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 mg-t-20">
                                    <div class="form-group">
                                        <label class="form-control-label">Sexo:</label>
                                        <input class="form-control" type="text" value="Macho" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 mg-t-20">
                                    <div class="form-group">
                                        <label class="form-control-label">Color:</label>
                                        <input class="form-control" type="text" value="Dorado" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 mg-t-20">
                                    <div class="form-group">
                                        <label class="form-control-label">Peso:</label>
                                        <input class="form-control" type="text" value="22 kg" readonly>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="form-layout-footer text-left mg-t-20">
                                <a href="listado_mascotas.blade.php" class="btn btn-secondary pd-x-30">
                                    <i class="fa fa-arrow-left mg-r-5"></i> Regresar
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center mg-t-30 mg-md-t-0">
                        <div class="card bd-0 shadow-base">
                            <img class="card-img-top img-fluid" 
                                 src="../../public/img/Axel.png" 
                                 alt="Axel"
                                 onerror="this.src='../../public/img/husky.png'">
                            <div class="card-body bg-gray-100">
                                <p class="card-text tx-bold tx-uppercase tx-14" style="color:#118A3B;">
                                    AXEL
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="../../public/lib/popper.js/popper.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>
</body>
</html>
