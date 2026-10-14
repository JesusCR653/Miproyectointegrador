<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Agendar Cita</title>

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
        .form-control-custom:focus {
            background-color: #cfcfcf !important;
            outline: none;
        }
        textarea.form-control-custom {
            border-radius: 20px !important;
        }

        .btn-custom-agendar {
            background-color: #118A3B !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 35px !important;
            font-size: 15px !important;
            font-weight: bold;
            cursor: pointer;
        }
        .btn-custom-lista {
            background-color: #118A3B !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 30px !important;
            font-size: 15px !important;
            font-weight: bold;
        }
        .btn-custom-regresar {
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
            <h6>AGENDAR CITA</h6>
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
            <div class="br-section-wrapper d-flex flex-column justify-content-center align-items-center">
                
                <form action="#" method="POST" style="width: 100%; max-width: 750px;">
                    
                    <div class="form-layout form-layout-1">
                        
                        <div class="text-center mg-b-30">
                            <h4 class="tx-inverse tx-bold" style="color: #118A3B;">
                                Nueva Cita 
                            </h4>
                        </div>

                        <div class="row justify-content-center">
                            
                            <!-- SELECCIÓN DE MASCOTA -->
                            <div class="col-md-12 mg-b-15">
                                <div class="form-group">
                                    <label class="form-control-label-custom">Mascota:</label>
                                    <select name="id_animal" class="form-control form-control-custom" required>
                                        <option value="">-- Selecciona una mascota --</option>
                                        <option value="1">Axel</option>
                                        <option value="2">Firulais</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label-custom">Fecha de la cita:</label>
                                    <input class="form-control form-control-custom" type="date" id="fecha_cita" name="fecha" min="2026-09-04" value="2026-09-04" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label-custom">Hora de la consulta:</label>
                                    <input class="form-control form-control-custom" type="time" id="hora_cita" name="hora" value="12:00" required>
                                </div>
                            </div>

                            <div class="col-md-12 mg-t-10">
                                <div class="form-group">
                                    <label class="form-control-label-custom">Motivo de la cita:</label>
                                    <textarea rows="4" class="form-control form-control-custom" name="motivo_cita" placeholder="Ej: Refuerzo de vacuna triple o revisión de crecimiento" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-center mg-t-40 gap-3 flex-wrap">
                            <div>
                                <button type="submit" class="btn-custom-agendar">Agendar Cita</button>
                            </div>
                            <div>
                                <button type="button" class="btn-custom-lista" id="btnListaCitas">Lista de Citas</button>
                            </div>
                            <div>
                                <button type="button" class="btn-custom-regresar" id="btnRegresarCita">Regresar</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>

    <script>
        var botonLista = document.getElementById("btnListaCitas");
        botonLista.onclick = function() {
            window.location.href = "listado_citas.blade.php";
        };

        var botonRegresar = document.getElementById("btnRegresarCita");
        botonRegresar.onclick = function() {
            window.history.back();
        };

        // No permitir agendar en fecha/hora ya pasada
        var inputFechaCita = document.getElementById("fecha_cita");
        var inputHoraCita = document.getElementById("hora_cita");

        function pad(n) { return n < 10 ? "0" + n : n; }
        var ahora = new Date();
        var hoyISO = ahora.getFullYear() + "-" + pad(ahora.getMonth() + 1) + "-" + pad(ahora.getDate());

        function actualizarMinimoHora() {
            if (inputFechaCita.value === hoyISO) {
                inputHoraCita.min = pad(ahora.getHours()) + ":" + pad(ahora.getMinutes());
                if (inputHoraCita.value && inputHoraCita.value < inputHoraCita.min) {
                    inputHoraCita.value = inputHoraCita.min;
                }
            } else {
                inputHoraCita.removeAttribute("min");
            }
        }

        inputFechaCita.addEventListener("change", function () {
            if (inputFechaCita.value < hoyISO) {
                alert("No puedes agendar una cita en una fecha ya pasada.");
                inputFechaCita.value = hoyISO;
            }
            actualizarMinimoHora();
        });

        actualizarMinimoHora();

        document.querySelector("form").addEventListener("submit", function (e) {
            if (inputFechaCita.value < hoyISO || (inputFechaCita.value === hoyISO && inputHoraCita.value < pad(ahora.getHours()) + ":" + pad(ahora.getMinutes()))) {
                e.preventDefault();
                alert("Selecciona una fecha y hora válidas (no pueden ser anteriores al momento actual).");
            }
        });
    </script>
</body>
</html>
