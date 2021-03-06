<!DOCTYPE html>
<html>
<?php
session_start();
include_once('./php/config.php');
if (isset($_SESSION['user_id']) == false) {
  header("Location: login.php");
  die();
}

//Param asu
if (isset($_GET['kelas'])) {
  $kelas = $_GET['kelas'];
  $cat = $_GET['cat'];
  if ($cat == 'ipa') {
    $category = 'IPA';
  } else if ($cat == 'indonesia') {
    $category = 'B.Indonesia';
  } else if ($cat == 'mtk') {
    $category = 'MTK';
  } else if ($cat == 'inggris') {
    $category = 'B.Inggris';
  }
} else {
  //GET 404
}

?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../toefl/plugins/datatables/dataTables.bootstrap4.css">
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
            <li class="nav-item">
              <a href="./index.php" class="nav-link active">
                <i class=""></i>
                <p>Home</p>
              </a>
            </li>
            <li class="nav-item has-treeview menu-close">
              <a href="#" class="nav-link">
                <i class=""></i>
                <p>
                  Input & Bank Soal
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./SoalTeks.php" class="nav-link ">
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
              </ul>
            </li>
            <li class="nav-item has-treeview menu-close">
              <a href="#" class="nav-link">
                <i class=""></i>
                <p>
                  Materi Belajar
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./upload_materi.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Upload Materi</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item has-treeview menu-close">
                  <a href="" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Materi Kelas 7
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="datamateri.php?cat=ipa&kelas=7" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi IPA</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="datamateri.php?cat=mtk&kelas=7" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi MTK</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="datamateri.php?cat=indonesia&kelas=7" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi B.Indonesia</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="datamateri.php?cat=inggris&kelas=7" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi B.Inggris</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item has-treeview menu-close ">
                  <a href="" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Materi Kelas 8
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="datamateri.php?cat=ipa&kelas=8" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi IPA</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="datamateri.php?cat=mtk&kelas=8" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi MTK</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="datamateri.php?cat=indonesia&kelas=8" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi B.Indonesia</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="datamateri.php?cat=inggris&kelas=8" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi B.Inggris</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item has-treeview menu-close">
                  <a href="" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Materi Kelas 9
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="datamateri.php?cat=ipa&kelas=9" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi IPA</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="datamateri.php?cat=mtk&kelas=9" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi MTK</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="datamateri.php?cat=indonesia&kelas=9" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi B.Indonesia</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="datamateri.php?cat=inggris&kelas=9" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi B.Inggris</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>

            </li>

            <li class="nav-item">
              <a href="./logout.php" class="nav-link">
                <i class="far"></i>
                <p>Logout</p>
              </a>
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
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kumpulan Soal <?php echo $category ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama File</th>
                      <th>Tipe File</th>
                      <th>Size File</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include_once('php/config.php');
                    $sql = "SELECT * from materi where id_category='$cat' && kelas='$kelas'";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      $i = 1;
                      while ($row = $result->fetch_assoc()) {
                        //<td><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
                        echo "
                          <tr>
                            <td>" . $i . "</td>
                            <td><a href=" . 'files/' . $row['file_name'] . ">" . $row['file_name'] . "</a></td>
                            <td>" . $row['file_type'] . "</td>
                            <td>" .formatBytes( $row['file_size'])  . "</td>
                          </tr>
                          
                          ";

                        $i + 1;
                      }
                    } else {
                      echo "0 results";
                    }

                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama File</th>
                      <th>Tipe File</th>
                      <th>Size File</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
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
  <!-- jQuery -->
  <script src="../../toefl/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../toefl/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
  <!-- DataTables -->
  <script src="../../toefl/plugins/datatables/jquery.dataTables.js"></script>
  <script src="../../toefl/plugins/datatables/dataTables.bootstrap4.js"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
</body>

</html>