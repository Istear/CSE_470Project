<?php

require_once('DBconnect.php');

$u=$_POST['RoomNo'];
$p= $_POST['BedQnty'];
$c=$_POST['NurseID'];

if($p!=""){

$sql = "UPDATE `room` SET BedQnty='$p' WHERE RoomNo=$u";

$result = mysqli_query($conn,$sql);	
if(mysqli_affected_rows($conn)){
	
	header ("Location: room.php");
}

else{
	
header ("Location: update_room.php");
}	
}

if($c!=""){

$sql = "UPDATE `room` SET NurseID='$c' WHERE RoomNo=$u";

$result = mysqli_query($conn,$sql);	

if(mysqli_affected_rows($conn)){
	
	header ("Location: room.php");
}

else{
	
header ("Location: update_room.php");
}
	
}



?>
