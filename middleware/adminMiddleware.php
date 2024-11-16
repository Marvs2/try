<?php

 if(isset($_SESSION['auth']))
 {
    if($_SESSION['role_as'] != 1)
    {
        $_SESSION['message'] = "You are not authorized to access this page";
        header('Location: ../index.php');

    }

 }
 else
 {
    $_SESSION['message'] = "Login to continue";
    header('Location: ../login.php');
 }

?>