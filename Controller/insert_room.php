<?php

require_once('DBconnect.php');

$u=$_POST['RoomNo'];
$p= $_POST['BedQnty'];
$c=$_POST['NurseID'];

	

$sql = "INSERT INTO `room` VALUES ('$u','$p','$c')";

$result = mysqli_query($conn,$sql);	
	
if(mysqli_affected_rows($conn)){
	
	header ("Location: room.php");
}

else{
	
	header("Location: add_room.php");
}

	
?>