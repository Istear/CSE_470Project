<?php

require_once('DBconnect.php');

$u=$_POST['Did'];

if($_POST['Dname']!="" && $_POST['Specialist']!=""){
$p= $_POST['Dname'];
$c=$_POST['Specialist'];

	

$sql = "UPDATE `doctor` SET Dname='$p',Specialist='$c' WHERE Did=$u";

$result = mysqli_query($conn,$sql);	
	
if(mysqli_affected_rows($conn)){
	
	header ("Location: doctor.php");
}

else{
	
	header("Location: update_doctor.php");
}
	
}

elseif($_POST['Specialist']==""){
$p= $_POST['Dname'];
$sql = "UPDATE `doctor` SET Dname='$p'WHERE Did=$u";

$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
	header ("Location: doctor.php");
}

else{
	
	header("Location: update_doctor.php");
}
	
}	


elseif($_POST['Dname']==""){
$c= $_POST['Specialist'];
$sql = "UPDATE `doctor` SET Specialist='$c' WHERE Did=$u";

$result = mysqli_query($conn,$sql);	
	
if(mysqli_affected_rows($conn)){
	
	header ("Location: doctor.php");
}

else{
	
	header("Location: update_doctor.php");
}
	
}

else{
	header ("Location: doctor.php");
}

	
?>
	

