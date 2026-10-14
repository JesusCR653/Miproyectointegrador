<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Iniciar Sesión</title>

    <link href="../../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../public/css/bracket.css">
    
    <style>
        body, .form-control, .btn, input, select, textarea, button, .form-control-custom { font-family: 'Nunito', sans-serif !important; }
        .br-logo a, .header-welcome-centered h6, h1, h2, h3, h4, h5, h6, .form-control-label-custom { font-family: 'Baloo 2', cursive !important; }
        body {
            background-color: #eaf6ee !important;
            min-height: 100vh;
        }

        .br-section-wrapper {
            background-color: #ffffff !important;
            border-radius: 40px !important;
            padding: 60px 40px !important;
            box-shadow: 0 8px 24px rgba(0,0,0,0.06);
            width: 100%;
            max-width: 900px;
        }

        .title-display-center {
            font-family: 'Arial Black', Gadget, sans-serif;
            font-size: 38px;
            font-weight: 900;
            color: #000000;
            text-align: center;
            letter-spacing: 1px;
            margin-bottom: 40px;
        }

        .form-group-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            gap: 15px;
        }
        
        .icon-box-custom {
            width: 45px;
            height: 45px;
            border: 1.5px solid #333333;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
        }
        .icon-box-custom i {
            font-size: 24px;
            color: #333333;
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
            max-width: 280px;
        }
        .form-control-custom::placeholder {
            color: #444444;
            opacity: 1;
        }
        .form-control-custom:focus {
            background-color: #cfcfcf !important;
            outline: none;
        }

        .btn-custom-iniciar {
            background-color: #118A3B !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 10px 35px !important;
            font-size: 16px !important;
            font-weight: bold;
            cursor: pointer;
        }
        .btn-custom-cuenta {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 10px 30px !important;
            font-size: 16px !important;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh; padding: 20px;">
        <div class="br-section-wrapper">
        
            <div class="title-display-center">DR. WOOF</div>

            <form action="#" method="POST">
                
                <div class="row align-items-center justify-content-center">
                    
                    <div class="col-md-5 text-center mg-b-30 mg-md-b-0">
                        <img src="../../public/img/logo.png" class="img-fluid" alt="Logo DR. WOOF" style="max-width: 200px;">
                    </div>

                    <div class="col-md-6">
                        
                        <div class="form-group-container">
                            <div class="icon-box-custom">
                                <i class="icon ion-ios-email-outline"></i>
                            </div>
                            <input type="email" name="correo" class="form-control form-control-custom" placeholder="Correo Electronico" required>
                        </div>

                        <div class="form-group-container">
                            <div class="icon-box-custom" style="padding-top: 4px;">
                                <span style="font-weight: bold; font-size: 18px; letter-spacing: -1px;">***</span>
                            </div>
                            <input type="password" name="password" class="form-control form-control-custom" placeholder="Contraseña" required>
                        </div>

                        <div class="d-flex align-items-center justify-content-start gap-3 mg-t-35 pd-l-60 flex-wrap">
                            <div>
                                <button type="submit" class="btn-custom-iniciar">Iniciar Sesión</button>
                            </div>
                            <div>
                                <a href="registrousuario.blade.php" class="btn btn-custom-cuenta text-center">Crear Cuenta</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="mg-t-50 tx-center tx-12 text-muted">DR. WOOF_JCR &copy; 2026. Todos los derechos reservados.</div>
            </form>

        </div>
    </div>

    <div class="modal-error-overlay" id="modalError" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.5); z-index:9999; align-items:center; justify-content:center;">
        <div style="background:#fff; border-radius:12px; width:100%; max-width:400px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.3);">
            <div style="background:#e74c3c; padding:20px 25px;">
                <h5 style="color:#fff; margin:0; font-size:16px; font-weight:700;">&#9888; Acceso Denegado</h5>
            </div>
            <div style="padding:30px 25px; text-align:center;">
                <div style="font-size:48px; color:#e74c3c; margin-bottom:15px;">&#128274;</div>
                <p style="font-size:15px; color:#555; margin:0;">
                    El correo electrónico o la contraseña son <strong>incorrectos</strong>.<br>
                    Por favor verifica tus datos e intenta de nuevo.
                </p>
            </div>
            <div style="padding:15px 25px; text-align:center; border-top:1px solid #dee2e6;">
                <button onclick="cerrarModal()" style="background:#e74c3c; color:#fff; border:none; padding:8px 35px; border-radius:6px; font-size:14px; cursor:pointer;">
                    Intentar de nuevo
                </button>
            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>

    <script>
        function cerrarModal() {
            document.getElementById('modalError').style.display = 'none';
        }

        var cadenaBuscar = window.location.search;
        if (cadenaBuscar.indexOf('error=1') != -1) {
            document.getElementById('modalError').style.display = 'flex';
        }
    </script>

</body>
</html>
