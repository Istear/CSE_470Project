<?php

require_once('DBconnect.php');


$p= $_POST['NurseName'];
$c=$_POST['NurseCon'];

	

$sql = "INSERT INTO `nurse`(`NurseName`, `NurseCon`) VALUES ('$p','$c')";

$result = mysqli_query($conn,$sql);	
	
if(mysqli_affected_rows($conn)){
	
	header ("Location: nurse.php");
}

else{
	
	header("Location: add_nurse.php");
}

	
?>