<?php
include_once('php/config.php');
if (isset($_POST['action']) == 'register') {
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $status = 0;
  $user_id = uniqid();

  $query = "INSERT INTO user(nama, user_id, username, password, email, status) values('$nama', '$user_id', '$username', md5('$password'), '$email', '$status')";

  if (mysqli_query($con, $query)) {
    $msg = 'Registered';
  } else {
    $msg = 'Try again';
  }

  echo $msg;
  mysqli_close($con);
}
