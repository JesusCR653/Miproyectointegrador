<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Información Personal</title>

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
            padding: 60px 40px !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: none !important;
            min-height: 85vh;
            margin-top: 0 !important;
        }

        .form-group {
            margin-bottom: 25px;
        }
        
        .form-control-label-custom {
            color: #118A3B !important;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 6px;
            display: block;
            text-align: center;
        }

        .form-control-custom {
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

        .perfil-foto-container {
            border: 5px solid #118A3B;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            background: #ffffff;
            max-width: 280px;
            margin: 0 auto;
        }

        .btn-custom-editar {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 35px !important;
            font-size: 16px !important;
            font-weight: bold;
        }
        .btn-eliminar-cuenta { 
            border: 2px solid #dc3545 !important; 
            color: #dc3545 !important; 
            background: transparent !important; 
            padding: 11px 25px !important; 
            border-radius: 25px !important; 
            font-size: 15px !important; 
            font-weight: bold; 
            cursor: pointer; 
            transition: all .2s; 
        }
        .btn-eliminar-cuenta:hover { 
            background: #dc3545 !important; 
            color: #fff !important; 
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

        .modal-eliminar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.6);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }
        .modal-eliminar-overlay.show { display: flex; }
        .modal-eliminar-box { background: #fff; border-radius: 12px; width: 100%; max-width: 420px; box-shadow: 0 10px 40px rgba(0,0,0,.25); overflow: hidden; }
        .modal-eliminar-header { background: #dc3545; color: #fff; padding: 16px 20px; display: flex; align-items: center; gap: 10px; }
        .modal-eliminar-header h5 { margin: 0; font-size: 16px; font-weight: 700; }
        .modal-eliminar-body { padding: 24px 20px 10px; font-size: 14px; color: #333; }
        .confirm-field { margin-top: 18px; }
        .confirm-field input { width: 100%; padding: 8px 12px; border: 1px solid #ced4da; border-radius: 4px; margin-top: 6px; text-align: center; }
        .modal-eliminar-footer { padding: 16px 20px; display: flex; justify-content: flex-end; gap: 10px; border-top: 1px solid #f0f0f0; margin-top: 16px; }
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
            <a href="perfil.blade.php" class="br-menu-link active">
                <div class="br-menu-item"><i class="icon ion-ios-person-outline tx-24"></i><span class="menu-item-label">Información Personal</span></div>
            </a>
            <a href="registro-canino.blade.php" class="br-menu-link">
                <div class="br-menu-item"><i class="icon ion-ios-plus-outline tx-24"></i><span class="menu-item-label">Registro de mascota</span></div>
            </a>
            <a href="listado_mascotas.blade.php" class="br-menu-link">
                <div class="br-menu-item"><i class="icon ion-ios-paw-outline tx-24"></i><span class="menu-item-label">Mis Mascotas</span></div>
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
            <h6>INFORMACIÓN PERSONAL</h6>
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
            <div class="br-section-wrapper d-flex flex-column justify-content-center">
                <div class="row align-items-center justify-content-center">

                    <div class="col-md-7">
                        <div class="form-layout">
                            
                            <div class="form-group">
                                <label class="form-control-label-custom">Nombre del dueño:</label>
                                <input class="form-control form-control-custom" type="text" value="Juan Pérez López" readonly>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label-custom">Número de teléfono:</label>
                                <input class="form-control form-control-custom" type="text" value="222 123 4567" readonly>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label-custom">Dirección:</label>
                                <input class="form-control form-control-custom" type="text" value="Av. Reforma 123, Puebla, Pue." readonly>
                            </div>

                            <div class="form-layout-footer d-flex align-items-center justify-content-center mg-t-30 gap-3">
                                <a href="editar-perfil.blade.php" class="btn btn-custom-editar text-center">
                                    <i class="fa fa-edit mg-r-10"></i> Editar Perfil
                                </a>
                                <button type="button" class="btn-eliminar-cuenta" onclick="abrirModalEliminar()">
                                    <i class="fa fa-user-times mg-r-5"></i> Eliminar Cuenta
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center mg-t-40 mg-md-t-0">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <div class="perfil-foto-container mg-b-15">
                                <img class="img-fluid" src="../../public/img/logo.png" alt="Foto de perfil" style="width: 240px; height: 240px; object-fit: cover;">
                            </div>
                            <label class="form-control-label-custom">Foto del dueño</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal-eliminar-overlay" id="modalEliminarOverlay">
        <div class="modal-eliminar-box">
            <div class="modal-eliminar-header">
                <i class="fa fa-exclamation-triangle"></i>
                <h5>Eliminar cuenta permanentemente</h5>
            </div>
            <div class="modal-eliminar-body">
                <p>Estás a punto de eliminar tu cuenta <strong>Juan Pérez López</strong>.</p>
                <p>Esta acción es irreversible.</p>
                <div class="confirm-field">
                    <label>Escribe tu nombre para confirmar: <span style="color:#dc3545;">Juan</span></label>
                    <input type="text" id="inputConfirm" placeholder="Escribe tu nombre aquí..." oninput="validarConfirmacion()">
                    <p id="msgError" style="color:#dc3545; font-size:12px; margin-top:5px; display:none;">El nombre no coincide.</p>
                </div>
            </div>
            <div class="modal-eliminar-footer">
                <button type="button" class="btn btn-secondary btn-sm pd-x-20" style="border-radius:20px;" onclick="cerrarModalEliminar()">Cancelar</button>
                <a id="btnConfirmarEliminar" href="#" class="btn btn-danger btn-sm pd-x-20 disabled" style="pointer-events:none; opacity:.5; border-radius:20px;">Sí, eliminar cuenta</a>
            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>

    <script>
        var NOMBRE_ESPERADO = "Juan";

        function abrirModalEliminar() {
            document.getElementById('inputConfirm').value = '';
            document.getElementById('msgError').style.display = 'none';
            deshabilitarBoton();
            document.getElementById('modalEliminarOverlay').classList.add('show');
        }

        function cerrarModalEliminar() {
            document.getElementById('modalEliminarOverlay').classList.remove('show');
        }

        document.getElementById('modalEliminarOverlay').addEventListener('click', function(e) {
            if (e.target === this) cerrarModalEliminar();
        });

        function validarConfirmacion() {
            var valor = document.getElementById('inputConfirm').value.trim();
            var btn = document.getElementById('btnConfirmarEliminar');
            var msgErr = document.getElementById('msgError');

            if (valor === NOMBRE_ESPERADO) {
                btn.classList.remove('disabled');
                btn.setAttribute('href', '#');
                btn.style.pointerEvents = 'auto';
                btn.style.opacity = '1';
                msgErr.style.display = 'none';
            } else {
                deshabilitarBoton();
                if (valor.length > 0) { msgErr.style.display = 'block'; } else { msgErr.style.display = 'none'; }
            }
        }

        function deshabilitarBoton() {
            var btn = document.getElementById('btnConfirmarEliminar');
            btn.classList.add('disabled');
            btn.setAttribute('href', '#');
            btn.style.pointerEvents = 'none';
            btn.style.opacity = '.5';
        }
    </script>
</body>
</html>
