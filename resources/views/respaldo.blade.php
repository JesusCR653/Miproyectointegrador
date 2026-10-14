<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Mantenimiento BD</title>

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
        .br-pagebody {
            padding: 0 30px 30px 30px !important;
        }
        .br-section-wrapper {
            background-color: #ffffff !important;
            border-radius: 0 0 40px 40px !important;
            padding: 60px 40px !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: none !important;
            min-height: 85vh;
            margin-top: 0 !important;
        }

        .title-section-custom {
            color: #118A3B !important;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            font-size: 18px;
            letter-spacing: 0.5px;
        }
        .box-oval-container {
            background-color: #dcdcdc !important;
            color: #333333 !important;
            border-radius: 25px !important;
            padding: 35px 30px !important;
            text-align: center;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0,0,0,0.02);
            max-width: 400px;
            width: 100%;
        }
        .box-oval-container p {
            font-weight: normal;
            font-size: 13px;
            color: #555555 !important;
        }

        .form-control-custom-file {
            background-color: #ffffff !important;
            color: #333333 !important;
            border: 2px solid #1a1a1a !important;
            border-radius: 25px !important;
            padding: 8px 20px !important;
            font-weight: bold;
            font-size: 14px;
            width: 100%;
            max-width: 260px;
            text-align: center;
        }
        .btn-custom-respaldar {
            background-color: #118A3B !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 40px !important;
            font-size: 15px !important;
            font-weight: bold;
            cursor: pointer;
        }
        .btn-custom-restaurar {
            background-color: #118A3B !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 40px !important;
            font-size: 15px !important;
            font-weight: bold;
            cursor: pointer;
        }
        .btn-custom-regresar {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 50px !important;
            font-size: 15px !important;
            font-weight: bold;
            cursor: pointer;
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
            <a href="listado_mascotas.blade.php" class="br-menu-link">
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
            <h6>MANTENIMIENTO DEL SISTEMA</h6>
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
                
                <h6 class="title-section-custom mg-b-40">
                    Respaldo y Restauración de Base de Datos
                </h6>

                <div class="row justify-content-center gap-4 d-flex flex-wrap">
                    
                    <div class="col-md-5 mg-b-20 d-flex justify-content-center">
                        <div class="box-oval-container">
                            <i class="fa fa-download mg-b-15 text-center" style="font-size: 80px; color: #118A3B !important; display: block;"></i>
                            <h5 class="mg-b-15" style="color: #118A3B !important; font-weight: bold;">Generar Respaldo</h5>
                            <p class="mg-b-20">Descarga una copia completa de la base de datos actual (.sql) con todas las tablas del sistema.</p>
                            <button type="button" class="btn-custom-respaldar" id="btnRespaldar">Respaldar BD</button>
                        </div>
                    </div>

                    <div class="col-md-5 mg-b-20 d-flex justify-content-center">
                        <div class="box-oval-container">
                            <i class="fa fa-upload mg-b-15 text-center" style="font-size: 80px; color: #118A3B !important; display: block;"></i>
                            <h5 class="mg-b-15" style="color: #118A3B !important; font-weight: bold;">Restaurar Sistema</h5>
                            <p class="mg-b-20">Sube un archivo de respaldo previo (.sql) para restaurar la información de la base de datos.</p>
                            <div class="form-group mg-b-15 d-flex justify-content-center">
                                <input type="file" id="archivo_sql" class="form-control-custom-file" accept=".sql">
                            </div>
                            <button type="button" class="btn-custom-restaurar" id="btnRestaurar">Restaurar BD</button>
                        </div>
                    </div>

                </div>

                <div class="text-center mg-t-40">
                    <button type="button" class="btn-custom-regresar" id="btnSalirMantenimiento">Regresar</button>
                </div>

            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>

    <script>
        var btnRespaldar = document.getElementById("btnRespaldar");
        btnRespaldar.onclick = function() {
            if (confirm("¿Deseas descargar el respaldo de la base de datos?") == false) {
                return;
            }
            window.location.href = "#";
        };

        var btnRestaurar = document.getElementById("btnRestaurar");
        btnRestaurar.onclick = function() {
            var archivoInput = document.getElementById("archivo_sql");
            if (archivoInput.value == "") {
                alert("Por favor, selecciona un archivo .sql válido.");
                return;
            }

            if (confirm("¡Atención! Restaurar la base de datos reemplazará los datos actuales. ¿Continuar?") == false) {
                return;
            }

            var ajax = new XMLHttpRequest();
            ajax.open("POST", "#", true);

            var datos = new FormData();
            datos.append("respaldo", archivoInput.files[0]);

            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var respuesta = JSON.parse(ajax.responseText);
                    alert(respuesta.message);
                    if (respuesta.status == "success") {
                        window.location.reload();
                    }
                }
            };

            ajax.send(datos);
        };

        var btnSalir = document.getElementById("btnSalirMantenimiento");
        btnSalir.onclick = function() {
            window.history.back();
        };
    </script>
</body>
</html>
