<?php

require_once('DBconnect.php');

if(isset($_POST['fname'])&& isset($_POST['pass'])){
	$u= $_POST['fname'];
	$p= $_POST['pass'];
	$sql= "SELECT * FROM `admin` WHERE user='$u' and Pass='$p'"  ;
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) !=0){
		
		header("Location:home.php");
	}
	
	else{ 
		header ("Location:index.php");
	
}

}
?>
