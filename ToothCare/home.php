<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/home.css">
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
  <section class="header">

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

        <div class="text">
            <h1>Take Care of Your Teeth</h1>
            <p>Discover tips for a healthy smile with just a few clicks.<br> 
             We provide valuable information on dental care from around the world. Choose your tips and enjoy a brighter smile. </p>
        </div>

    </section>
   <hr>

        <!--------------------------------------------------------------->
        <!----------------Docter and Prize Section------------------------>   

        </section>

<section class="newrecipe">

    <h2 class="text_2" style="text-align: center;"><b> Docter And His Charge, Time And Date </b></h2>
    <div class="recipe">
        <div class="recitem">
            <!--------->
            <img src="imge/doc1.jpg">
            <h3>Dr. A.B.Nuwan</h3>

            <div class="itemdec">
                <ul>
                    <li>Chanal Fee : Rs: 1500.00</li>
                    <li>Experience : 7 year</li>
                    <li>Time : 6.00PM-9.00PM</li>
                    
                </ul>

                <ul>
                    <li>Date : Monday,</br> Wednesday</li>
                    <li>Level : easy</li>
                    
                    
                </ul>
                
            </div>
            <!--------->
        </div>


       
<!----------- Information ------------------->

        <div class="recitem">
            <!--------->
            
           

        <div class="clinic-notice" style="text-align: center; color: white;">
        <h2>Welcome to Tooth Care Clinic</h2></br>
        <p>Located in Nugegoda, we are a small-scale, private clinic dedicated to providing dental services to out-patients who may not have access to government hospital facilities.</p>
        <p>Our team of dental surgeons is here to assist you. Please find our available channeling dates and times below:</p>
        </br>
        
        <div style="margin: 0 auto; width: 50%;">
    <table style="width: 100%;">
        <tr>
            <th>Day</th>
            <th>Time</th>
            <th>Docter</th>
        </tr>
        <tr>
            <td>Monday</td>
            <td>06.00 PM - 09.00 PM</td>
            <td>Dr A.B.Nuwan</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td>06.00 PM - 09.00 PM</td>
            <td>Dr A.B.Nuwan</td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td>03.00 PM - 10.00 PM</td>
            <td>Dr J.K.Kumari</td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td>03.00 PM - 10.00 PM</td>
            <td>Dr J.K.Kumari</td>
        </tr>
    </table>
</div>

    </div>
            <!--------->

        </div>

       <div class="recitem">
            <!--------->
            <img src="imge/doc4.png">
            <h3>Dr. J.K.Kumari</h3>

            <div class="itemdec">
                <ul>
                    
                    <li>Chanal Fee : Rs: 2000.00</li>
                    <li>Experience : 10 year</li>
                    <li>Time : 3.00PM-10.00PM</li>
                </ul>

                <ul>
                    <li>Date : Saturday,</br> Sunday </li>
                    <li>Level : easy</li>
                    
                </ul>
                
            </div>
            <!--------->

        </div>

       
    </div>
      
        
      

</section>
<hr>
    <!------------------------------------------------------>
    <!----------------Treatment Type Section------------------------>
    <section class="newrecipe">

        <h2 class="text_2" style="text-align: center;"><b> Treatment Types</b> </h2>
        <div class="recipe">
            <div class="recitem">
                <!--------->
                <img src="imge/1.jpg">
                <h3>Cleanings</h3>

                <div class="itemdec">
                    <ul>
                        <li>time taken : 30min</li>
                        <li>fee : Rs:1000</li>
                        <li>Level : easy</li>
                    </ul>

                    <ul>
                        <li>Serves : Good</li>
                        <li>Level : easy</li>
                        
                    </ul>
                    
                </div>
                <!--------->
            </div>


            <div class="recitem">
                <!--------->
                <img src="imge/2.jpg">
                <h3>Whitening</h3>

                <div class="itemdec">
                    <ul>
                        <li>time taken : 30min</li>
                        <li>fee : Rs:2000</li>
                        <li>Level : easy</li>
                    </ul>

                    <ul>
                        <li>Serves : Good</li>
                        <li>Level : easy</li>
                        
                    </ul>
                    
                </div>
                <!--------->

            </div>


            <div class="recitem">
                <!--------->
                <img src="imge/3.jpg">
                <h3>Filling</h3>

                <div class="itemdec">
                    <ul>
                        <li>time taken : 60min</li>
                        <li>fee : Rs:3000</li>
                        <li>Level : easy</li>
                    </ul>

                    <ul>
                        <li>Serves : Good</li>
                        <li>Level : easy</li>
                        
                    </ul>
                    
                </div>
                <!--------->

            </div>

           <div class="recitem">
                <!--------->
                <img src="imge/4.jpg">
                <h3>Nerve Filling</h3>

                <div class="itemdec">
                    <ul>
                        <li>time taken : 45min</li>
                        <li>fee : Rs:4000</li>
                        <li>Level : easy</li>
                    </ul>

                    <ul>
                        <li>Serves : Good</li>
                        <li>Level : easy</li>
                        
                    </ul>
                    
                </div>
                <!--------->

            </div>

            <div class="recitem">
                <!--------->
                <img src="imge/5.jpg">
                <h3>Root Canal Therapy</h3>

                <div class="itemdec">
                    <ul>
                        <li>time taken : 40min</li>
                        <li>fee : Rs:5000</li>
                        <li>Level : easy</li>
                    </ul>

                    <ul>
                        <li>Serves : Good</li>
                        <li>Level : easy</li>
                        
                    </ul>
                    
                </div>
                <!--------->

            </div>

           
        </div>
          
            
    <!------------------------------------------------------>
    <!----------------Footer Section------------------------>
    <section>
    <hr>
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