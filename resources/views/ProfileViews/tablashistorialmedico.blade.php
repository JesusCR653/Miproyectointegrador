<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Seguros Azteca</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<style>
    /* Menú lateral en verde del proyecto */
    .main-sidebar, .main-sidebar .brand-link { background-color: #118A3B !important; }
    .main-sidebar .brand-link, .main-sidebar .user-panel { border-bottom-color: rgba(255,255,255,.3) !important; }
    .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active { background-color: #0b5c28 !important; color: #fff !important; }
    .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link:hover { background-color: rgba(255,255,255,.18) !important; color: #fff !important; }
    .sidebar-dark-primary .nav-header, .sidebar-dark-primary .nav-sidebar .nav-link { color: #fff; }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('/miinterfaz') }}" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="Seguros Azteca" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $titulo }}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('img/logo.png') }}" class="img-circle elevation-2" alt="User Image">
          </div>

          <div class="d-flex flex-column position-relative">
            <div class="info order-1 ">
              <p class="d-block text-white">Jesus Ceron Ramirez</p>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

            <li class="nav-header">TABLAS</li>
            <li class="nav-item">
              <a href="/usuarios" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p> Usuarios </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/mascotas" class="nav-link">
                <i class="nav-icon fas fa-paw"></i>
                <p> Mascotas </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/recordatorios" class="nav-link">
                <i class="nav-icon fas fa-bell"></i>
                <p> Recordatorios </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/citas" class="nav-link">
                <i class="nav-icon fas fa-calendar-check"></i>
                <p> Citas </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/comentarios" class="nav-link">
                <i class="nav-icon fas fa-comments"></i>
                <p> Comentarios </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/galeria" class="nav-link">
                <i class="nav-icon fas fa-images"></i>
                <p> Galería </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/historial-medico" class="nav-link active">
                <i class="nav-icon fas fa-notes-medical"></i>
                <p> Historial médico </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/archivos-adjuntos" class="nav-link">
                <i class="nav-icon fas fa-paperclip"></i>
                <p> Archivos adjuntos </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/cartilla-vacunacion" class="nav-link">
                <i class="nav-icon fas fa-syringe"></i>
                <p> Cartilla de vacunación </p>
              </a>
            </li>

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <li class="nav-item">
                <a href="/login" class="nav-link ">
                  <i class="fa fa-sign-out-alt"></i>
                  <p> Cerrar Sesión </p>
                </a>
              </li>
            </div>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card">

                <div class="card-body"> <!-- /.card-body -->
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">

                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Historial Médico</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Peso actual</th>
                                <th>Diagnóstico</th>
                                <th>Fecha de consulta</th>
                                <th>Próxima revisión</th>
                                <th>Id Animal</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($res2Historial as $dato)
                              <tr>
                                <td>{{ $dato->id_historial }}</td>
                                <td>{{ $dato->peso_actual }}</td>
                                <td>{{ $dato->diagnostico }}</td>
                                <td>{{ $dato->fecha_consulta }}</td>
                                <td>{{ $dato->proxima_revision }}</td>
                                <td>{{ $dato->id_animal }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->

                    </div><!-- /.tab-pane -->

                  </div><!-- /.tab-content -->
                </div><!-- /.card-body -->

              </div><!-- /.card -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Versión</b> 1.0
      </div>
      <strong>Copyright &copy; 2025 <a href="#">AlmacenPlus</a>.</strong> todos los derechos reservados.
    </footer>


  </div>
  <!-- ./wrapper -->


  <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/jszip/jszip.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>
