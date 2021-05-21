<?php
     include_once 'header.php';
 ?>
<head>
  <!-- Style -->
  <link rel="stylesheet" href="./css/master.css">
  <!-- meta icon -->
  <title>Flying</title>
</head>


 <!--
   TODO LIST:
   1. Wrap all form except button.searchButton in div to make it's display grid better for button;
   2. Create some pages for cards and link them together, to make content;
   3. Realize bank card, update/change;
   4. Make design for Profile page;
   5. Finish JS function to make correct date in date in main page;
   6. Finish 5th card in main page
   7. Finish footer links
 -->


 <header class="header" id="header">
   <div class="container">
     <div class="flights">
       <div class="container">
         <div class="flight">
           <i class="fa fa-plane fa-xs"></i>
           <h2>Flights</h2>
         </div>
       </div>
       <div class="container">
         <div class="ways" id="ways">
           <div><h3><a id="one_way">One-way</a></h3></div>
         </div>
           <div class="one-way">
             <form action="available.flights.php" method="post">
               <select class="" name="from_city">
                 <option value="">From city</option>
                 <option value="nur-sultan">Nur-Sultan</option>
                 <option value="almaty">Almaty</option>
                 <option value="taraz">Taraz</option>
               </select>
               <select class="" name="to_city">
                 <option value="">To city</option>
                 <option value="nur-sultan">Nur-Sultan</option>
                 <option value="almaty">Almaty</option>
                 <option value="taraz">Taraz</option>
               </select>
               <input type="date" name="from_date" min="2000-01-01">
               <select class="one-way__flight-class" name="class">
                 <option value="economy">
                   Economy
                 </option>
                 <option value="business">
                   Business
                 </option>
               </select>
               <button class="searchButton" type="submit" name="search">Search tickets</button>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 </header>

 <main class="main" id="main">
   <div class="container">
     <h2>Popular places to travel</h2>
     <div class="part1">
       <div class="card1">
         <a href="#">
           <div class="top">
             <h3>Title h3</h3>
           </div>
           <div class="bottom">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.</p>
           </div>
         </a>
       </div>
       <div class="card2">
         <a href="#">
           <div class="top">
             <h3>Title h3</h3>
           </div>
           <div class="bottom">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.</p>
           </div>
         </a>
       </div>
       <div class="card3">
         <a href="./Japan.php">
           <div class="top">
             <h3>Japan</h3>
           </div>
           <div class="bottom">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.</p>
           </div>
         </a>
       </div>
     </div>
   </div>
   <div class="container">
   <h2>Hot sales</h2>
     <div class="part2 featuredTravel">
       <div class="card1">
         <a href="#">
           <div class="top">
             <h3>Title h3</h3>
           </div>
         </a>
       </div>
       <div class="card2">
         <a href="#">
           <div class="top">
             <h3>Title h3</h3>
           </div>
           <div class="bottom">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.</p>
           </div>
         </a>
       </div>
       <div class="card3">
         <a href="#">
           <div class="top">
             <h3>Title h3</h3>
           </div>
           <div class="bottom">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.</p>
           </div>
         </a>
       </div>
     </div>
   </div>
   <div class="container">
   <h2>Best place to relax</h2>
     <div class="part3 inTheSpotlight">
       <div class="card">
         <a href="#">
           <div class="top">
             <h3>Title h3</h3>
           </div>
           <div class="bottom">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.</p>
           </div>
         </a>
       </div>
     </div>
   </div>
   <div class="container">
   <h2>Recomended to you</h2>
     <div class="part4 familyTravel">
       <div class="card1">
         <a href="#">
           <div class="top">
             <h3>Title h3</h3>
           </div>
           <div class="bottom">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.</p>
           </div>
         </a>
       </div>
       <div class="card2">
         <a href="#">
           <div class="top">
             <h3>Title h3</h3>
           </div>
           <div class="bottom">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.</p>
           </div>
         </a>
       </div>
       <div class="card3">
         <a href="#">
           <div class="top">
             <h3>Title h3</h3>
           </div>
           <div class="bottom">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.</p>
           </div>
         </a>
       </div>
     </div>
   </div>
   <div class="container">
   <h2>Our app</h2>
     <div class="part5 getApp">
       <div class="p5_card">
         <a href="#">
          <div class="left">
            <div class="getApp__photo">
              <img src="./img/booking-by-phone.jpg" alt="get the app">
            </div>
          </div>
          <div class="right">
            <div class="text">
              <h3>Get out mobile app just now!</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <div class="qr_code">
              <img src="./img/qr_code.png" alt="qr code">
            </div>
          </div>
         </a>
       </div>
     </div>
   </div>
   </div>
   <button class="goTopBtn" type="goTop" name="goTop">
     <i class="fa fa-chevron-up"></i>
   </button>
 </main>

<?php
      include_once 'footer.php';
  ?>
