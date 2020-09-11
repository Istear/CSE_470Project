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
            Add Doctor
        </h1>
            <div class="container">
             <div class="row">
             
             <div class="col-lg-6">
                <div class="contact-img">
                 <img src="img/doctor-icon_23-2147504929.jpg"alt="contact">
                 </div>
             </div>
              <div class="col-lg-6">
                <div class="form">
                    <form method="POST" action="insert_doctor.php">
                       <div>
                        <input type="text" id="Dname" name="Dname" required>
                        <label>Doctor Name</label>
                        </div>
                        <div>
                        <input type="text" id="Specialist" name="Specialist" required>
                        <label>Specialist At</label>
                        </div>
                        <button type="submit">Submit</button>
                        
                        <a style="margin-top: 20px; " href="doctor.php">Back</a>
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