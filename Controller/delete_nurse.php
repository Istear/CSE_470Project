<?php

require_once('DBconnect.php');


$p= $_POST['NurseID'];


	

$sql = "DELETE FROM `nurse` WHERE  NurseID='$p' ";

$result = mysqli_query($conn,$sql);	
	
if(mysqli_affected_rows($conn)){
	
	header ("Location: nurse.php");
}

else{
	
header ("Location: del_nurse.php");
}

	
?>