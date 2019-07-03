<!DOCTYPE html>
<html>

  <?php 
    session_start();
    if(isset($_SESSION['user_id']) != false){
      header("Location: index.php");
      die();
    }
  ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bank Soal | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../toefl/plugins/sweetalert2/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../toefl/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../toefl/dist/css/adminlte.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../toefl/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../toefl/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Bank Soal</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="username" id="username" class="form-control" placeholder="Username">
            <div class="input-group-append input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password" class="form-control" placeholder="Password">
            <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <p class="mb-0">
                <a href="register.php" class="text-center">Register a new membership</a>
              </p>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button onclick="login()" type="button" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->


  <!-- jQuery -->
  <script src="../../toefl/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../toefl/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery -->
  <script src="../../toefl/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../toefl/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../../toefl/plugins/fastclick/fastclick.js"></script>
  <!-- SweetAlert2 -->
  <script src="../../toefl/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="../../toefl/plugins/toastr/toastr.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../toefl/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../toefl/dist/js/demo.js"></script>
</body>

<script type="text/javascript">
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });

  function login() {
    var username = $('#username').val();
    var password = $('#password').val();

    var intError = 0;
    var error = '';
    if (username == '') {
      error = "Username tidak di isi\n";
      intError += 1;
      Toast.fire({
        type: 'error',
        title: error
      })
    }
    if (password == '') {
      error += "Password tidak di isi\n";
      intError += 1;
      Toast.fire({
        type: 'error',
        title: error
      })
    }

    if (intError == 0) {
      $.ajax({
        url: 'proses_login.php',
        type: 'POST',
        data: {
          username: username,
          password: password,
          action: 'login'
        },
        success: function(response) {
          console.log(response);
          if (response.trim() == 'Login') {
            Toast.fire({
              type: 'success',
              title: 'Login berhasil'
            })
            window.location.href = "index.php";
          } else {
            Toast.fire({
              type: 'error',
              title: 'Tidak di temukan'
            })
          }
        },
        error: function(response) {
          console.log("error");
        }
      })
    }
  }
</script>

</html>