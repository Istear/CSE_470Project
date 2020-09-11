<?php

require_once('DBconnect.php');


$p= $_POST['Pname'];
$c=$_POST['Did'];
$d=$_POST['AddDate'];
$e=$_POST['PhnNum'];
$f=$_POST['RoomNo'];

	

$sql = "INSERT INTO `patientsinfo`(`Pname`, `Did`, `AddDate`, `PhnNum`, `RoomNo`) VALUES ('$p','$c','$d','$e','$f')";

$result = mysqli_query($conn,$sql);	
	
if(mysqli_affected_rows($conn)){
	
	header ("Location: patient.php");
}

else{
	
	header("Location: add_patient.php");
}

	
?>