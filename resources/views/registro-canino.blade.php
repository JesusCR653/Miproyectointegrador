<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Registro de Mascota</title>
    
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

        .form-group {
            margin-bottom: 25px;
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
            transition: all 0.2s ease;
            text-align-last: center;
        }
        .form-control-custom::placeholder {
            color: #444444;
            text-align: center;
        }
        .form-control-custom:focus {
            background-color: #cfcfcf !important;
            outline: none;
        }
        input.form-control-custom {
            text-align: center;
        }

        .input-file-hidden {
            display: none;
        }

        .btn-custom-foto {
            background-color: #118A3B !important;
            color: white !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 30px !important;
            font-size: 16px !important;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            min-width: 190px;
            cursor: pointer;
        }
        .btn-custom-registrar {
            background-color: #118A3B !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 25px !important;
            padding: 12px 50px !important;
            font-size: 16px !important;
            font-weight: bold;
            cursor: pointer;
        }
        .btn-custom-qr {
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
            <a href="registro-canino.blade.php" class="br-menu-link active">
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
            <div class="navicon-left hidden-md-down">
                <a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a>
            </div>
        </div>

        <div class="header-welcome-centered">
            <h6>REGISTRO DE MASCOTA</h6>
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
                <form action="#" method="POST" enctype="multipart/form-data">
                    
                    <div class="row justify-content-center">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="tipo_mascota" id="tipo_mascota" class="form-control form-control-custom" data-placeholder="Tipo de Mascota" required></select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input name="nombre" class="form-control form-control-custom" type="text" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="sexo" class="form-control form-control-custom" required>
                                    <option value="" disabled selected hidden>Sexo</option>
                                    <option value="Macho">Macho</option>
                                    <option value="Hembra">Hembra</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input name="fecha_nacimiento" id="fecha_nac" class="form-control form-control-custom" type="date" placeholder="Fecha de nacimiento" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="raza" id="raza" class="form-control form-control-custom" required disabled>
                                    <option value="" disabled selected hidden>Elige primero el tipo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input name="color" class="form-control form-control-custom" type="text" placeholder="Color" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input name="alergias" class="form-control form-control-custom" type="text" placeholder="Alergias">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input name="edad" id="edad" class="form-control form-control-custom" type="number" placeholder="Edad (automática)" readonly required>
                                <small id="edad_texto" class="d-block mg-t-5 text-center" style="color:#118A3B; font-weight:bold;"></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input name="peso" class="form-control form-control-custom" type="text" placeholder="Peso" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input name="tratamiento" class="form-control form-control-custom" type="text" placeholder="Tratamiento">
                            </div>
                        </div>

                    </div>

                    <div class="d-flex align-items-center justify-content-center mg-t-40 gap-4 flex-wrap">
                        
                        <div>
                            <label for="foto-canino" class="btn-custom-foto m-0">
                                <span id="txt-foto">Agregar foto</span> <span class="tx-20 font-weight-normal">+</span>
                            </label>
                            <input name="foto" id="foto-canino" type="file" accept="image/*" class="input-file-hidden" onchange="cambiarTextoFoto()">
                        </div>

                        <div>
                            <button type="submit" class="btn-custom-registrar">
                                Registrar
                            </button>
                        </div>

                        <div>
                            <a href="listado_mascotas.blade.php" class="btn btn-custom-qr text-center">
                                Generar QR
                            </a>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>
    <script src="../../public/js/catalogo-mascotas.js"></script>

    <script>
        var selectTipo = document.getElementById("tipo_mascota");
        var selectRaza = document.getElementById("raza");
        var inputFecha = document.getElementById("fecha_nac");
        var inputEdad = document.getElementById("edad");
        var textoEdad = document.getElementById("edad_texto");

        // Llenar el catálogo de especies al cargar la página
        llenarTiposMascota(selectTipo);

        // Al elegir especie, se despliega el listado de razas de esa especie
        selectTipo.addEventListener("change", function () {
            llenarRazas(selectRaza, selectTipo.value);
        });

        // No permitir seleccionar una fecha de nacimiento futura
        var hoyISO = new Date().toISOString().split("T")[0];
        inputFecha.setAttribute("max", hoyISO);

        // Calcular la edad automáticamente a partir de la fecha de nacimiento
        inputFecha.addEventListener("change", function () {
            var resultado = calcularEdadDesdeFecha(inputFecha.value);
            if (resultado) {
                inputEdad.value = resultado.anios;
                textoEdad.textContent = resultado.texto;
            } else {
                inputEdad.value = "";
                textoEdad.textContent = "";
                if (inputFecha.value) {
                    inputFecha.value = "";
                    alert("La fecha de nacimiento no puede ser posterior al día de hoy.");
                }
            }
        });

        function cambiarTextoFoto() {
            var archivo = document.getElementById("foto-canino");
            var texto = document.getElementById("txt-foto");
            if (archivo.value != "") {
                texto.innerHTML = "¡Foto cargada!";
            } else {
                texto.innerHTML = "Agregar foto";
            }
        }
    </script>
</body>
</html>
