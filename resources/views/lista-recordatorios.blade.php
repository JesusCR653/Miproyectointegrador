<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Mis Recordatorios</title>
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

        .sidebar-label, .br-menu-link, .br-menu-item { color: #ffffff !important; }
        .br-sideleft-menu .br-menu-link.active {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
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

        .media-list-custom {
            background-color: transparent !important;
            box-shadow: none !important;
        }
        .media-item-custom {
            background-color: #ffffff !important;
            border: none !important;
            border-bottom: 1px solid #e9ecef !important;
            padding: 20px 10px !important;
        }
        .list-number {
            font-size: 22px;
            font-weight: bold;
            color: #1a1a1a !important;
            padding-right: 20px;
            display: flex;
            align-items: center;
        }

        .box-oval-data {
            background-color: #dcdcdc !important;
            color: #333333 !important;
            border-radius: 25px !important;
            padding: 10px 15px !important;
            font-weight: bold;
            text-align: center;
            font-size: 14px;
        }
        .form-control-custom-edit {
            background-color: #dcdcdc !important;
            color: #333333 !important;
            border: none !important;
            border-radius: 25px !important;
            font-weight: bold;
            text-align: center;
            font-size: 14px;
            height: auto !important;
            padding: 6px 12px !important;
        }
        .form-control-custom-edit:focus {
            background-color: #cfcfcf !important;
            outline: none;
        }

        .label-field-title {
            color: #118A3B !important;
            font-weight: bold;
            font-size: 12.5px;
            text-transform: uppercase;
            margin-bottom: 4px;
            display: block;
            text-align: center;
        }

        .btn-custom-agregar {
            background-color: #118A3B !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 35px !important;
            font-size: 16px !important;
            font-weight: bold;
        }
        .btn-custom-regresar {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 35px !important;
            font-size: 16px !important;
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
            <a href="recordatorios.blade.php" class="br-menu-link active">
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
            <h6>RECORDATORIOS</h6>
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
                <a class="breadcrumb-item" href="recordatorios.blade.php">Recordatorios</a>
                <span class="breadcrumb-item active">Listado</span>
            </nav>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="title-section-custom mg-b-25">Recordatorios Activos</h6>

                <div class="media-list media-list-custom">
                        <div class="media media-item-custom align-items-center" id="rec-1">
                            <span class="list-number">1</span>
                            <div class="media-body row align-items-center">

                                <div class="col-sm-2 text-center" id="lec-pet-1">
                                    <label class="label-field-title">Mascota</label>
                                    <div class="box-oval-data text-truncate">Axel</div>
                                </div>
                                <div class="col-sm-2 text-center" id="lec-fec-1">
                                    <label class="label-field-title">Fecha</label>
                                    <div class="box-oval-data">10/09/2026</div>
                                </div>
                                <div class="col-sm-2 text-center" id="lec-hor-1">
                                    <label class="label-field-title">Hora</label>
                                    <div class="box-oval-data">10:00 AM</div>
                                </div>
                                <div class="col-sm-2 text-center" id="lec-rep-1">
                                    <label class="label-field-title">Repetir</label>
                                    <div class="box-oval-data text-truncate">1 hora</div>
                                </div>
                                <div class="col-sm-3 text-center" id="lec-mot-1">
                                    <label class="label-field-title">Motivo</label>
                                    <div class="box-oval-data text-truncate" style="color: #118A3B;">Vacuna anual</div>
                                </div>

                                <div class="col-sm-2 text-center" id="edit-fec-1" style="display:none;">
                                    <label class="label-field-title">Fecha</label>
                                    <input type="date" id="input-fec-1" class="form-control form-control-custom-edit" value="2026-09-11">
                                </div>
                                <div class="col-sm-2 text-center" id="edit-hor-1" style="display:none;">
                                    <label class="label-field-title">Hora</label>
                                    <input type="time" id="input-hor-1" class="form-control form-control-custom-edit" value="10:00 AM">
                                </div>
                                <div class="col-sm-2 text-center" id="edit-rep-1" style="display:none;">
                                    <label class="label-field-title">Repetir</label>
                                    <select id="input-rep-1" class="form-control form-control-custom-edit" style="text-align-last: center;">
                                            <option value="5 minutos">5 minutos</option>
                                            <option value="10 minutos">10 minutos</option>
                                            <option value="30 minutos">30 minutos</option>
                                            <option value="1 hora" selected>1 hora</option>
                                            <option value="2 horas">2 horas</option>
                                            <option value="6 horas">6 horas</option>
                                            <option value="12 horas">12 horas</option>
                                            <option value="24 horas">24 horas</option>
                                            <option value="7 días">7 días</option>
                                    </select>
                                </div>
                                <div class="col-sm-5 text-center" id="edit-mot-1" style="display:none;">
                                    <label class="label-field-title">Motivo</label>
                                    <input type="text" id="input-mot-1" class="form-control form-control-custom-edit" value="Vacuna anual">
                                </div>

                                <div class="col-sm-1 text-right d-flex flex-column align-items-center justify-content-center gap-1">
                                    <button class="btn btn-outline-info btn-icon rounded-circle" id="btn-edit-1" onclick="activarEdicion(1)" style="padding: 4px 8px;">
                                        <i class="icon ion-ios-compose-outline tx-18"></i>
                                    </button>
                                    <button class="btn btn-success btn-icon rounded-circle" id="btn-save-1" style="display:none; padding: 4px 8px;" onclick="guardarEdicion(1)">
                                        <i class="fa fa-check tx-14"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-icon rounded-circle mg-t-5" onclick="eliminarRecordatorio(1)" style="padding: 4px 8px;">
                                        <i class="icon ion-ios-trash-outline tx-20"></i>
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="media media-item-custom align-items-center" id="rec-2">
                            <span class="list-number">2</span>
                            <div class="media-body row align-items-center">

                                <div class="col-sm-2 text-center" id="lec-pet-2">
                                    <label class="label-field-title">Mascota</label>
                                    <div class="box-oval-data text-truncate">Firulais</div>
                                </div>
                                <div class="col-sm-2 text-center" id="lec-fec-2">
                                    <label class="label-field-title">Fecha</label>
                                    <div class="box-oval-data">22/09/2026</div>
                                </div>
                                <div class="col-sm-2 text-center" id="lec-hor-2">
                                    <label class="label-field-title">Hora</label>
                                    <div class="box-oval-data">04:30 PM</div>
                                </div>
                                <div class="col-sm-2 text-center" id="lec-rep-2">
                                    <label class="label-field-title">Repetir</label>
                                    <div class="box-oval-data text-truncate">24 horas</div>
                                </div>
                                <div class="col-sm-3 text-center" id="lec-mot-2">
                                    <label class="label-field-title">Motivo</label>
                                    <div class="box-oval-data text-truncate" style="color: #118A3B;">Revisión general</div>
                                </div>

                                <div class="col-sm-2 text-center" id="edit-fec-2" style="display:none;">
                                    <label class="label-field-title">Fecha</label>
                                    <input type="date" id="input-fec-2" class="form-control form-control-custom-edit" value="2026-09-12">
                                </div>
                                <div class="col-sm-2 text-center" id="edit-hor-2" style="display:none;">
                                    <label class="label-field-title">Hora</label>
                                    <input type="time" id="input-hor-2" class="form-control form-control-custom-edit" value="04:30 PM">
                                </div>
                                <div class="col-sm-2 text-center" id="edit-rep-2" style="display:none;">
                                    <label class="label-field-title">Repetir</label>
                                    <select id="input-rep-2" class="form-control form-control-custom-edit" style="text-align-last: center;">
                                            <option value="5 minutos">5 minutos</option>
                                            <option value="10 minutos">10 minutos</option>
                                            <option value="30 minutos">30 minutos</option>
                                            <option value="1 hora">1 hora</option>
                                            <option value="2 horas">2 horas</option>
                                            <option value="6 horas">6 horas</option>
                                            <option value="12 horas">12 horas</option>
                                            <option value="24 horas" selected>24 horas</option>
                                            <option value="7 días">7 días</option>
                                    </select>
                                </div>
                                <div class="col-sm-5 text-center" id="edit-mot-2" style="display:none;">
                                    <label class="label-field-title">Motivo</label>
                                    <input type="text" id="input-mot-2" class="form-control form-control-custom-edit" value="Revisión general">
                                </div>

                                <div class="col-sm-1 text-right d-flex flex-column align-items-center justify-content-center gap-1">
                                    <button class="btn btn-outline-info btn-icon rounded-circle" id="btn-edit-2" onclick="activarEdicion(2)" style="padding: 4px 8px;">
                                        <i class="icon ion-ios-compose-outline tx-18"></i>
                                    </button>
                                    <button class="btn btn-success btn-icon rounded-circle" id="btn-save-2" style="display:none; padding: 4px 8px;" onclick="guardarEdicion(2)">
                                        <i class="fa fa-check tx-14"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-icon rounded-circle mg-t-5" onclick="eliminarRecordatorio(2)" style="padding: 4px 8px;">
                                        <i class="icon ion-ios-trash-outline tx-20"></i>
                                    </button>
                                </div>

                            </div>
                        </div>

                </div>

                <div class="mg-t-40 text-center d-flex align-items-center justify-content-center gap-3 flex-wrap">
                    <button class="btn btn-custom-agregar" onclick="location.href='recordatorios.blade.php'">AGREGAR OTRO</button>
                    <button class="btn btn-custom-regresar" onclick="location.href='recordatorios.blade.php'">REGRESAR</button>
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
            document.getElementById('lec-fec-' + id).style.display = 'none';
            document.getElementById('lec-hor-' + id).style.display = 'none';
            document.getElementById('lec-rep-' + id).style.display = 'none';
            document.getElementById('lec-mot-' + id).style.display = 'none';

            document.getElementById('edit-fec-' + id).style.display = 'block';
            document.getElementById('edit-hor-' + id).style.display = 'block';
            document.getElementById('edit-rep-' + id).style.display = 'block';
            document.getElementById('edit-mot-' + id).style.display = 'block';

            document.getElementById('btn-edit-' + id).style.display = 'none';
            document.getElementById('btn-save-' + id).style.display = 'inline-block';
        }

        function guardarEdicion(id) {
            var fecha = document.getElementById('input-fec-' + id).value;
            var hora = document.getElementById('input-hor-' + id).value;
            var repetir = document.getElementById('input-rep-' + id).value;
            var motivo = document.getElementById('input-mot-' + id).value;

            var motivoLimpio = "";
            for (var i = 0; i < motivo.length; i++) {
                if (motivo.charAt(i) !== ' ' && motivo.charAt(i) !== '\n' && motivo.charAt(i) !== '\r') {
                    motivoLimpio = motivo;
                    break;
                }
            }

            if (fecha == "" || hora == "" || motivoLimpio == "") {
                alert('Por favor completa todos los campos.');
                return;
            }

            var ajax = new XMLHttpRequest();
            ajax.open('POST', '#', true);
            
            var datos = new FormData();
            datos.append('id_recordatorio', id);
            datos.append('fecha', fecha);
            datos.append('hora', hora);
            datos.append('repetir', repetir);
            datos.append('motivo', motivo);

            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var respuesta = JSON.parse(ajax.responseText);
                    if (respuesta.status == 'success') {
                        alert(respuesta.message);
                        window.location.reload();
                    } else {
                        alert('Error: ' + respuesta.message);
                    }
                }
            };
            
            ajax.send(datos);
        }

        function eliminarRecordatorio(id) {
            if (confirm('¿Estás seguro de eliminar este recordatorio?') == false) {
                return;
            }

            var ajax = new XMLHttpRequest();
            ajax.open('POST', '#', true);
            
            var datos = new FormData();
            datos.append('id_recordatorio', id);

            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var respuesta = JSON.parse(ajax.responseText);
                    if (respuesta.status == 'success') {
                        var elemento = document.getElementById('rec-' + id);
                        elemento.parentNode.removeChild(elemento);
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
