<?php
include('../database/condb.php');


		$id = $_GET['id'];

		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		// echo $first_name ,$last_name ,$phone, $email;

		$sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', phone ='$phone', email='$email' WHERE user_id ='$id'";
		$result = mysqli_query($conn,$sql);
if($result){
	echo '<script> alert("Data Update")</script>';
	header("location: ../view/profile.php");
}else{
	echo '<script> alert("Error")</script>';
}
 ?>