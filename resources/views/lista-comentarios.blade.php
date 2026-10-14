<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Mis Comentarios</title>
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

        .title-section-custom {
            color: #118A3B !important;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        .comment-item { 
            border: none !important;
            background-color: #dcdcdc !important;
            color: #333333 !important;
            border-radius: 25px !important;
            padding: 20px 25px !important;
            border-left: 6px solid #1a1a1a !important;
        }
        
        .texto-comentario {
            font-weight: bold;
            font-size: 15px;
            text-align: center;
        }

        .form-control-custom-edit {
            background-color: #ffffff !important;
            color: #333333 !important;
            border: 2px solid #1a1a1a !important;
            border-radius: 20px !important;
            font-weight: bold;
            padding: 12px 20px !important;
            font-size: 14px;
            text-align: center;
        }
        .form-control-custom-edit:focus {
            outline: none;
        }

        .badge-custom-enviado {
            background-color: #118A3B !important;
            color: #ffffff !important;
            padding: 5px 12px;
            font-weight: bold;
            border-radius: 12px;
        }

        .btn-custom-nuevo {
            background-color: #118A3B !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 35px !important;
            font-size: 15px !important;
            font-weight: bold;
        }
        .btn-custom-salir {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 35px !important;
            font-size: 15px !important;
            font-weight: bold;
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
            <a href="comentarios.blade.php" class="br-menu-link active">
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
            <h6>HISTORIAL DE COMENTARIOS</h6>
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
                <a class="breadcrumb-item" href="comentarios.blade.php">Comentarios</a>
                <span class="breadcrumb-item active">Listado</span>
            </nav>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="title-section-custom mg-b-25">Historial de Comentarios</h6>

                <div class="list-group" style="gap: 15px;">
                        <div class="list-group-item comment-item pd-y-20 pd-x-25 mg-b-10 shadow-sm" id="item-1">
                            <div class="d-flex align-items-center justify-content-between mg-b-15">
                                <span class="tx-13 font-weight-bold" style="color: #118A3B;">
                                    <i class="fa fa-calendar mg-r-5"></i>
                                    20 de Agosto, 2026
                                </span>
                                <span class="badge badge-custom-enviado">Enviado</span>
                            </div>

                            <p class="mg-b-0 tx-inverse texto-comentario" id="texto-1">Excelente atención, el veterinario fue muy amable con Axel.</p>

                            <textarea class="form-control form-control-custom-edit" id="editor-1" rows="3" style="display:none;">Excelente atención, el veterinario fue muy amable con Axel.</textarea>

                            <div class="text-right mg-t-15">
                                <button class="btn btn-outline-info btn-icon rounded-circle mg-r-5" id="btn-editar-1" onclick="activarEdicion(1)" style="padding: 4px 8px;">
                                    <i class="icon ion-ios-compose-outline tx-18"></i>
                                </button>
                                <button class="btn btn-success btn-icon rounded-circle mg-r-5" id="btn-guardar-1" style="display:none; padding: 4px 8px;" onclick="guardarEdicion(1)">
                                    <i class="fa fa-check tx-14"></i>
                                </button>
                                <button class="btn btn-outline-danger btn-icon rounded-circle" onclick="eliminarComentario(1)" style="padding: 4px 8px;">
                                    <i class="icon ion-ios-trash-outline tx-18"></i>
                                </button>
                            </div>
                        </div>

                        <div class="list-group-item comment-item pd-y-20 pd-x-25 mg-b-10 shadow-sm" id="item-2">
                            <div class="d-flex align-items-center justify-content-between mg-b-15">
                                <span class="tx-13 font-weight-bold" style="color: #118A3B;">
                                    <i class="fa fa-calendar mg-r-5"></i>
                                    05 de Julio, 2026
                                </span>
                                <span class="badge badge-custom-enviado">Enviado</span>
                            </div>

                            <p class="mg-b-0 tx-inverse texto-comentario" id="texto-2">Buen servicio, aunque tuvimos que esperar un poco.</p>

                            <textarea class="form-control form-control-custom-edit" id="editor-2" rows="3" style="display:none;">Buen servicio, aunque tuvimos que esperar un poco.</textarea>

                            <div class="text-right mg-t-15">
                                <button class="btn btn-outline-info btn-icon rounded-circle mg-r-5" id="btn-editar-2" onclick="activarEdicion(2)" style="padding: 4px 8px;">
                                    <i class="icon ion-ios-compose-outline tx-18"></i>
                                </button>
                                <button class="btn btn-success btn-icon rounded-circle mg-r-5" id="btn-guardar-2" style="display:none; padding: 4px 8px;" onclick="guardarEdicion(2)">
                                    <i class="fa fa-check tx-14"></i>
                                </button>
                                <button class="btn btn-outline-danger btn-icon rounded-circle" onclick="eliminarComentario(2)" style="padding: 4px 8px;">
                                    <i class="icon ion-ios-trash-outline tx-18"></i>
                                </button>
                            </div>
                        </div>

                </div>

                <div class="mg-t-40 text-center d-flex align-items-center justify-content-center gap-3 flex-wrap">
                    <button class="btn btn-custom-nuevo" onclick="location.href='comentarios.blade.php'">NUEVO COMENTARIO</button>
                    <button class="btn btn-custom-salir" onclick="location.href='comentarios.blade.php'">SALIR</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>

    <script>
        function activarEdicion(id) {
            document.getElementById('texto-' + id).style.display = 'none';
            document.getElementById('editor-' + id).style.display = 'block';
            document.getElementById('btn-editar-' + id).style.display = 'none';
            document.getElementById('btn-guardar-' + id).style.display = 'inline-block';
        }

        function guardarEdicion(id) {
            var elEditor = document.getElementById('editor-' + id);
            var nuevoTexto = elEditor.value;

            var esVacio = true;
            for (var i = 0; i < nuevoTexto.length; i++) {
                if (nuevoTexto.charAt(i) !== ' ' && nuevoTexto.charAt(i) !== '\n' && nuevoTexto.charAt(i) !== '\r') {
                    esVacio = false;
                    break;
                }
            }

            if (esVacio == true) {
                alert('El comentario no puede estar vacío.');
                return;
            }

            var ajax = new XMLHttpRequest();
            ajax.open('POST', '#', true);
            
            var datos = new FormData();
            datos.append('id_comentario', id);
            datos.append('comentario', nuevoTexto);

            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var respuesta = JSON.parse(ajax.responseText);
                    if (respuesta.status == 'success') {
                        document.getElementById('texto-' + id).innerHTML = nuevoTexto;
                        document.getElementById('texto-' + id).style.display = 'block';
                        document.getElementById('editor-' + id).style.display = 'none';
                        document.getElementById('btn-editar-' + id).style.display = 'inline-block';
                        document.getElementById('btn-guardar-' + id).style.display = 'none';
                        alert(respuesta.message);
                    } else {
                        alert('Error: ' + respuesta.message);
                    }
                }
            };
            
            ajax.send(datos);
        }

        function eliminarComentario(id) {
            if (confirm('¿Estás seguro de eliminar este comentario?') == false) {
                return;
            }

            var ajax = new XMLHttpRequest();
            ajax.open('POST', '#', true);
            
            var datos = new FormData();
            datos.append('id_comentario', id);

            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var respuesta = JSON.parse(ajax.responseText);
                    if (respuesta.status == 'success') {
                        var item = document.getElementById('item-' + id);
                        item.parentNode.removeChild(item);
                        alert(respuesta.message);
                    } else {
                        alert('Error: ' + respuesta.message);
                    }
                }
            };

            ajax.send(datos);
        }
    </script>
</body>
</html>
