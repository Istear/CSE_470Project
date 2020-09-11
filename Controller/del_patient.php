<?php

require_once('DBconnect.php');


$p= $_POST['Patientid'];


	

$sql ="DELETE FROM `patientsinfo` WHERE  Patientid='$p' ";
$pql="DELETE FROM `patientleave` WHERE  Patientid='$p' ";
$result = mysqli_query($conn,$sql);	
$query=mysqli_query($conn,$pql);

	
header ("Location: home.php");


	
?>