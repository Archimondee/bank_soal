<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "bank_soal";
   $con = mysqli_connect($hostname, $username, $password, $dbname);

   if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
?>