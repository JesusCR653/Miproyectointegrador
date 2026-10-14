<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Cartilla de Vacunación</title>

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

        .br-section-wrapper {
            background-color: #ffffff !important;
            border-radius: 40px !important;
            padding: 40px !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: none !important;
            margin-top: 30px !important;
        }

        .title-custom-blue {
            color: #118A3B !important;
            font-weight: bold;
        }

        .table-colored.table-custom-woof thead {
            background-color: #118A3B !important;
            color: #ffffff !important;
        }
        .table-bordered th, .table-bordered td {
            border-color: #cdeed7 !important;
        }
        .table-custom-woof tbody td, 
        .table-custom-woof tbody td strong {
            color: #000000 !important;
        }

        .btn-custom-panel {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            font-weight: bold;
            padding: 10px 25px;
            transition: background-color 0.2s;
        }
        .btn-custom-panel:hover {
            background-color: #0c6b2e !important;
            color: #ffffff !important;
        }

        .btn-custom-secondary {
            background-color: #dcdcdc !important;
            color: #333333 !important;
            border: none !important;
            border-radius: 25px !important;
            font-weight: bold;
            padding: 10px 25px;
            transition: background-color 0.2s;
        }
        .btn-custom-secondary:hover {
            background-color: #c5c5c5 !important;
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
        .br-menu-link.active, .br-menu-link:hover { background-color: #1c9a48 !important; border-radius: 4px; }
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
                <div class="br-menu-item"><i class="icon ion-ios-gear-outline tx-24"></i><span class="menu-item-label">Mantenimiento</span></div>
            </a>
        </div>
    </div>

    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div>
        
        <div class="header-welcome-centered">
            <h6>CARTILLA DE INMUNIZACIÓN</h6>
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
                <span class="breadcrumb-item active">Cartilla de Vacunación</span>
            </nav>
        </div>

        <div class="pd-x-20 pd-sm-x-30 pd-t-30">
            <h4 class="title-custom-blue mg-b-5">Cartilla Digital: Axel</h4>
            <p class="mg-b-0 text-muted">Registro oficial de inmunizaciones aplicadas al paciente.</p>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper shadow-base bd-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-colored table-custom-woof mg-b-0">
                        <thead>
                            <tr>
                                <th class="wd-30p">Vacuna / Tratamiento</th>
                                <th class="wd-25p">Fecha Aplicación</th>
                                <th class="wd-25p">Próxima Dosis</th>
                                <th class="wd-20p text-center">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Quíntuple (DHPPI + L)</strong></td>
                                <td>05 de Noviembre, 2025</td>
                                <td>05 de Noviembre, 2026</td>
                                <td class="text-center"><span class="badge badge-success" style="padding: 6px 12px; border-radius: 10px;">Aplicada</span></td>
                            </tr>
                            <tr>
                                <td><strong>Sextuple (Refuerzo Anual)</strong></td>
                                <td>15 de Enero, 2026</td>
                                <td>15 de Enero, 2027</td>
                                <td class="text-center"><span class="badge badge-success" style="padding: 6px 12px; border-radius: 10px;">Aplicada</span></td>
                            </tr>
                            <tr>
                                <td><strong>Rabia (Cepa Oficial)</strong></td>
                                <td>15 de Enero, 2026</td>
                                <td>15 de Enero, 2027</td>
                                <td class="text-center"><span class="badge badge-success" style="padding: 6px 12px; border-radius: 10px;">Aplicada</span></td>
                            </tr>
                            <tr>
                                <td><strong>Bordetella (Bronchicine)</strong></td>
                                <td>---</td>
                                <td>22 de Abril, 2026</td>
                                <td class="text-center"><span class="badge badge-warning" style="padding: 6px 12px; border-radius: 10px; color: #fff; background-color: #f39c12;">Pendiente</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="mg-t-30 text-right">
                    <button class="btn btn-custom-secondary pd-x-30" id="btnRegresar">Regresar</button>
                    <button class="btn btn-custom-panel pd-x-30 mg-l-5" id="btnImprimir"><i class="fa fa-print mg-r-5"></i> Imprimir Cartilla</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>

    <script>
        var botonRegresar = document.getElementById("btnRegresar");
        if (botonRegresar) {
            botonRegresar.onclick = function() {
                window.location.href = "historial.blade.php";
            };
        }

        var botonImprimir = document.getElementById("btnImprimir");
        if (botonImprimir) {
            botonImprimir.onclick = function() {
                window.print();
            };
        }
    </script>
</body>
</html>
