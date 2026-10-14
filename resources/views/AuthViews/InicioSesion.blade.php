<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dr. Woof</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <style>
    body.login-page { background-color: #eaf6ee; }
    .card-outline.card-primary { border-top-color: #118A3B; }
    .btn-primary { background-color: #118A3B; border-color: #118A3B; }
    .btn-primary:hover, .btn-primary:focus { background-color: #0d6e2f; border-color: #0d6e2f; }
    a { color: #118A3B; }
    a:hover { color: #0d6e2f; }
    .login-logo-img { max-width: 120px; margin-bottom: 10px; }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <img src="{{ asset('img/logo.png') }}" class="login-logo-img" alt="Logo Dr. Woof">
      <p class="h1"><b>DR. </b>WOOF</p>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingresa tus Credenciales</p>

      @if (session('error'))
      <div id="alerta-error" class="alert alert-danger text-center" role="alert">
        {{ session('error') }}
      </div>
      @endif

      <form action="/loginpost" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" id="usuario" name="usuario" class="form-control" required placeholder="Correo electrónico">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">

          <input type="password" id="contrasennia" name="contrasennia" class="form-control" required placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">

            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="/inicio/recuperar">Recuperar tu contraseña</a>
      </p>
      <p class="mb-0">
        <a href="/inicio/registro" class="text-center">Crea un nuevo registro</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


<script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        
        Toast.fire({
            icon: 'success',
            title: 'Registro Exitoso'
        })
        
        
        Toast.fire({
            icon: 'error',
            title: 'Error en el registro'
        })
        
    });
</script>
</body>
</html>
