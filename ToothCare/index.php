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

  <br /><br /><br /><br />

  <!-- View Appointments Section -->
  <div class="text-center mb-4">
    <h3>View Appointments </h3>
    <p class="text-muted">This is information of patient appointments details</p>
  </div>
</br></br>
  <div class="container mt-4">
    <!-- Search Bar and Date Filter Form -->
    <div class="container mt-4">
  <!-- Date Filter Form -->
  <form class="form-inline" method="GET">
    <div class="input-group">
      <label for="filterDate" class="mr-2">Filter by Date:</label>
      <input type="date" class="form-control" id="filterDate" name="filterDate" value="<?php echo isset($_GET['filterDate']) ? $_GET['filterDate'] : ''; ?>">
      <button type="submit" class="btn btn-primary ml-2">Filter</button>
    </div>
  </form>
</div></br></br>

    <div class="mb-3">
    <div class="input-group ml-2">
      
      <form class="form-inline d-flex align-items-center" method="GET">
     
      <div class="form-group">
    <label for="search" class="sr-only">Search by Name or ID</label>
    <input type="text" class="form-control" id="search" name="search" placeholder="Search by Name or ID" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
</div>
<button type="submit" class="btn btn-primary">Search</button>


        
      </form>
    </div>
  </div>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <!-- Appointments Table -->
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">Phone</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
          $search = isset($_GET["search"]) ? $_GET["search"] : '';
          $filterDate = isset($_GET["filterDate"]) ? $_GET["filterDate"] : '';

          if (!empty($filterDate)) {
            $sql = "SELECT * FROM patient WHERE date = '$filterDate'";
          } elseif (!empty($search)) {
            $sql = "SELECT * FROM patient WHERE name LIKE '%$search%' OR id = '$search'";
          } else {
            $sql = "SELECT * FROM patient";
          }
        }

        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><?php echo $row["date"] ?></td>
            <td><?php echo $row["time"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
              <a href="bill.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa fa-credit-card-alt"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <br /><br />

  <!------------------------------------------------------>
    <!----------------Footer Section------------------------>
    <section>
    <hr>
    <div class="footer" style="padding: 0px;">
    <div class="footerItem" style="margin-bottom: 20px;">
        <a><img class="QR" src="imge/QR.png"></a>
    </div>

    <div class="footerItem" style="margin-bottom: 20px;">
        <h3>ABOUT US</h3>
        <p>ToothCare is a Sri Lankan website that provides various services around the area. You can get convenient and efficient service from us</p>
        <i class="fa-brands fa-google-play fa-2x"></i>
        <i class="fa-brands fa-app-store fa-2x"></i>
    </div>

    <div class="footerItem" style="margin-bottom: 20px;">
        <h3>CONTACT US</h3>
        <p>Tel: +94112666978<br>Fax: 94112666978<br>E-mail: info@ToothCare.net</p>
    </div>

    <div class="footerItem" style="margin-bottom: 20px;">
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

        
