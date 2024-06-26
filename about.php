<?php
session_start();
error_reporting(0);
?>
<!doctype html>
<html lang="en">
<head>
      <title>Travelogue</title>
   </head>
<?php include 'include/header.php'; ?>
<body>
   <div id="page" class="page">
      <!-- ***site header html start*** -->
      <?php include 'include/navbar.php'; ?>
      <!-- ***site header html end*** -->
      <main id="content" class="site-main">
         <section class="inner-page-wrap">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(https://imgs.search.brave.com/aT7-rvYMfB3oPHWppRUkTarkrTIWthCjbD9KpOu_pnw/rs:fit:860:0:0/g:ce/aHR0cHM6Ly90aGVw/bGFuZXRkLmNvbS9p/bWFnZXMvUGxhY2Vz/LXRvLVZpc2l0LWlu/LVN3aXR6ZXJsYW5k/LUx1Z2Fuby1UaWNp/bm8tMTQyM3gxMDY3/LmpwZw);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">About Us</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***about section html start form here*** -->
            <div class="inner-about-wrap">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8">
                        <div class="about-content">
                           <figure class="about-image">
                              <img src="assets/images/IIIT.jpg" alt="">
                              <!-- <div class="about-image-content">
                                  <h3>WE ARE BEST FOR TOURS & TRAVEL SINCE 1985 !</h3>
                              </div> -->
                           </figure>
                           <h2>WHO ARE WE ?</h2>
                           <p>Welcome to Travelogue – your gateway to unforgettable adventures and seamless travel experiences! Founded by a dynamic team of students from the prestigious Indian Institute of Information Technology, Allahabad, Travelogue embodies our passion for exploration and our commitment to revolutionizing the way you journey through the world.</p>

                           <p>Meet the brains behind Travelogue: </p>
                           <p>Harsh Shah: The visionary leader with an insatiable wanderlust, Harsh brings his expertise in design and innovation to craft an intuitive platform that caters to all your travel needs.</p>
                           <p>Aryan Singh: A tech enthusiast with a keen eye for detail, Aryan ensures that Travelogue stays at the forefront of technological advancements, guaranteeing a smooth and efficient booking process for our users.</p>
                           <p>Pratik Sarvaiya: A strategic thinker and marketing maestro, Pratik spearheads our efforts to connect with travelers worldwide, sharing our passion and vision with the global community.</p>
                           <p>Maharshi Bhesania: The adventurer at heart, Maharshi curates unique and off-the-beaten-path experiences, allowing you to immerse yourself in the rich tapestry of cultures and landscapes across the globe.</p>
                           <p>Shikhar Sharma: With a knack for customer satisfaction, Shikhar is dedicated to providing personalized support and guidance, ensuring that your journey with Travelogue is nothing short of extraordinary.</p>
                           <p>Priyank Paladiya: The financial whiz-kid behind Travelogue, Priyank ensures that our operations run seamlessly, allowing us to focus on what truly matters creating unforgettable memories for our travelers.</p>
                           <p>At Travelogue, we believe that every journey tells a story, and we are here to help you write yours. Whether you're seeking a tranquil beach retreat, an adrenaline-fueled adventure, or a cultural odyssey, let Travelogue be your trusted companion every step of the way.

</p>
                        </div>
                        <!-- <div class="client-slider white-bg">
                           <figure class="client-item">
                              <img src="assets/images/client-img7.png" alt="">
                           </figure>
                           <figure class="client-item">
                              <img src="assets/images/client-img8.png" alt="">
                           </figure>
                           <figure class="client-item">
                              <img src="assets/images/client-img9.png" alt="">
                           </figure>
                           <figure class="client-item">
                              <img src="assets/images/client-img10.png" alt="">
                           </figure>
                           <figure class="client-item">
                              <img src="assets/images/client-img11.png" alt="">
                           </figure>
                        </div> -->
                     </div>
                     <div class="col-lg-4">
                        <div class="icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-umbrella-beach"></i>
                           </div>
                           <div class="icon-box-content">
                             <h3>EXOTIC DESTINATIONS</h3>
                              <p>Escape to the extraordinary! Explore our handpicked selection of exotic destinations, each brimming with vibrant cultures, stunning landscapes, and unforgettable experiences.</p>
                           </div>
                        </div>
                        <div class="icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-user-tag"></i>
                           </div>
                           <div class="icon-box-content">
                           <h3>AFFORDABLE TOURS</h3>
                              <p>While it's important to be open to new experiences, it's also important to plan ahead to ensure that your trip goes smoothly.</p>
                              
                        </div>
                        <div class="icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-headset"></i>
                           </div>
                           <div class="icon-box-content">
                              <h3>CUSTOMER SUPPORT</h3>
                              <p>We provide customer services from 9:00 AM to 7:30 PM</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***about section html start form here*** -->
            <!-- ***callback section html start form here*** -->
            <!-- <div class="bg-img-fullcallback" style="background-image: url(assets/images/img7.jpg);">
               <div class="overlay"></div>
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="callback-content">
                           <div class="video-button">
                              <a id="video-container" data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=2OYar8OHEOU">
                                 <i class="fas fa-play"></i>
                              </a>
                           </div>
                           <h2 class="section-title">ARE YOU READY TO TRAVEL? REMEMBER US !!</h2>
                           <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods, learn new customs, and see things you've never seen before.</p>
                           <div class="callback-btn">
                              <a href="package.php" class="round-btn">View Packages</a>
                              <a href="about.php" class="outline-btn outline-btn-white">Learn More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- ***callback section html end here*** -->
         </section>
      </main>
      <!-- ***custom search field html*** -->
      <?php include 'include/custom_search.php'; ?>
      <!-- ***custom search field html*** -->
   </div>

   <!-- JavaScript -->
   <?php
   include 'include/javascript.php';
   ?>
</body>

</html>