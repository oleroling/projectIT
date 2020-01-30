<?php 
     session_start();

     if (session_destroy()) {
         header("Location: guest-index.php");
     }
 ?>