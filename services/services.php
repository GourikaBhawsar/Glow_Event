
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
    <title>Document</title>
    <link rel="stylesheet" href="services.css" />
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
                          (+91)9755531033
                        </a>
                  </li>
                   <li>
                        <a href="#">
                         <i class="fa fa-envelope"></i>
                          Glow@gmail.com
                        </a>
                  </li>
                   <li>
                        <a href="#">
                          <i class="far fa-clock"></i>
                          Mon - Sun 9.00 am - 6.00pm
                      </a>
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
                <li class="nav_item"><a href="./services.php" class="nav_link">Services</a></li>
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
     <header class="services_backgroung">
         <div class="heading_top">
             <h1>What We Do</h1>
             <div class="wp_logo">
              <a href="https://wa.me/919755531033" > <i class='fab fa-whatsapp-square' style='font-size:50px;color:green; margin-right: 90px;'></i></a>
             </div>
         </div>
         
         <div style="width: 100%; height: 5vh; background-color: white;"></div>
          <div class="Mline">
            <img src="../img/logo.png" alt="" style="padding-bottom: 40px;">
            <h1 >The </h1><h1 style="color: tomato;">Event Management </h1><h1> Specialists</h1>
          </div>
          <div class="pera_head">
            <div class="pera_head1">
              <p>From Wedding Functions to Birthday Parties, Corporate Events to Personal Events, 
                We offer full range of Events Management Services that scale to your needs & budget.</p>
            </div>
          </div>
          
            </div>
          </div>
       </div>
       <!---->
       <section class="all-cards">
        <section class="all-cards1">
          <div class="card ">
            
            <div class="gouri">
              <div class="card-titel"><i class="fa fa-smile-o" style="font-size:36px; color:red"></i>&nbsp;&nbsp; Wedding</div>
              <div class="card-content">Planning your wedding can take many long months of arduous preparation. 
                We can make that job easier by assisting you with 
                every detail of your reception.</div>
              
            </div>
          </div>
          <div class="card ">
            
            <div class="gouri">
              <div class="card-titel"><i class='fas fa-business-time' style='font-size:36px;color:red'></i>&nbsp;&nbsp; Corporate Events</div>
              <div class="card-content">
                Our expertise and resources allow us to fulfill all needs of a
                 corporate client to create successful event experience. 
                From a rustic dinner party to a grand product launch
              </div>
              
            </div>
          </div>
          <div class="card  " >
             <div class="gouri">
              <div class="card-titel"> <i class="fa fa-gift" style="font-size:36px;color:red"></i>&nbsp; Stage and Floral Arrangements</div>
              <div class="card-content">
                we deliver complete wedding solutions, 
                to make it the most unique and memorable experience for you.
              </div>
              
            </div>
          </div>
          <div class="card ">
            
            <div class="gouri">
              <div class="card-titel"> <i class="fa fa-magic" style="font-size:48px;color:red"></i>&nbsp; &nbsp;Catering</div>
              <div class="card-content">
                you can have peace of mind knowing that we will be by your side making sure
               all the details are handled beautifully.
              </div>
              
            </div>
          </div>
          <div class="card ">
            
            <div class="gouri">
              <div class="card-titel">
                <i class='fas fa-glasses' style='font-size:48px;color:red'></i>&nbsp; &nbsp;
                Theme Parties
              </div>
              <div class="card-content">
                Your corporate event goes from its initial concept to exceeding 
                your wildest expectations because of our 
                meticulous attention to every detail.
              </div>
              
            </div>
          </div>
          <div class="card ">
            <div class="gouri">
              <div class="card-titel"><i class="fa fa-diamond" style="font-size:48px;color:red"></i>&nbsp;Personal Events</div>
              <div class="card-content">
                We at Glow, treat every special moment in our client’s life as more 
                important than anything else and detail it with utmost passion.
              </div>
              </div>
          </div>
          </section>
      </section>
       <!---->
       <div class="thaugh">
        <div> <h3><i class="fa fa-minus" style="font-size:36px;color:red; font-weight: 100;"></i> &nbsp;With a full range of Event Planning Services, 
          our Clients have Successful & Prosperous Events!</h3>
        </div>

          <p>We make your events smart & impactful by personalised event management services.</p>
       </div>
       <section class="services_part2">
         <div style="width: 100%; height: 18vh;"></div>
        <section class="all-cards2">
          <section class="all-cards3">
            <div class="card_services">
            
              <div class="gouri">
                <div class="card-titel_2">
                  <img src="../img/logo.png" alt="">
                  <br>
                  <br>
                  <h2>Services Featured</h2>
                </div>
                <br>
                <div class="card-contents">
                  <p>We make your events smart & impactful by personalised event management services.</p>
                  <p>Founded in 2001, Glow is a pioneer in Ratlam’s Wedding Management history.
                     Today we deliver peerless service to our clients in Wedding Solutions, 
                     other Personal Events and Corporate Events, both domestic and interstate.
                     we are passionate to make it the most elegant and memorable experience for our clients.</p>
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
                     <div class="event-contents">
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
                      <div class="event-contents">
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
                      <div class="event-contents">
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
       
     </header>
     <section class="all-cards4">
      <section class="all-cards5">
        
        <div class="card_services">
        <div class="gouri">
            
            <br>
            <div class="card-contentss">
              <img src="./bg/06/2-4.jpg" style="width: 100%; height: 100%; display: flex; flex-wrap: wrap;">
              
            </div>
            </div>
        </div>
        <div class="card_services">
          <div class="gouri">
              <div class="card-titel_3">
                <div style="width: 100%; height: 20vh;"></div>
                <img src="../img/logo.png" alt="">
                <br>
                <br>
                <h2>Glow Event&nbsp;<i
                  class="fa fa-minus"
                  style="font-size: 36px; color: red; font-weight: 100"
                ></i
                >&nbsp;&nbsp; Events That Lasts</h2>
              </div>
              <br>
              <div class="card-contentss">
                <h3>You should choose Glow Services because we bring your guests closer 
                  to you & helps you to create a relationship that lasts long!</h3>
                  <br> 
                <p>From a rustic dinner party to a grand product launch, Glow Events delivers spot-on,
                   brand immersive events that dazzle guests and maximize the brand value. Your corporate event 
                   goes from its initial concept 
                  to exceeding your wildest expectations because of our meticulous 
                  attention to every detail.</p>
                
              </div>
              </div>
          </div>
        </section>
        <br>
        <br>
        <section class="contact">
          <section id="contact-form">
            <div class="form-container">
              <div class="form-sections">
                <!-- Form left -->
                <div class="Form-left">
                  <img src="./bg/06/1-4.jpg" alt="" style="width: 100%; height: 100%;">
                  
                </div>
                <!-- form right -->
                <div class="Form-right">
                  <br>
                  <br>
                  <img src="../img/logo.png" alt="">
                  <h1>Glow Events<b style=" font-family: Vujahday Script, cursive;"> Contact Form </b><br></h1> 
                   <p>Send us a message for your personalized event booking.</p>
                  <!-- form -->
                  <form action="services.php" method="POST">
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
             <a href="./services.php"> Services</a>
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
