<?php
   $server = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $dbname  = "cms";

   $conn = mysqli_connect($server,$dbuser,$dbpass,$dbname);

   if(!$conn){
    die("ERROR : Connection failed" . mysqli_error($conn));
   }
?>