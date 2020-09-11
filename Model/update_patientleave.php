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
           Update Patient Checkout Info
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
                    <form method="POST" action="up_patientleave.php">
                       <div>
                        <input type="text" id="NurseID" name="billno" required>
                        <label>Patient Bill No To Update:</label>
                        </div>
                        <div>
                        <input type="text" id="NurseName" name="Patientid" >
                        <label>Patient ID:</label>
                        </div>
                        <div>
                        <input type="date" id="NurseCon" name="LeaveDate" >
                        <label>Checkout Date:</label>
                        </div>
                        <div>
                        <input type="text" id="NurseCon" name="Tbill" >
                        <label>Treatment Bill:</label>
                        </div>
                        <div>
                        <input type="text" id="NurseCon" name="Rbill" >
                        <label>Room Bill:</label>
                        </div>
                        <div>
                        <input type="text" id="NurseCon" name="Medbill">
                        <label>Medicine Bill:</label>
                        </div>
                        <div>
                        <input type="text" id="NurseCon" name="Total" >
                        <label>Total Bill:</label>
                        </div>
                        <p>Note: Update total bill if any of the bill is updated.</p>
                        <div>
                        <input class="ra" type="radio" name="Status" value="Paid" > Paid <input class="ra" type="radio" name="Status" value="Unpaid" > Unpaid<br>
                        <label>Payment Status:</label>
                        </div>
                        <button type="submit">Submit</button>
                        
                        <a style="margin-top: 20px; " href="patientleave.php">Back</a>
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