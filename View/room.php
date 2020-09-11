<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hospital Management</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

	<section id="contact">
        <h1 class="header">
            Room List
        </h1>
	<div class="container">
	    <div class="row">
	        <div class="offset-lg-2 col-lg-8">
	
<table border="1px" style=" width:100%; line-height: 40px; margin-bottom: 50px; text-align: center;">
	<tr><th>Room No</th><th>Bed Quantity</th><th>Nurse Id in Charge of room</th><th>Nurse Name</th><th>Nurse Contact Number</th></tr>
	
	<?php
	
	require_once("DBconnect.php");
	$sql="SELECT * FROM room
LEFT JOIN nurse ON room.NurseID = nurse.NurseID";
	$result= mysqli_query($conn,$sql);
	
	?>
	
	<?php
		while($row=mysqli_fetch_assoc($result)){
			
	?>
	
	<tr><td><?php echo $row['RoomNo']; ?></td><td><?php echo $row['BedQnty']; ?></td><td><?php echo $row['NurseID']; ?></td><td><?php echo $row['NurseName']; ?></td><td><?php echo $row['NurseCon']; ?></td></tr>
	
	
	<?php
	}
	?>
</table>

<a href="add_room.php">Add Room </a>
<a href="del_room.php">Delete Room</a>
<a href="update_room.php">Update Room</a>
<a href="home.php">Back</a>
</div>
	    </div>
	</div>
 </section>
 <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>