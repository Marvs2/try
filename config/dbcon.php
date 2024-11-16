<?php

     $host = "localhost";
     $username = "root";
     $password = "";
     $database = "users"; 

     $con = mysqli_connect($host, $username, $password, $database);

     if(!$con)
     {
        die("Connection Failde: ". mysqli_connect_error());
     }

?>