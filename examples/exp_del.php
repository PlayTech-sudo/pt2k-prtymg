<?php
session_start();
	// ob_start(ob_gzhandler);
	$title = "Delete Expense";
	$acc_code = "A02";
	
	require "dbconn.php";
	require "dbfunc.php";

if(isset($_GET['delexp'])){
	$id = $_GET['delexp'];
	$sql = "DELETE FROM expense WHERE prop_name = '$id'";
	if (mysqli_query($conn, $sql)) {
		$message = "Entry Deleted Successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('location:expense.php');

	} else {
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}

?>