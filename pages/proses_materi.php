<?php
  include_once('./php/config.php');
  session_start();
  
  if ( isset($_POST['upload']) == 'upload') {
    echo "HELLO";
    $allowed_ext  = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
    $file_name    = $_FILES['file']['name'];
    //$file_ext    = strtolower(end(explode('.', $file_name)));
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $file_size    = $_FILES['file']['size'];
    $file_tmp    = $_FILES['file']['tmp_name'];

    $id_category = $_POST['category'];
    $kelas = $_POST['kelas'];
    echo "KELAS : ".$kelas;

    //$nama      = $_POST['nama'];
    $user_id = $_SESSION['user_id'];
  //$in = mysql_query("INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");

    if (in_array($file_ext, $allowed_ext) == true) {
      if ($file_size < 1044070) {
        $lokasi = 'files/' . $file_name;
        move_uploaded_file($file_tmp, $lokasi);
        
        
        $query ="INSERT INTO materi(file_name, file_type, file_size, user_id, kelas, id_category) values ('$file_name', '$file_ext', '$file_size','$user_id','$kelas','$id_category')";
        
        
        if (mysqli_query($con,$query)) {
          $msg = '
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  File sukses di upload.
                </div>
          ';
        } else {
          $msg = '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  Gagal Upload File
                </div>';
        }
      } else {
        $msg = '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  Besar ukuran melebihi 1Mb
                </div>';
      }
    } else {
      $msg = '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  Ekstensi file tidak di izinkan
                </div>';
    }

    $_SESSION['message'] = $msg;
    header("Location: upload_materi.php");
    //header("Location : upload_materi.php");
  }
