<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Generar QR</title>

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
            padding: 60px 30px !important;
        }

        .qr-display-area {
            background-color: #eaf6ee !important;
            border-radius: 20px;
            padding: 20px;
            display: inline-block;
        }

        .qr-icon-big {
            font-size: 280px !important;
            color: #000000 !important;
            line-height: 1;
        }

        .btn-custom-generar {
            background-color: #118A3B !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 50px !important;
            font-size: 16px !important;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
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
            <h6>GENERAR QR</h6>
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
        <div class="br-pagebody text-center d-flex flex-column align-items-center justify-content-center" style="min-height: 80vh;">

            <h4 class="mg-b-5" style="color:#118A3B; font-weight:bold;">QR de Axel</h4>
            <p class="mg-b-25 tx-13" style="color:#666;">Al escanearlo se mostrará únicamente la ficha pública de Axel.</p>

            <div class="mg-b-30">
                <div class="qr-display-area">
                    <div id="qrcode"></div>
                </div>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-3">
                <button type="button" class="btn-custom-generar" id="btnGenerarQR">
                    Generar Nuevo
                </button>
                <button type="button" class="btn-custom-generar" id="btnDescargarQR" style="background-color:#1a1a1a !important;">
                    Descargar QR
                </button>
                <a href="listado_mascotas.blade.php" class="btn-custom-generar" style="background-color:#1a1a1a !important; text-decoration:none;">
                    Regresar
                </a>
            </div>

        </div>
    </div>

    <div id="successModal" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content tx-size-sm" style="border-radius: 12px; overflow: hidden;">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-success tx-semibold mg-b-20">¡QR Generado!</h4>
                    <p class="mg-b-20 mg-x-20">El código único ha sido creado exitosamente.</p>
                    <button type="button" class="btn btn-success tx-uppercase pd-y-12 pd-x-25 tx-bold" data-dismiss="modal" style="border-radius: 20px; background-color: #118A3B; border: none;">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <script>
        var urlPublica = "https://drwoof.example.com/index.php?menu=publico&opc=mascota&id=1";
        var contenedorQR = document.getElementById("qrcode");
        var qrActual = null;

        function dibujarQR() {
            contenedorQR.innerHTML = "";
            qrActual = new QRCode(contenedorQR, {
                text: urlPublica,
                width: 240,
                height: 240,
                colorDark: "#1a1a1a",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });
        }

        dibujarQR();

        var botonGenerar = document.getElementById("btnGenerarQR");
        botonGenerar.onclick = function() {
            dibujarQR();
            $('#successModal').modal('show');
        };

        var botonDescargar = document.getElementById("btnDescargarQR");
        botonDescargar.onclick = function() {
            var img = contenedorQR.querySelector("img");
            var canvas = contenedorQR.querySelector("canvas");
            var dataUrl = img ? img.src : (canvas ? canvas.toDataURL("image/png") : null);
            if (!dataUrl) return;

            var enlace = document.createElement("a");
            enlace.href = dataUrl;
            enlace.download = "qr-Axel.png";
            document.body.appendChild(enlace);
            enlace.click();
            document.body.removeChild(enlace);
        };
    </script>
</body>
</html>
