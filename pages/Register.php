<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bank Soal | Registration Page</title>
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

<body class="hold-transition register-page">
  <div class="register-box">

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register Bank Soal</p>

        <form id="registration-form" name="" action="" method="post">
          <div class="input-group mb-3">
            <input name="nama" type="text" id="nama" class="form-control" placeholder="Full name">
            <div class="input-group-append input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name="username" id="username" type="text" class="form-control" placeholder="Username">
            <div class="input-group-append input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name="email" type="email" id="email" class="form-control" placeholder="Email">
            <div class="input-group-append input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name="password" type="password" id="password" class="form-control" placeholder="Password">
            <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name="repassword" type="password" id="repassword" class="form-control" placeholder="Retype password">
            <div class="input-group-append input-group-text ">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <a href="login.php" class="text-center">I already have an account</a>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button onclick="register()" name="submit" type="button" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

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
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        type: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        type: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    function ini_error() {
      Toast.fire({
        type: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    }



  });
</script>

<script type="text/javascript">
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });

  function register() {
    var username = $('#username').val();
    var nama = $('#nama').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var repassword = $('#repassword').val();
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
    if (nama == '') {
      error += "Nama tidak di isi\n";
      intError += 1;
      Toast.fire({
        type: 'error',
        title: error
      })
    }

    if (email == '') {
      error += "Email tidak di isi\n";
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
    if (repassword == '') {
      error += "Repassword tidak di isi\n";
      intError += 1;
      Toast.fire({
        type: 'error',
        title: error
      })
    }
    if (intError == 0) {
      if (password != repassword) {
        Toast.fire({
          type: 'error',
          title: 'Password tidak sama'
        })
      } else {
        $.ajax({
          url: 'proses_daftar.php',
          type: 'POST',
          data: {
            username: username,
            nama: nama,
            password: password,
            email: email,
            action: 'register'
          },
          success: function(response) {
            if (response.trim() == 'Registered') {
              Toast.fire({
                type: 'success',
                title: 'Pendaftaran berhasil'
              })
              window.location.href="index.html";
            } else {
              Toast.fire({
                type: 'error',
                title: 'Terjadi kesalahan'
              })
            }
          },
          error: function(response) {
            console.log("error");
          }
        })
      }
    }
  }
</script>

</html>