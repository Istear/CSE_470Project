<?php

require_once('DBconnect.php');


$p= $_POST['RoomNo'];


	

$sql = "DELETE FROM `room` WHERE  RoomNo='$p' ";

$result = mysqli_query($conn,$sql);	
	
if(mysqli_affected_rows($conn)){
	
	header ("Location: room.php");
}

else{
	
header ("Location: del_room.php");
}

	
?>
