<?php
session_start();
	// ob_start(ob_gzhandler);
	$title = "Delete Tenant";
	$acc_code = "A02";
	
	require "dbconn.php";
	require "dbfunc.php";

if(isset($_GET['deltent'])){
	$id = $_GET['deltent'];
	$sql = "DELETE FROM tentants WHERE tent_id = '$id'";
	if (mysqli_query($conn, $sql)) {
		$message = "Entry Deleted Successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('location:tenants.php');

	} else {
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}

?>