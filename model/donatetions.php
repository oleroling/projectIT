<?php
error_reporting(0);
include('../database/condb.php');
if(isset($_POST['add'])) {
    $project_id = $_POST['project_id'];
    $user_id = $_POST['user_id'];
    $do_namber = $_POST['do_namber'];
    $do_pic = $_POST['do_pic'];
    if(isset($_POST['d_name'])){
        $d_name = $_POST['d_name'];
    }else{
        $d_name = $_POST['d_name2'];
    }
    $sql = "INSERT INTO `donatetions`(`project_id`, `user_id`, `do_namber`,`d_name`, `do_pic`) 
                    VALUES ('$project_id','$user_id','$do_namber','$d_name', '$do_pic')";
                            
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert(' การทำรายการเสร็จสมบูรณ์'); window.location ='../view/donatetion.php';</script>";
    // header("location: ../view/donatetion.php");
    }
    else{
    echo "  alert('Error back to register again');";
}
}
    

?>