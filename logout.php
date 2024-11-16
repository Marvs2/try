<?php
// session_start()

   //   if(isset($_SESSION['auth']))
   //   {
   //      unset($_SESSION['auth']);
   //      unset($_SESSION['auth_user']);
   //      $_SESSION['message'] = "Logged Out";
   //   }

   //   header('Location: index.php');
   include ('config.php');

   session_start();
   session_unset();
   session_destroy();

   header('Location:login.php');


?>