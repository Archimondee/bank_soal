<?php
include_once('php/config.php');
session_start();
if (isset($_POST['action']) == 'login') {

  $username = $_POST['username'];
  $password = $_POST['password'];
  

  $query = "SELECT * FROM user where username = '$username' && password = md5('$password') ";
  $result = $con->query($query);
  if ($result->num_rows > 0) {
    while ($row[] = $result->fetch_assoc()) {
      $item = $row;
      $json = json_encode($item);
    }
    //echo "Username : ".$row[0]['username'];

    //Set session
    $_SESSION['username'] = $row[0]['username'];
    $_SESSION['user_id'] = $row[0]['user_id'];
    $_SESSION['nama'] = $row[0]['nama'];

    $msg = 'Login';
  } else {
    $msg = 'Not Found';
  }
  echo $msg;
  $con->close();
}
?>
