<?php
   session_start();
    
   $host = "host";
   $username = "username";
   $password = "password";
   $dbName = "dbname";

   global $connection;
   $connection = mysqli_connect($host, $username, $password, $dbName);

   if(mysqli_connect_errno()){
    printf('Connection failed: %s\n', mysqli_connect_error());
    exit();
   }
?>