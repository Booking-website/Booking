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
              <?php
              include_once './includes/dbh.inc.php';
              $query="SELECT count(*), fname, lname, email, phoneNumber FROM users WHERE userID=?";
        			$stmt=mysqli_prepare($conn,$query);
        			mysqli_stmt_bind_param($stmt,"s",$_SESSION['userid']);
        			mysqli_stmt_execute($stmt);
        			mysqli_stmt_bind_result($stmt,$cnt,$fname,$lname,$email,$phoneNumber);
        			mysqli_stmt_fetch($stmt);
        			if($cnt==1)
        			{
        				echo "<h4 style='padding-left: 20px;'> NAME: ".$fname."</h4><br>";
                echo "<h4 style='padding-left: 20px;'> LAST NAME: ".$lname."</h4><br>";
                echo "<h4 style='padding-left: 20px;'> EMAIL: ".$email."</h4><br>";
                echo "<h4 style='padding-left: 20px;'> PHONE NUMBER: ".$phoneNumber."</h4><br>";
        			}
        			mysqli_stmt_close($stmt);
        			mysqli_close($conn);
              ?>
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
        <h3>AVAILABLE ACTIONS:</h3>
        <table cellpadding="5">
    			<tr>
    				<td><a href="index.php"><i class="fa fa-plane" aria-hidden="true"></i> Book Flight Tickets</a>
    				</td>
    			</tr>
    			<tr>
    				<td><a href="view.booked.tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> View Booked Flight Tickets</a>
    				</td>
    			</tr>
    			<tr>
    				<td><a href="cancel.booked.tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> Cancel Booked Flight Tickets</a>
    				</td>
    			</tr>
    		</table>
      </div>
    </div>
  </main>


		<!--Following data fields were empty!
			...

			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS

		-->
	</body>
</html>
<?php
  include_once 'footer.php';
 ?>
