<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Historial Médico Axel</title>

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
            min-height: 85vh;
            margin-top: 0 !important;
        }

        .form-group {
            margin-bottom: 25px;
        }
        .form-control-label {
            color: #118A3B !important;
            font-weight: bold;
            font-size: 15px;
            margin-bottom: 8px;
            padding-left: 10px;
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
        textarea.form-control {
            border-radius: 20px !important;
            text-align: left;
        }

        .card-seccion-dark {
            border: none !important;
            background-color: #118A3B !important;
            border-radius: 20px !important;
            padding: 25px !important;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .card-seccion-dark i {
            color: #1a1a1a !important;
        }
        .card-seccion-dark p {
            color: #ffffff !important;
            font-weight: 500;
        }
        
        .title-seccion-blue {
            color: #118A3B !important;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        .btn-custom-panel {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            font-weight: bold;
            padding: 10px 20px;
            transition: background-color 0.2s;
        }
        .btn-custom-panel:hover {
            background-color: #0c6b2e !important;
        }
        
        .btn-outline-custom-historial {
            border: 2px solid #1a1a1a !important;
            color: #1a1a1a !important;
            background-color: transparent !important;
            border-radius: 25px !important;
            font-weight: bold;
            padding: 12px 35px;
            transition: all 0.2s;
        }
        .btn-outline-custom-historial:hover {
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
            <h6>HISTORIAL MÉDICO DE AXEL</h6>
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
                <span class="breadcrumb-item active">Historial Médico</span>
            </nav>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper d-flex flex-column justify-content-center" style="min-height: 85vh;">
                
                <div class="row align-items-center justify-content-center">
                    
                    <div class="col-md-7">
                        <div class="form-layout form-layout-1">
                            <div class="row">
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Peso actual:</label>
                                        <input class="form-control tx-bold tx-inverse" type="text" value="24.5 Kg" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Diagnostico:</label>
                                        <textarea rows="4" class="form-control tx-bold tx-inverse" readonly>Paciente presents dermatitis alérgica leve. Se recomienda cambio de dieta y baño medicado.</textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Fecha de consulta:</label>
                                        <input class="form-control" type="text" value="08 de Abril, 2026" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Proxima revisión:</label>
                                        <input class="form-control text-danger tx-bold" type="text" value="22 de Abril, 2026" readonly>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center mg-l-20">
                        
                        <h6 class="title-seccion-blue mg-b-10">Archivos adjuntos:</h6>
                        <div class="card card-seccion-dark mg-b-25">
                            <i class="icon ion-ios-download-outline tx-60"></i>
                            <p class="mg-t-10 tx-13">Recetas, Análisis Clínicos, Placas.</p>
                            <button class="btn btn-block btn-sm btn-custom-panel" id="btnDescargarTodo">Descargar Todo</button>
                        </div>

                        <h6 class="title-seccion-blue mg-b-10">Certificados:</h6>
                        <div class="card card-seccion-dark">
                            <i class="icon ion-ios-paper-outline tx-60"></i>
                            <p class="mg-t-10 tx-13">Cartilla de Vacunación Digital.</p>
                            <button class="btn btn-block btn-sm btn-custom-panel" id="btnAbrirCartilla">Abrir Cartilla</button>
                        </div>

                    </div>

                </div>

                <div class="form-layout-footer mg-t-50 text-center">
                    <button class="btn btn-outline-custom-historial" id="btnVerHistorial">
                        Ver historial completo
                    </button>
                </div>
                
            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>

    <script>
        var botonCartilla = document.getElementById("btnAbrirCartilla");
        if (botonCartilla) {
            botonCartilla.onclick = function() {
                window.location.href = "cartilla.blade.php?id=1";
            };
        }

        var botonHistorial = document.getElementById("btnVerHistorial");
        if (botonHistorial) {
            botonHistorial.onclick = function() {
                window.location.href = "historial-completo.blade.php?id=1";
            };
        }

        var botonDescargar = document.getElementById("btnDescargarTodo");
        if (botonDescargar) {
            botonDescargar.onclick = function() {
                alert("Iniciando descarga de archivos adjuntos...");
            };
        }
    </script>
</body>
</html>
