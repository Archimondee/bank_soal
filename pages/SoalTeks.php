<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../toefl/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../toefl/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../toefl/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../toefl/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../toefl/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../toefl/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../toefl/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../toefl/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../../toefl/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../toefl/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./SoalTeks.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Input Bank Soal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./dataipa.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bank Soal IPA</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./datamtk.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bank Soal MTK</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./dataindo.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bank Soal B. Indonesia</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./datainggris.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bank Soal B. Inggris</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./logout.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Logout</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Teks Section</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="col-sm-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Input Soal UN SMP</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="" method="post">
            <div class="card-body">
              <div class="form-group">
                <label>Pilih Kategori</label>
                <select class="form-control" id="category">
                  <option value="ipa">Ilmu Pengetahuan Alam</option>
                  <option value="inggris">Bahasa Inggris</option>
                  <option value="mtk">Matematika</option>
                  <option value="indonesia">Bahasa Indonesia</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Soal Pertanyaan</label>
                <textarea class="form-control" rows="3" placeholder="Pertanyaan ..." id="soal"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban A</label>
                <input type="text" class="form-control" id="jawabA" placeholder="Jawaban A">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Jawaban B</label>
                <input type="text" class="form-control" id="jawabB" placeholder="Jawaban B">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Jawaban C</label>
                <input type="text" class="form-control" id="jawabC" placeholder="Jawaban C">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Jawaban D</label>
                <input type="text" class="form-control" id="jawabD" placeholder="Jawaban D">
              </div>
              <label for="exampleInputEmail1">Pilih Jawaban</label>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban" id="jawaban" value="A">
                <label class="form-check-label" for="exampleCheck1">A</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban" id="jawaban" value="B">
                <label class="form-check-label" for="exampleCheck1">B</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban" id="jawaban" value="C">
                <label class="form-check-label" for="exampleCheck1">C</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="jawaban" id="jawaban" value="D">
                <label class="form-check-label" for="exampleCheck1">D</label>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penjelasan Soal</label>
                <textarea class="form-control" rows="3" placeholder="Penjelasan ..." id="penjelasan"></textarea>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button onclick="input_soal()" type="button" class="btn btn-primary" name="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2018-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.0-beta.1
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../toefl/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../toefl/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../../toefl/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../../toefl/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../../toefl/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../../toefl/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../toefl/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../toefl/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../toefl/plugins/moment/moment.min.js"></script>
  <script src="../../toefl/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../toefl/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../../toefl/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../toefl/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- FastClick -->
  <script src="../../toefl/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../../toefl/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../../toefl/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../toefl/dist/js/demo.js"></script>

  <!-- FastClick -->
  <script src="../../toefl/plugins/fastclick/fastclick.js"></script>
  <!-- SweetAlert2 -->
  <script src="../../toefl/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="../../toefl/plugins/toastr/toastr.min.js"></script>

</body>

<script type="text/javascript">
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });

  function input_soal() {
    var soal = $('#soal').val();

    var a = $('#jawabA').val();
    var b = $('#jawabB').val();
    var c = $('#jawabC').val();
    var d = $('#jawabD').val();
    var category = document.getElementById('category').value;
    var penjelasan = $('#penjelasan').val();
    jawaban = $("#jawaban:checked").val();

    var action = "input_soal";

    //console.log("Value : "+category);
    $.ajax({
      url: 'proses_soal.php',
      type: 'POST',
      data: {
        a: a,
        b: b,
        c: c,
        d: d,
        soal: soal,
        jawaban: jawaban,
        penjelasan: penjelasan,
        category: category,
        action: action
      },
      success: function(response) {
        console.log(response);
        if (response.trim() == 'Berhasil') {
          Toast.fire({
            type: 'success',
            title: 'Input Soal Berhasil'
          })
          window.location.href = "SoalTeks.php";
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
    });
  }
</script>

</html>