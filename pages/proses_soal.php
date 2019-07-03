<?php
include_once('php/config.php');
session_start();
if (isset($_POST['action'])=='input_soal') {
  $soal = $_POST['soal'];
  $jawabA = $_POST['a'];
  $jawabB = $_POST['b'];
  $jawabC= $_POST['c'];
  $jawabD = $_POST['d'];
  $jawaban = $_POST['jawaban'];
  $penjelasan = $_POST['penjelasan'];
  $id_category = $_POST['category'];
  $user_id = $_SESSION['user_id'];

  $query = "INSERT INTO soal(pertanyaan, jawaban_a, jawaban_b, jawaban_c, jawaban_d, jawaban, penjelasan, id_category, user_id) values('$soal','$jawabA','$jawabB', '$jawabC', '$jawabD','$jawaban', '$penjelasan', '$id_category', '$user_id')";

  if (mysqli_query($con, $query)) {
    $msg = 'Berhasil';
  } else {
    $msg = 'Try again';
  }

  echo $msg;
  mysqli_close($con);
}
