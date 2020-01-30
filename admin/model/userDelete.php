<?php
    include('../../database/condb.php');

    $userID = $_GET["userID"];
	$sql = "DELETE FROM users
			WHERE user_id = '".$userID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
        //  echo "Record delete successfully";
         echo"<script>window.location='javascript:history.back()';</script>";
    }

	mysqli_close($conn);
?>