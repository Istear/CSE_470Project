<?php

require_once('DBconnect.php');

$u=$_POST['NurseID'];
$p= $_POST['NurseName'];
$c=$_POST['NurseCon'];

if($p!=""){

$sql = "UPDATE `nurse` SET NurseName='$p' WHERE NurseID=$u";

$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
	header ("Location: nurse.php");
}

else{
	
header ("Location: update_nurse.php");
}	
}

if($c!=""){

$sql = "UPDATE `nurse` SET NurseCon='$c' WHERE NurseID=$u";

$result = mysqli_query($conn,$sql);	

if(mysqli_affected_rows($conn)){
	
	header ("Location: nurse.php");
}

else{
	
header ("Location: update_nurse.php");
}
	
}



?>
