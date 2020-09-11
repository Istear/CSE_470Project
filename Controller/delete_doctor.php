<?php

require_once('DBconnect.php');


$p= $_POST['Did'];


	

$sql = "DELETE FROM `doctor` WHERE  Did='$p' ";

$result = mysqli_query($conn,$sql);	
	
if(mysqli_affected_rows($conn)){
	
	header ("Location: doctor.php");
}

else{
	
header ("Location: del_doctor.php");
}

	
?>