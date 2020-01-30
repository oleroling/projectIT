<?php 

include('../database/condb.php');

    $first_name = $_POST['first_name'];
    //$first_name = mysqli_real_escape_string($conn,$first_name);

    $last_name = $_POST['last_name'];
    //$last_name = mysqli_real_escape_string($conn,$last_name);

    $email = $_POST['email'];
    //$email = mysqli_real_escape_string($conn,$email);
    $password = MD5($_POST["password"]);
    //$password = mysqli_real_escape_string($conn,$password);
    $status = "1";

    $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `status`) 
    VALUES ('$first_name', '$last_name', '$email', '$password', '$status')";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo ('สมัครสำเร็จ');
        header("location:../view/login.php");
        }
        else{
        echo "  alert('Error back to register again');";
    }
