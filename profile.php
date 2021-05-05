<?php
     include_once 'header.php';
 ?>
<head>
 <link rel="stylesheet" href="./css/master-profile.css">
 <!-- meta icon -->
 <title>My Profile</title>
</head>
  <main class="main" id="main">
    <div class="container">
      <div class="info">
        <div class="info__left">
          <div class="info__profile-photo">
            <img src="https://via.placeholder.com/300x300.jpg/BCB1C3/000000?hello=%20"/>
          </div>
          <!-- <div class="breakline">
            <h5>text</h5>
            <hr>
          </div> -->
          <div class="info__profile-info">
            <h3 class="name-surname">
              Name Surname
            </h3>
            <h3 class="login">
              <a href="mailto:Lorem@example.com">Lorem@example.com</a>
            </h3>
            <h3 class="number">
              <a href="tel:+77777777777" type="tel">+77777777777</a>
            </h3>
          </div>
        </div>
        <div class="info__right">
          <div class="wrap">
            <div class="card">
              <div class="front">
                <form class="bank-card" action="" method="post">
                  <div class="card-number">
                    <input type="number" class="card-number card-number1" name="card-number1" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX">
                    <input type="number" class="card-number card-number2"  name="card-number2" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX">
                    <input type="number" class="card-number card-number3"  name="card-number3" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX">
                    <input type="number" class="card-number card-number4"  name="card-number4" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX">
                  </div>
                  <div class="card-date">
                    <span class="valid">Valid thru</span>
                    <input type="number" class="card-date card-date1" name="card-date1" maxlength="2" min="01" max="12" value="" placeholder="MM">
                    <span>/</span>
                    <input type="number" class="card-date card-date2" name="card-date2" maxlength="2" min="10" value="" placeholder="YY">
                  </div>
                  <div class="name-surname">
                    <input type="text" name="name" value="" placeholder="Name" maxlength="15">
                    <input type="text" name="surname" value="" placeholder="Surname" maxlength="15">
                  </div>
                </form>
                <a href="#" class="flipToBack">></a>
              </div>
              <div class="back">
                <form class="bank-card" action="" method="post">
                  <div class="card-cvv">
                    <input type="number" class="card-cvv" name="card-cvv" value="" placeholder="CVV">
                  </div>
                </form>
                <a href="#" class="flipToFront">></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


<?php
  include_once 'footer.php';
 ?>
