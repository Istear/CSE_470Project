<?php

require_once('DBconnect.php');

$u=$_POST['billno'];
$p=$_POST['Patientid'];
$c=$_POST['LeaveDate'];
$d=$_POST['Tbill'];
$e=$_POST['Rbill'];
$f=$_POST['Medbill'];
$g=$_POST['Total'];
$h=$_POST['Status'];

if($p!=""){
$sql="UPDATE `patientleave` SET `Patientid`='$p' WHERE billno=$u";
$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
header("Location: patientleave.php");
}

else{
	
header("Location: update_patientleave.php");
}	
}

if($c!=""){
$sql="UPDATE `patientleave` SET `LeaveDate`='$c' WHERE billno=$u";
$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
header("Location: patientleave.php");
}

else{
	
header("Location: update_patientleave.php");
}	
}

if($d!=""){
$sql="UPDATE `patientleave` SET `Tbill`='$d' WHERE billno=$u";
$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
header("Location: patientleave.php");
}

else{
	
header("Location: update_patientleave.php");
}	
}
	
if($e!=""){

$sql = "UPDATE `patientleave` SET `Rbill`='$e' WHERE billno=$u";

$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
header("Location: patientleave.php");
}

else{
	
header("Location: update_patientleave.php");
}		
}
	
if($f!=""){
$sql="UPDATE `patientleave` SET `Medbill`='$f' WHERE billno=$u";
$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
header("Location: patientleave.php");
}

else{
	
header("Location: update_patientleave.php");
}	
}

if($g!=""){
$sql="UPDATE `patientleave` SET `Total`='$g' WHERE billno=$u";
$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
header("Location: patientleave.php");
}

else{
	
header("Location: update_patientleave.php");
}	
}

if($h!=""){
$sql="UPDATE `patientleave` SET `Status`='$h' WHERE billno=$u";
$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
header("Location: patientleave.php");
}

else{
	
header("Location: update_patientleave.php");
}	
}
	



?>