<?php
session_start();
	// ob_start(ob_gzhandler);
	$title = "Delete Project";
	$acc_code = "A02";
	
	require "dbconn.php";
	require "dbfunc.php";

if(isset($_GET['delprop'])){
	$id = $_GET['delprop'];
	$sql = "DELETE FROM property WHERE prop_id = '$id'";
	if (mysqli_query($conn, $sql)) {
		$message = "Entry Deleted Successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('location:property.php');

	} else {
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}

?>