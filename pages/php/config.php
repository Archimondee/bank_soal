<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "bank_soal";
   $con = mysqli_connect($hostname, $username, $password, $dbname);

   if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

function formatBytes($bytes, $precision = 2)
{
   $units = array('B', 'KB', 'MB', 'GB', 'TB');

   $bytes = max($bytes, 0);
   $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
   $pow = min($pow, count($units) - 1);

   $bytes /= pow(1024, $pow);

   return round($bytes, $precision) . ' ' . $units[$pow];
}
?>