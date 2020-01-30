<?php
    session_start();
    $_SESSION['id'];
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
        exit();
    }
?>