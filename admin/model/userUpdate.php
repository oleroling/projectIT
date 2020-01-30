<?php   
include('../../database/condb.php');


// if(ISSET($_POST['update'])){
    $user_id = $_POST['user_id'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    echo "$user_id";
    echo "$firstname";
    echo "$lastname";
    echo "$phone";
    echo "$email";
    
//     mysqli_query($conn, "UPDATE `users` SET `first_name` = '$firstname', `last_name` = '$lastname', `phone` = '$phone', `email` = '$email' WHERE `user_id` = '$user_id'");
// $query = mysqli_query($conn,$sql);

$sql = "UPDATE users SET  
			first_name='$firstname' ,
			WHERE user_id='$user_id' ";

    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
    
// if(mysqli_affected_rows($conn)) {
//      echo "Record delete successfully";
//      echo"<script>window.location='javascript:history.back()';</script>";
// }

mysqli_close($conn);

if($result){
	// echo "<script type='text/javascript'>";
	// echo "alert('Update Succesfuly');";
	// echo "window.location = 'showmember.php'; ";
    // echo "</script>";
    echo "Success";
	}
	else{
	// echo "<script type='text/javascript'>";
	// echo "alert('Error back to Update again');";
    //     echo "window.location = 'showmember.php'; ";
    // echo "</script>";
    echo "Error";
}

// }
?>