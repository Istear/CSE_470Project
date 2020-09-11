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
            Add Patient
        </h1>
            <div class="container">
             <div class="row">
             
             <div class="col-lg-6">
                <div class="contact-img">
                 <img src="img/flat-nurse-with-patient_23-2148160524.jpg"alt="contact">
                 </div>
             </div>
              <div class="col-lg-6">
                <div class="form">
                    <form method="POST" action="insert_patient.php">
                       <div>
                        <input type="text" id="RoomNo" name="Pname" required>
                        <label>Patient Name:</label>
                        </div>
                        <div>
                        <input type="text" id="Specialist" name="Did" required>
                        <label>Doctor ID:</label>
                        </div>
                        <div>
                        <input type="date" id="Specialist" name="AddDate" required>
                        <label>Addmission Date:</label>
                        </div>
                        <div>
                        <input type="text" id="Specialist" name="PhnNum" required>
                        <label>Contact Number:</label>
                        </div>
                        <div>
                        <input type="text" id="Specialist" name="RoomNo" required>
                        <label>Room No:</label>
                        </div>
                        <button type="submit">Submit</button>
                        
                        <a style="margin-top: 20px; " href="patient.php">Back</a>
                    </form>
                    
                </div>  
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