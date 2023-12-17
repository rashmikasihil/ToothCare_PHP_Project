<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  $sql = "UPDATE patient SET `name`='$name', `address`='$address', `phone`='$phone', `date`='$date', `time`='$time' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=Record updated successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}
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
  <!------------------------------------------------------>
    <!----------------Header Section------------------------>
    

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
            <li><a href="../../IT21205774-herath h.m.y.m/php/contactus.php">CONTACT</a></li>
            <li><a href="#">ABOUT</a></li>
    </ul>
</div>

<div class="profile">
                    <a href="imge.icon.png"><i class="fa-solid fa-circle-user fa-4x"></i></a>
                </div>

</div>

</br></br></br></br>



<!----------------------------------->

  <div class="container">
    <div class="text-center mb-4">
      <h3>Update Appointments</h3>
      <p class="text-muted">Click update after changing appointment information</p>
    </div>

    <?php
    $sql = "SELECT * FROM patient WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        
          <div class="col">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Address :</label>
            <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Phone:</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>">
          </div>
        

        <div class="col">
            <label class="form-label">Date:</label>
            <input type="date" class="form-control" name="date" value="<?php echo $row['date'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Time:</label>
            <input type="time" class="form-control" name="time" value="<?php echo $row['time'] ?>">
          </div>
        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</br>
<hr>

  <!------------------------------------------------------>
    <!----------------Footer Section------------------------>
    <section>
    
    <div class="footer">
        <div class="footerItem">
            <a ><img class="QR" src="imge/QR.png"></a>
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

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>