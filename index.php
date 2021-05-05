<?php
     include_once 'header.php';
 ?>
<head>
  <link rel="stylesheet" href="./css/master.css">
  <!-- meta icon -->
  <title>My Avia Website</title>
</head>
 <header class="header" id="header">
   <div class="container">
     <div class="flights">
       <div class="container">
         <div class="flight">
           <img src="./img/plane.png" alt="plane">
           <h2>Flights</h2>
         </div>
       </div>
       <div class="container">
         <div class="ways" id="ways">
           <div><a class="active" id="roundtrip"><h3>Roundtrip</h3></a></div>
           <div><a id="one_way"><h3>One-way</h3></a></div>
           <!-- <div><a id="multi_city"><h3>Multi-city</h3></a></div> -->
         </div>
         <div class="flights-form">
           <div class="roundtrip">
             <form action="">
               <select class="" name="">
                 <option value="">-Select-</option>
                 <option value="">Option1</option>
                 <option value="">Option2</option>
                 <option value="">Option3</option>
               </select>
               <select class="" name="">
                 <option value="">-Select-</option>
                 <option value="">Option1</option>
                 <option value="">Option2</option>
                 <option value="">Option3</option>
               </select>
               <input type="date" id="date-from" min="2000-01-01">
               <input type="date" id="date-to" min="2000-01-01">
             </form>
             <button type="button" name="search">Search</button>
           </div>
           <div class="one-way">
             <form action="">
               <select class="" name="">
                 <option value="">-Select-</option>
                 <option value="">Option1</option>
                 <option value="">Option2</option>
                 <option value="">Option3</option>
               </select>
               <select class="" name="">
                 <option value="">-Select-</option>
                 <option value="">Option1</option>
                 <option value="">Option2</option>
                 <option value="">Option3</option>
               </select>
               <input type="date" id="date-from" min="2000-01-01">
             </form>
             <button type="button" name="search">Search</button>
           </div>
           <!-- <div class="multi-city">
             <p>First place</p>
             <form action="">
               <select class="" name="">
                 <option value="">-Select-</option>
                 <option value="">Option1</option>
                 <option value="">Option2</option>
                 <option value="">Option3</option>
               </select>
               <select class="" name="">
                 <option value="">-Select-</option>
                 <option value="">Option1</option>
                 <option value="">Option2</option>
                 <option value="">Option3</option>
               </select>
               <input type="date" id="date-from" min="2000-01-01">
             </form>


               <p>Next place</p>
             <form action="">
               <select class="" name="">
                 <option value="">-Select-</option>
                 <option value="">Option1</option>
                 <option value="">Option2</option>
                 <option value="">Option3</option>
               </select>
               <select class="" name="">
                 <option value="">-Select-</option>
                 <option value="">Option1</option>
                 <option value="">Option2</option>
                 <option value="">Option3</option>
               </select>
               <input type="date" id="date-from" min="2000-01-01">
             </form>
             <button type="button" name="search">Search</button>
           </div> -->
         </div>
       </div>
     </div>
   </div>
 </header>

 <main class="main" id="main">
   <div class="container">
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
 </main>

<?php
      include_once 'footer.php';
  ?>