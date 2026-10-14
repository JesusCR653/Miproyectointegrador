<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Mis Mascotas</title>

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
        
        .br-logo { background-color: #118A3B !important; border: none !important; }
        .br-logo a { color: #ffffff !important; font-weight: 700; }
        .br-logo a span { color: #8bc34a !important; font-weight: 400; }
        
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

        .label-turquesa {
            background-color: #1a1a1a !important;
            color: white !important;
            padding: 10px 25px;
            font-weight: bold;
            border-radius: 25px !important;
            display: inline-block;
            text-transform: uppercase;
            font-size: 14px;
        }

        .btn-custom-agregar {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 10px 30px !important;
            font-size: 15px !important;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .thead-marino th {
            background-color: #118A3B !important;
            color: white !important;
            border: none !important;
            font-size: 13px !important;
            text-transform: uppercase;
            font-weight: bold;
            padding: 15px !important;
        }

        .btn-outline-custom-service {
            border: 2px solid #1a1a1a !important;
            color: #1a1a1a !important;
            background-color: transparent;
            font-weight: bold;
            padding: 6px 15px;
            transition: all 0.2s;
        }
        .btn-outline-custom-service:hover {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
        }

        .header-welcome-centered {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white;
            width: auto;
        }
        .header-welcome-centered h6 { margin: 0; font-weight: bold; font-size: 18px; text-transform: uppercase; }

        .logged-name, .navicon-left a i, .sidebar-label, .br-menu-link { color: #ffffff !important; }
        .br-menu-link.active { background-color: #1c9a48 !important; }
    </style>
</head>

<body class="show-left">

    <div class="br-logo"><a href="bienvenidaindex.blade.php"><span>DR. </span>WOOF<span>+</span></a></div>
    
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">Menú Principal</label>
        <div class="br-sideleft-menu">
            <a href="bienvenidaindex.blade.php" class="br-menu-link">
                <div class="br-menu-item"><i class="icon ion-ios-home-outline tx-22"></i><span class="menu-item-label">Inicio</span></div>
            </a>
            <a href="perfil.blade.php" class="br-menu-link">
                <div class="br-menu-item"><i class="icon ion-ios-person-outline tx-24"></i><span class="menu-item-label">Información Personal</span></div>
            </a>
            <a href="registro-canino.blade.php" class="br-menu-link">
                <div class="br-menu-item"><i class="icon ion-ios-plus-outline tx-24"></i><span class="menu-item-label">Registro de mascota</span></div>
            </a>
            <a href="listado_mascotas.blade.php" class="br-menu-link active">
                <div class="br-menu-item"><i class="icon ion-ios-paw tx-24"></i><span class="menu-item-label">Mis Mascotas</span></div>
            </a>
        </div>

        <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20">Herramientas</label>
        <div class="br-sideleft-menu">
            <a href="agenda.blade.php" class="br-menu-link">
                <div class="br-menu-item"><i class="icon ion-ios-calendar-outline tx-24"></i><span class="menu-item-label">Agenda</span></div>
            </a>
            <a href="recordatorios.blade.php" class="br-menu-link">
                <div class="br-menu-item"><i class="icon ion-ios-alarm-outline tx-24"></i><span class="menu-item-label">Recordatorios</span></div>
            </a>
            <a href="comentarios.blade.php" class="br-menu-link">
                <div class="br-menu-item"><i class="icon ion-ios-chatboxes-outline tx-24"></i><span class="menu-item-label">Comentarios</span></div>
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
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div>

        <div class="header-welcome-centered">
            <h6>MIS MASCOTAS</h6>
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
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                
                <div class="d-flex align-items-center justify-content-between mg-b-30 flex-wrap gap-3">
                    <span class="label-turquesa">Mis Mascotas registradas</span>
                    <a href="registro-canino.blade.php" class="btn-custom-agregar">
                        <i class="fa fa-plus"></i> Agregar Nueva
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered mg-b-0">
                        <thead class="thead-marino">
                            <tr>
                                <th class="wd-5p text-center">ID</th>
                                <th class="wd-15p">Mascota</th>
                                <th class="wd-10p text-center">Tipo</th> 
                                <th class="wd-15p">Raza</th>
                                <th class="wd-40p text-center">Opciones de Servicio</th>
                                <th class="wd-15p text-center">Gestión</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr class="tx-inverse bg-white text-center">
                                    <td class="valign-middle font-weight-bold">1</td>
                                    <td class="valign-middle text-left"><strong style="color: #118A3B; font-size: 15px;">Axel</strong></td>
                                    <td class="valign-middle font-weight-bold" style="color: #118A3B;">Perro</td>
                                    <td class="valign-middle text-left">Labrador</td>
                                    <td class="valign-middle text-center">
                                        <div class="btn-group" role="group">
                                            <a href="perro-info.blade.php" class="btn btn-outline-custom-service btn-sm">Info</a>
                                            <a href="generar-qr.blade.php" class="btn btn-outline-custom-service btn-sm">QR</a>
                                            <a href="historial.blade.php" class="btn btn-outline-custom-service btn-sm">Historial</a>
                                            <a href="citas.blade.php" class="btn btn-outline-custom-service btn-sm">Citas</a>
                                            <a href="galeria.blade.php" class="btn btn-outline-custom-service btn-sm">Fotos</a>
                                        </div>
                                    </td>
                                    <td class="valign-middle text-center">
                                        <a href="editar-mascota.blade.php" class="btn btn-warning btn-icon btn-sm" style="border-radius: 6px;"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-icon btn-sm mg-l-5" style="border-radius: 6px;" onclick="return confirm('¿Estás seguro de eliminar a esta mascota?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr class="tx-inverse bg-white text-center">
                                    <td class="valign-middle font-weight-bold">2</td>
                                    <td class="valign-middle text-left"><strong style="color: #118A3B; font-size: 15px;">Firulais</strong></td>
                                    <td class="valign-middle font-weight-bold" style="color: #118A3B;">Perro</td>
                                    <td class="valign-middle text-left">Criollo</td>
                                    <td class="valign-middle text-center">
                                        <div class="btn-group" role="group">
                                            <a href="perro-info.blade.php" class="btn btn-outline-custom-service btn-sm">Info</a>
                                            <a href="generar-qr.blade.php" class="btn btn-outline-custom-service btn-sm">QR</a>
                                            <a href="historial.blade.php" class="btn btn-outline-custom-service btn-sm">Historial</a>
                                            <a href="citas.blade.php" class="btn btn-outline-custom-service btn-sm">Citas</a>
                                            <a href="galeria.blade.php" class="btn btn-outline-custom-service btn-sm">Fotos</a>
                                        </div>
                                    </td>
                                    <td class="valign-middle text-center">
                                        <a href="editar-mascota.blade.php" class="btn btn-warning btn-icon btn-sm" style="border-radius: 6px;"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-icon btn-sm mg-l-5" style="border-radius: 6px;" onclick="return confirm('¿Estás seguro de eliminar a esta mascota?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
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
