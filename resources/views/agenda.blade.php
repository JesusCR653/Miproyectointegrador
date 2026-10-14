<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Agenda</title>

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
            padding: 40px !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: none !important;
            min-height: 85vh;
            margin-top: 0 !important;
        }
        
        .card-agenda-panel {
            background-color: #ffffff !important;
            border-radius: 20px !important;
            padding: 25px !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: none !important;
        }

        .calendar-table td { 
            width: 45px; 
            height: 45px; 
            text-align: center; 
            vertical-align: middle; 
            font-weight: 500;
        }

        .calendar-table thead tr th {
            color: #ffffff !important;
        }
        
        .event-marked {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
            font-weight: bold;
            border-radius: 50%;
            cursor: pointer;
        }
        .event-marked:hover { background-color: #0c6b2e !important; }
        
        .day-today {
            background-color: #118A3B !important;
            color: #ffffff !important;
            font-weight: bold;
            border-radius: 50%;
        }

        .event-detail { border-left: 4px solid #1a1a1a; }

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
        .br-sideleft-menu .br-menu-link.active { background-color: #1c9a48 !important; }
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
                <div class="br-menu-item"><i class="icon ion-ios-paw-outline tx-24"></i><span class="menu-item-label">Mis Mascotas</span></div>
            </a>
        </div>

        <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20">Herramientas</label>
        <div class="br-sideleft-menu">
            <a href="agenda.blade.php" class="br-menu-link active">
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
            <h6>AGENDA GENERAL</h6>
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
        <div class="br-mainpanel">
            <div class="br-pageheader pd-y-15 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-12">
                    <a class="breadcrumb-item" href="index.blade.php">DR. WOOF</a>
                    <span class="breadcrumb-item active">Agenda</span>
                </nav>
            </div>

            <div class="br-pagebody pd-t-20">
                <div class="br-section-wrapper">
                    <div class="row align-items-start">
                        
                        <div class="col-md-8 mg-b-20">
                            <div class="d-flex align-items-center justify-content-between mg-b-20">
                                <a href="agenda.blade.php?mes=8&anio=2026" class="btn btn-outline-primary btn-sm" style="color: #118A3B; border-color: #118A3B;">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                                <h5 class="tx-inverse tx-bold mg-b-0" style="color: #118A3B; font-size: 18px;">Septiembre — 2026</h5>
                                <a href="agenda.blade.php?mes=10&anio=2026" class="btn btn-outline-primary btn-sm" style="color: #118A3B; border-color: #118A3B;">
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered bg-white text-center calendar-table">
                                    <thead>
                                        <tr style="background-color: #118A3B; color: white;">
                                            <th>Dom</th><th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td class="day-today">4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td class="event-marked" onclick="mostrarDia(10)">10</td>
                                            <td>11</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>21</td>
                                            <td class="event-marked" onclick="mostrarDia(22)">22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                            <td>30</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-4">
                            
                            <div class="card card-agenda-panel mg-b-20" id="panel-dia" style="display:none; border-top: 4px solid #118A3B !important;">
                                <h6 class="tx-inverse tx-uppercase tx-bold tx-13 mg-b-15" id="titulo-dia" style="color: #118A3B;"></h6>
                                <div id="lista-dia"></div>
                            </div>

                            <div class="card card-agenda-panel">
                                <h6 class="tx-inverse tx-uppercase tx-bold tx-13 mg-b-15" style="color: #118A3B;">Recordatorios de Septiembre</h6>
                                
                                <div style="max-height: 320px; overflow-y: auto;">
                                    <div class="media mg-b-15 pd-b-15 bd-b event-detail pd-l-10">
                                        <div class="media-body">
                                            <p class="mg-b-0 tx-inverse tx-bold tx-13">Axel</p>
                                            <p class="mg-b-0 tx-13 tx-gray-600">Vacuna anual</p>
                                            <p class="mg-b-0 tx-12 tx-info" style="color: #1a1a1a !important;">10/09/2026 — 10:00 AM</p>
                                        </div>
                                    </div>
                                    <div class="media mg-b-15 pd-b-15 bd-b event-detail pd-l-10">
                                        <div class="media-body">
                                            <p class="mg-b-0 tx-inverse tx-bold tx-13">Firulais</p>
                                            <p class="mg-b-0 tx-13 tx-gray-600">Revisión general</p>
                                            <p class="mg-b-0 tx-12 tx-info" style="color: #1a1a1a !important;">22/09/2026 — 04:30 PM</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mg-t-20 text-center">
                                    <a href="recordatorios.blade.php" class="btn btn-info btn-sm pd-x-20" style="background-color: #1a1a1a; border: none; border-radius: 20px; font-weight: bold;">
                                        <i class="fa fa-plus mg-r-5"></i> Agregar Recordatorio
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/js/bracket.js"></script>
    <script>
        const recordatoriosPorDia = {"10":[{"nombre_canino":"Axel","motivo":"Vacuna anual"}],"22":[{"nombre_canino":"Firulais","motivo":"Revisión general"}]};
        const nombresMeses = ["","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        const mesActual = 9;
        const anioActual = 2026;

        function mostrarDia(dia) {
            const panel = $('#panel-dia');
            const lista = $('#lista-dia');
            $('#titulo-dia').text(dia + ' de ' + nombresMeses[mesActual] + ' ' + anioActual);
            lista.empty();
            const eventos = recordatoriosPorDia[dia];
            if (eventos) {
                eventos.forEach(r => {
                    lista.append(`<div class="media mg-b-10 pd-b-10 bd-b">
                        <div class="media-body">
                            <p class="mg-b-0 tx-inverse tx-bold tx-13" style="color:#118A3B;">${r.nombre_canino}</p>
                            <p class="mg-b-0 tx-13 text-secondary">${r.motivo}</p>
                        </div>
                    </div>`);
                });
            }
            panel.fadeIn();
        }
    </script>
</body>
</html>
