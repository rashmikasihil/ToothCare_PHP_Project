<?php
include "db_conn.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="css/page.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Tooth Care</title>
</head>

<body>
   <!-- Header Section -->
   <div class="navbar">
      <div class="logo">
         <img src="imge/logoo.png">
      </div>

      <div class="navlinks">
         <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="add-new.php">Add Appointments</a></li>
            <li><a href="index.php">View Appointments</a></li>
            <li><a href="bill.php">Total Bill</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">ABOUT</a></li>
         </ul>
      </div>

      <div class="profile">
                    <a href="imge.icon.png"><i class="fa-solid fa-circle-user fa-4x"></i></a>
                </div>
   </div>
</br></br>

   <!-- Form Section -->
<div class="container">
   <div class="text-center mb-4">
      <h3>Patient Total Bill </h3>
      <p class="text-muted">Select your choices: doctor and treatment, and get the total bill</p>
   </div>

   <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">

         <div class="mb-3">
            <label class="form-label">Select Doctor:</label>
            <select class="form-select" name="doctor">
               <option value="doctor1">Dr. A.B.Nuwan</option>
               <option value="doctor2">Dr. J.K.Kumari</option>
            </select>
         </div>

         <div class="mb-3">
            <label class="form-label">Select Treatment:</label>
            <select class="form-select" name="treatment">
               <option value="cleanings">Cleanings</option>
               <option value="whitening">Whitening</option>
               <option value="filling">Filling</option>
               <option value="nerve_filling">Nerve Filling</option>
               <option value="root_canal_therapy">Root Canal Therapy</option>
            </select>
         </div>

         <div>
            <button type="submit" class="btn btn-success" name="submit">Save</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
         </div>
      </form>
   </div>

   <?php
   if (isset($_POST["submit"])) {
      $doctor = $_POST['doctor'];
      $treatment = $_POST['treatment'];
      $reg_fee = 1000; // Registration fee is Rs 1000

      // Assign appropriate prices for treatments
      $treatment_prices = [
         'cleanings' => 1000,
         'whitening' => 2000,
         'filling' => 3000,
         'nerve_filling' => 4000,
         'root_canal_therapy' => 5000,
      ];

      // Assign doctor prices
      $doctor_prices = [
         'doctor1' => 1500,
         'doctor2' => 2000,
         
      ];

      // Calculate total bill
      $total_bill = $doctor_prices[$doctor] + $treatment_prices[$treatment] + $reg_fee;
   ?>

      <div class="text-center mt-4">
         <h4>Total Bill: Rs: <?php echo $total_bill; ?>.00</h4>

         <!-- Add a link to download the bill slip -->
         <a href="download_bill.php?doctor=<?php echo $doctor; ?>&treatment=<?php echo $treatment; ?>&reg_fee=<?php echo $reg_fee; ?>&total_bill=<?php echo $total_bill; ?>" class="btn btn-primary">Download Bill Slip</a>
      </div>

   <?php
   }
   ?>
</div>
<br><br><br><br><br><br>

   <hr>

   <!-- Footer Section -->
   <section>
      <div class="footer">
         <div class="footerItem">
            <a><img class="QR" src="imge/QR.png"></a>
         </div>

         <div class="footerItem">
            <h3>ABOUT US</h3>
            <p>ToothCare is a Sri lankan website that provide various services arround the area.You can get convenient and efficient service from us</p>
            <i class="fa-brands fa-google-play fa-2x"></i>
            <i class="fa-brands fa-app-store fa-2x"></i>
         </div>

         <div class="footerItem">
            <h3>CONTACT US</h3>
            <p>Tel : +94112666978<br>Fax : 94112666978<br>E-mail : info@ToothCare.net</p>
         </div>

         <div class="footerItem">
            <h3>FOLLOW US</h3>
            <div class="f_icon">
               <i class="fa-brands fa-facebook-f fa-2x"></i>
               <i class="fa-brands fa-instagram fa-2x"></i>
               <i class="fa-brands fa-twitter fa-2x"></i>
               <i class="fa-brands fa-google-plus-g fa-2x"></i>
            </div>
         </div>

         <div class="footerItem">
            <img class="f_logo" src="imge/logo.png" alt="Logo">
         </div>
      </div>
   </section>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>

