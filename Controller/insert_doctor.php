<?php

require_once('DBconnect.php');


$p= $_POST['Dname'];
$c=$_POST['Specialist'];

	

$sql = "INSERT INTO `doctor`(`Dname`, `Specialist`) VALUES ('$p','$c')";

$result = mysqli_query($conn,$sql);	
	
if(mysqli_affected_rows($conn)){
	
	header ("Location: doctor.php");
}

else{
	
	header("Location: add_doctor.php");
}

	
?>