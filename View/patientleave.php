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
            Patient Leave List
        </h1>
	<div class="container">
	    <div class="row">
	        <div class="col-lg-12">
	
<table border="1px" style=" width:100%; line-height: 40px; margin-bottom: 50px; text-align: center;">
	<tr><th>Patient Id</th><th>Patient Name</th><th>Bill NO</th><th>Addmission Date</th><th>Checkout Date</th><th>Patient Contact Number</th><th>Treatment Bill</th><th>Room Bill</th><th>Medicine Bill</th><th>Total Bill</th><th>Payment Status</th></tr>
	
	<?php
	
	require_once("DBconnect.php");
	$sql="SELECT* FROM patientleave LEFT JOIN patientsinfo  ON patientleave.Patientid = patientsinfo.Patientid";
	$result= mysqli_query($conn,$sql);
	
	?>
	
	<?php
		while($row=mysqli_fetch_assoc($result)){
			
	?>
	
	<tr><td><?php echo $row['Patientid']; ?></td><td><?php echo $row['Pname']; ?></td><td><?php echo $row['billno']; ?></td><td><?php echo $row['AddDate']; ?></td><td><?php echo $row['LeaveDate']; ?></td><td><?php echo $row['PhnNum']; ?></td><td><?php echo $row['Tbill']; ?></td><td><?php echo $row['Rbill']; ?></td><td><?php echo $row['Medbill']; ?></td><td><?php echo $row['Total']; ?></td><td><?php echo $row['Status']; ?></td></tr>
	
	
	<?php
	}
	?>
</table>
<br/>
<br/>
<a href="add_patientleave.php">Add Patient Checkout Info </a>

<a href="update_patientleave.php">Update Patient Checkout</a>

<a href="delete_patient.php">Delete Patient records </a>

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