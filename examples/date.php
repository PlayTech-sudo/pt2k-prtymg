<?php
// Prints the day
 //date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
 echo date("l jS \of F Y h:i:s A");

 $a=date("j");

 if ($a==1) {

 	 $sql = "UPDATE `ripaid` SET `rent` = ( SELECT SUM(`rent` + `due_amt`) WHERE `prop_name` = 'Rachana' )";
 	  $res = mysqli_query($conn, $sql);
 	echo "Rent Updated"; }
 else
 	echo "Not Updated";

?>
