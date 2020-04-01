<?php
session_start();
	// ob_start(ob_gzhandler);
	$title = "Delete Paid";
	//$acc_code = "A02";
	
	require "dbconn.php";
	require "dbfunc.php";

if(isset($_GET['delripaid'])){
	$id = $_GET['delripaid'];
	$sql = "DELETE FROM ripaid WHERE prop_name = '$id'";
	if (mysqli_query($conn, $sql)) {
		$message = "Entry Deleted Successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('location:ri_paid.php');

	} else {
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}

?>