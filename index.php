
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
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />

    <!-- Bootstrap CSS -->
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- adding font awesome -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Island+Moments&family=Vujahday+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Island+Moments&family=Vujahday+Script&display=swap" rel="stylesheet">
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
    <!-- Social navigation -->
    <div style="background-color: rgba(243, 243, 243, 0.89)">
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
      <!--nav-->
      <div class="header">
        <div class="logo"></div>
        <nav class="nav" id="nav-menu">
          <ion-icon
            name="close-outline"
            class="header_close"
            id="close-menu"
          ></ion-icon>
          <ul class="nav_list">
            <li class="nav_item">
              <a href="./index.php" class="nav_link">Home</a>
            </li>
            <li class="nav_item">
              <a href="./about/about.php" class="nav_link">About</a>
            </li>
            <li class="nav_item">
              <a href="./services/services.php" class="nav_link">Services</a>
            </li>
            <li class="nav_item">
              <a href="./gallery/gallery.php" class="nav_link">Gallery</a>
            </li>
            <li class="nav_item">
              <a href="contact/contact.php" class="nav_link">Contact</a>
            </li>
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
    <!--start header-->

    <section class="head">
      <div class="shedo">
        <div class="msg_col">
          <h3>We are Event Management Specialists</h3>
          <p>
            CELEBRATE YOUR EVENTS THAT LASTS LONGER
          </p>
          
          
        </div>
        <div class="info">
          <p>Wedding Functions to Birthday Parties and Corporate Events to Entertainment Programs,
             We Create Magnificent Events that Exceed the Expectations of our Customers!</p>
        </div>
        <svg
        xmlns="http://www.w3.org/2000/svg"
        class="curav"
        viewBox="0 0 1440 320"
         >
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,320L80,293.3C160,267,320,213,480,208C640,203,800,245,960,234.7C1120,224,1280,160,1360,128L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
        
         </svg>
         <div class="wp_logo">
         <a href="https://wa.me/919755531033" > <i class='fab fa-whatsapp-square' style='font-size:50px;color:green; margin-right: 90px;'></i></a>
          </div>
    </div>
    
    </section>

    <!--end header-->
  <!--start about-->
    <section class="services_part2">
      <section class="all-cards2">
       <section class="all-cards3">
         <div class="card_services">
          <div class="gouri">
              <br>
             <div class="card-contents kanu">
              <!--<img src="./img/sect_1.jpg" alt="">-->
             <img src="./favpng_glow-event-design-logo-event-management.png" alt="">
             </div>
             </div>
         </div>
        <div class="card_services">
             <div class="gouri">
                   <div class="card-titel_2">
                    <img src="./img/logo.png" alt="">
                      <br>
                      <br>
                      <h1> Glow Events </h1>
                     </div>
                    <br>
                  <div class="event-contents">
                    <p>Planning and conducting an event, especially a wedding, is a very wonderful 
                      part of life but it can also be very challenging and stressful. We,Glow  event planners, assist with the design, planning, and management of a wedding or any event so that you can relax and enjoy the 
                      special moments of your life with your dear ones.</p>
                      <br>
                      <p>The mission of Glow is to design and deliver high quality and highly innovative service,
                         based on the needs of the client, in the most cost-effective way.</p>
                         <button> <a href="./about/about.php"> --Read more </a></button>
                   </div>
                   <br>
                   <br>
                   
                  
        
     </section>
 </section>
 <div style="width: 100%; height: 10vh;"></div>
    </section>
    
  
    <!--end about-->

    <section class="counters">
      <div class="container">
        <div>
          <div class="counter" data-target="3000">0</div>
          <h3>
            Featured Events &nbsp;<i
              class="fas fa-edit"
              style="font-size: 24px"
            ></i>
          </h3>
        </div>
        <div>
          <div class="counter" data-target="700">0</div>
          <h3>
            Loyal Customers &nbsp;<i
              class="fa fa-user"
              style="font-size: 24px"
            ></i>
          </h3>
        </div>
        <div>
          <div class="counter" data-target="500">0</div>
          <h3>
            Corporate Events &nbsp;<i
              class="fas fa-coffee"
              style="font-size: 24px"
            ></i>
          </h3>
        </div>
        <div>
          <div class="counter" data-target="1000">0</div>
          <h3>
            Weddings &nbsp;<i class="fas fa-award" style="font-size: 24px"></i>
          </h3>
        </div>
      </div>
    </section>
    <div style="width: 100%; height: 10vh"></div>
    <!--mid3-->
    <section class="back_fixes">
      <div class="serices">
        <!--mid3-->
        <!--mid3-->
        <!--mid3-->
        <section class="services_part22">
          <div style="width: 100%; height: 18vh;"></div>
         <section class="all-cards2">
           <section class="all-cards3">
             <div class="card_services">
              
               <div class="gouri">
                 <div class="card-titel_2">
                   <img src="./img/logo.png" alt="">
                   <br>
                   <br>
                   <h2>Services Featured</h2>
                 </div>
                 <br>
                 <div class="contentsss">
                  <p>We make your events smart & impactful by personalised event management services.</p>
                  <p>Founded in 2001, glow is a pioneer in Ratlam's Wedding Management history. Today we deliver peerless 
                    service to our clients in Wedding Solutions, other Personal Events and
                     Corporate Events, both domestic and interstate. we are passionate to make it the most elegant and memorable experience for our clients.</p>
                </div>
                 </div>
             </div>
            <div class="card_services">
                 <div class="gouri">
                       <div class="card-titel_2">
                        <i class="fas fa-rings-wedding" style="font-size: 40px;"></i>&nbsp;&nbsp;<i class="fa fa-minus" 
                         style="font-size:36px;color:tomato; font-weight: 100;"></i>&nbsp; &nbsp; 
                        Wedding Events
                     </div>
                        <br>
                      <div class="color_pera">
                         we deliver complete wedding solutions, to make it the most 
                         unique and memorable experience for you.
                       </div>
                       <br>
                       <br>
                       <div class="card-titel_2">
                         
             <i class="fa fa-handshake-o" style="font-size:36px; color: white;"></i>&nbsp;&nbsp;<i
                           class="fa fa-minus"
                           style="font-size: 36px; color: tomato; font-weight: 100"
                         ></i
                         >&nbsp; &nbsp; Personal Events
                       </div>
                       <br />
                       <div class="color_pera">
                        Creating a wonderful event that makes everyone feel special and embeds lifelong memories may seem like a dream. 
                        Everything is possible with Glow Events!
                       </div>
                       <br />
                       <br />
                       <div class="card-titel_2">
                         <i class="fas fa-business-time" style="font-size: 36px; color: white"></i
                         >&nbsp;&nbsp;<i
                           class="fa fa-minus"
                           style="font-size: 36px; color: tomato; font-weight: 100"
                         ></i
                         >&nbsp; &nbsp; Corporate Events
                       </div>
                       <br />
                       <div class="color_pera">
                         Our expertise and resources allow us to fulfill all needs of a corporate
                         client to create a successful event experience. From a rustic dinner party to
                         a grand product launch, Glow Events delivers spot-on, brand immersive events
                         that dazzle guests and maximize the brand value.
                       </div>
                   </div>
                  
                
         </section>
     </section>
     <div style="width: 100%; height: 10vh;"></div>
        </section>
        <!--mid3-->
        <!--mid3-->
        <!--mid3-->
      </div>
    </section>
    <!--last-->
    <section class="contact">
      <section id="contact-form">
        <div class="form-container">
          <div class="form-sections">
            <!-- Form left -->
            <div class="Form-left">
              <img
                src="./gallery/images/slide1_3.jpg"
                alt=""
                style="width: 100%; height: 100%"
              />
            </div>
            <!-- form right -->
            <div class="Form-right">
              <br />
              <br />
              <img src="img/logo.png" alt="" />
              <h1 >Glow Events<b > Contact Form </b><br /></h1>
              <p>Send us a message for your personalized event booking.</p>
              <!-- form -->
              <form action="index.php" method="POST">
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

      <!--contact form end-->
    </section>
    <!--services js-->
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
              <li><a href="./index.php">Home</a></li>
              <li>
                <a href="./about/about.php">about </a>
              </li>
              <li>
                <a href="./services/services.php"> Services</a>
              </li>
              <li><a href="./gallery/gallery.php">Gallery</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Keep In Touch</h4>
            <ul>
              <li><i class="fa fa-map-marker"; style="color: tomato;" ></i>&nbsp;&nbsp;
              Glow Event's, Jaora, Ratlam.
              </li>
              <li><i class="fa fa-phone"; style="color: tomato;"></i>&nbsp;&nbsp;
                +919755531033
              </li>
              <li><i class="fa fa-envelope"; style="color: tomato;"></i>&nbsp;&nbsp;
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

    <!--nav javascript-->
    <script src="js/jsfile.js"></script>
    <script src="js/style.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <!--counter javascript-->
    <script src="./js/count.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
