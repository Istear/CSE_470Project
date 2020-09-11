<?php

require_once('DBconnect.php');


$p= $_POST['Patientid'];
$c=$_POST['LeaveDate'];
$d=$_POST['Tbill'];
$e=$_POST['Rbill'];
$f=$_POST['Medbill'];
$g=$d+$e+$f;
$h=$_POST['Status'];

	

$sql = "INSERT INTO `patientleave`(`Patientid`, `LeaveDate`, `Tbill`, `Rbill`,`Medbill`, `Total`,`Status`) VALUES ('$p','$c','$d','$e','$f','$g','$h')";

$result = mysqli_query($conn,$sql);	
	
if(mysqli_affected_rows($conn)){
	
	header ("Location: patientleave.php");
}

else{
	
	header("Location: add_patientleave.php");
}

	
?>