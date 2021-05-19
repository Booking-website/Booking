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
     <h2>Something with title</h2>
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
   <h2>Something with title</h2>
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
   <h2>Something with title</h2>
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
   <h2>Something with title</h2>
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
     <div class="part5">
       <div class="card getApp">
         <div class="left">

         </div>
         <div class="right">
           <h3>right</h3>
         </div>
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
