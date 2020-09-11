<?php

require_once('DBconnect.php');

$u=$_POST['Patientid'];
$p=$_POST['Pname'];
$c=$_POST['Did'];
$d=$_POST['AddDate'];
$e=$_POST['PhnNum'];
$f=$_POST['RoomNo'];

if($p!=""){
$sql="UPDATE `patientsinfo` SET `Pname`='$p' WHERE Patientid=$u";
$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
header("Location: patient.php");
}

else{
	
header("Location: update_patient.php");
}	
}

if($c!=""){
$sql="UPDATE `patientsinfo` SET `Did`='$c' WHERE Patientid=$u";
$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
header("Location: patient.php");
}

else{
	
header("Location: update_patient.php");
}	
}

if($d!=""){
$sql="UPDATE `patientsinfo` SET `AddDate`='$d' WHERE Patientid=$u";
$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
header("Location: patient.php");
}

else{
	
header("Location: update_patient.php");
}	
}
	
if($e!=""){

$sql = "UPDATE `patientsinfo` SET PhnNum='$e' WHERE Patientid=$u";

$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
header("Location: patient.php");
}

else{
	
header("Location: update_patient.php");
}		
}
	
if($f!=""){
$sql="UPDATE `patientsinfo` SET `RoomNo`='$f' WHERE Patientid=$u";
$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
header("Location: patient.php");
}

else{
	
header("Location: update_patient.php");
}	
}
	



?>
