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
            Doctor List
        </h1>
	<div class="container">
	    <div class="row">
	        <div class="offset-lg-2 col-lg-8">
	
<table border="1px" style=" width:100%; line-height: 40px; margin-bottom: 50px; text-align: center;">
	<tr><th>Doctor ID</th><th>Doctor Name</th><th>Specialist At</th></tr>
	
	<?php
	
	require_once("DBconnect.php");
	$sql="SELECT* from doctor";
	$result= mysqli_query($conn,$sql);
	
	?>
	
	<?php
		while($row=mysqli_fetch_assoc($result)){
			
	?>
	
	<tr><td><?php echo $row['Did']; ?></td><td><?php echo $row['Dname']; ?></td><td><?php echo $row['Specialist']; ?></td></tr>
	
	
	<?php
	}
	?>
</table>
<a href="add_doctor.php">Add Doctor </a>
<a href="del_doctor.php">Delete Doctor</a>
<a href="update_doctor.php">Update Doctor</a>
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