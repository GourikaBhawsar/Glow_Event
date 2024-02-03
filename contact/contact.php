
<?php
    if(isset($_POST['name'])){
       $server = "localhost";
       $user = "root";
       $password = "";
       $db = "glow_event";

    $con = mysqli_connect($server,$user,$password,$db);
    if(!$con){
        die("connection to this database failed due to ".mysqli_connect_error());
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $Edate  = $_POST['Edate'];
    $us = $_POST['us'];
    $other  = $_POST['other'];
    $sql = "INSERT INTO `glow_event`.`glow_event` (`name`, `email`, `phone`,`event`, `Edate`, `us`, `other`) VALUES
   ( '$name', '$email', '$phone', ' $event ', '$Edate','$us','$other');"; 
    if($con->query($sql) == true){ 
        echo"<script>alert('Thankyou :)')</script>";
  }
   else {
   echo "ERROR: $sql <br> $con->error";
    }
 $con->close();
   }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css" />
     <!-- Bootstrap CSS -->
     <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
     crossorigin="anonymous"
   />
    <!-- adding font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
  </head>
  <body>
    <div style="background-color: rgba(243, 243, 243, 0.89)">
    <!-- Social navigation -->
    <div class="Social_nav">
      <!-- social media icons -->
      <div class="icon">
        <ul>
          <li>
            <a href=""><i class="fab fa-instagram c"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-facebook-f c"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-twitter c"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-linkedin-in c"></i></a>
          </li>
        </ul>
      </div>
      <ul>
        <li>
          <a href="">
            <i class="fa fa-phone"></i>
            (+91)9755531033</a
          >
        </li>
        <li>
          <a href="#">
            <i class="fa fa-envelope"></i>
            Glow@gmail.com</a
          >
        </li>
        <li>
          <a href="#">
            <i class="far fa-clock"></i>
            Mon - Sun 9.00 am - 6.00pm</a
          >
        </li>
      </ul>
    </div>
    <!--main navigation-->
    
      <div class="header">
        <div class="logo"></div>
        <nav class="nav" id="nav-menu">
          <ion-icon
            name="close-outline"
            class="header_close"
            id="close-menu"
          ></ion-icon>
          <ul class="nav_list">
            <li class="nav_item"><a href="../index.php" class="nav_link">Home</a></li>
            <li class="nav_item"><a href="../about/about.php" class="nav_link">About</a></li>
            <li class="nav_item"><a href="../gallery/gallery.php" class="nav_link">Services</a></li>
            <li class="nav_item"><a href="../gallery/gallery.php" class="nav_link">Gallery</a></li>
            <li class="nav_item"><a href="../contact/contact.php" class="nav_link">Contact</a></li>
          </ul>
        </nav>
        <ion-icon
          name="menu-outline"
          class="header_toggle"
          id="toggle-menu"
        ></ion-icon>
      </div>
    </div>
    <!---->
    </div>
  </div>
     <!--Header-->
   
      <section class="head">
      <h1>Contact Us</h1>
      <p><a href="../index.php">Home </a> / Get in Touch</p>
      <div class="wp_logo">
       <a href="https://wa.me/919755531033" > <i class='fab fa-whatsapp-square' style='font-size:50px;color:green; margin-right: 90px;'></i></a>
      </div>
      </section>
    <div style="width: 100%; height: 10vh;"></div>
    <div class="Mline">
      <img src="../img/logo.png" alt="">
      <p>Contact us and we will be happy to make your events memorable!</p>
      </div>
   </div>
    <!--contact-form-->
    <section id="contact-form">
      <div class="form-container">
        <div class="form-sections">
          <!-- Form left -->
          <div class="Form-left">
            <br />
            <br />
            <h1>
              <i class="fa fa-map-marker" style="font-size: 24px" ></i>Address
            </h1>
            <span>Glow Event's, Jaora, Ratlam.</span>
            <hr style="width: 40%; color: tomato; height: 1px;"  />
            <br />
            <h1><i class="fa fa-envelope" style="font-size: 24px"></i>Email</h1>
            <span>Glow@gmail.com</span>
            <hr style="width: 50%; color: tomato; height: 1px;"  />
            <br />
            <h1>
              <i class="fa fa-phone" style="font-size: 24px"></i>Phone No.
            </h1>
            <span>(+91)9755531033</span>
            <hr style="width: 60%; color: tomato; height: 1px;" />
            <br /><br />
            <!-- social media icons -->
            <i class="fa fa-instagram" style="font-size:36px; color: rgb(255, 189, 200);"></i>
            
          </div>
          <!-- form right -->
          <div class="Form-right">
            <h1>Contact Us</h1>
            <div class="line"></div>
            <!-- form -->
            <form action="contact.php" method="POST">
              <div class="gling">
                <input type="text" placeholder="Name" name="name" required/>
                <input type="text" placeholder="Email" name="email" required/>
              </div>
              <div class="gling">
                <input type="text" placeholder="Phone Number" name="phone" required/>
                <h2>Event Type*</h2>
                <select required name="event">
                            <option value="Wedding ">Wedding</option>
                            <option value="Corporate Event">Corporate Event</option>
                            <option value="Personal Event">Personal Event</option>
                </select>
                <input type="date" placeholder="Event Date" name="Edate" required/>
                <input
                  type="text"
                  placeholder="Where do you heard about us?"
                  name="us"
                  required
                />
                <textarea
                  name="other"
                  cols="50"
                  rows="7"
                  placeholder="Your Message..."
                  required
                ></textarea
                ><br />
                <button>Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    
    </section>
    <!--footer start-->
    <div style="width: 100%; height: 10vh; background-color: rgba(243, 243, 243, 0.89);"></div>
    <footer class="footer">
     <div class="logo-footer">
       <div></div>
     </div>
     <div class="container_sp">
       <div class="rows">
         <div class="footer-col">
           <h4>Quick Links</h4>
           <ul>
             <li><a href="../index.php">Home</a></li>
             <li>
               <a href="../about/about.php">about </a>
             </li>
             <li>
               <a href="../services/services.php"> Services</a>
             </li>
             <li><a href="../gallery/gallery.php">Gallery</a></li>
           </ul>
         </div>
         <div class="footer-col">
           <h4>Keep In Touch</h4>
           <ul>
             <li><i class="fa fa-map-marker"; style="color: tomato;" ></i>&nbsp;&nbsp;
             Glow Event's, Jaora, Ratlam.
             </li>
             <li><i class="fa fa-phone"; style="color: tomato;"></i>
               +919755531033
             </li>
             <li><i class="fa fa-envelope"; style="color: tomato;"></i>
               Glow@gmail.com
             </li>
             <li><i class="far fa-clock"; style="color: tomato;"></i>&nbsp;&nbsp;
               Mon - Sat 9.00 am - 6.00 pm
             </li>
             
         </div>
         
         <div class="footer-col">
           <h3>follow us on</h3>
           <div class="social-links">
             <a href="#"><i class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-linkedin-in"></i></a>
           </div>
         </div>
       </div>
       
     </div>
     <p class="copyright">
       &copy; 2021 <a href="#" class="aw_link">GlowEvent.com </a> all
       rights reserved.
     </p>
   </footer>
   <!--footer end-->
    <!--contact form end-->
    <!---->
    <script src="style.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
