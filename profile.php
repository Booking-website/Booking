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
      <div class="main__info">




        <div class="main__sidebar">
          <ul>
            <li><h3>Menu</h3></li>
            <li>
              <a href="index.php">
                <i class="fa fa-plane" aria-hidden="true"></i>
                <span>Book Flight Tickets</span>
              </a>
            </li>
            <li>
              <a href="view.booked.tickets.php">
                <i class="fa fa-plane" aria-hidden="true"></i>
                <span>View Booked Flight Tickets</span>
              </a>
            </li>
            <li>
              <a href="cancel.booked.tickets.php">
                <i class="fa fa-plane" aria-hidden="true"></i>
                <span>Cancel Booked Flight Tickets</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="main__profile-info">
          <div class="main__profile-img-wrapper">
            <form method="POST" action="profile.php">
        <input type="hidden" name="size" value="1000000">
        <div>
          <input type="file" name="image">
        </div>
        <div>
          <button type="submit" name="upload">POST</button>
        </div>
      </form>
              <?php
              include_once './includes/dbh.inc.php';
              $msg = "";

                // If upload button is clicked ...
                if (isset($_POST['upload'])) {
                	// Get image name
                  if(isset($_FILES['image'])){
                    	$image = $_FILES['image']['name'];
                      $userID = $_SESSION['userid'];
                    	// image file directory
                    	$target = "img/".basename($image);

                    	$sql = "INSERT INTO images (imgName, userID) VALUES ('$image', '$userID')";
                    	// execute query
                      mysqli_query($conn, $sql);

                      	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                      		$msg = "Image uploaded successfully";
                      	}else{
                      		$msg = "Failed to upload image";
                      	}
                      $query = mysqli_query($conn, "SELECT * FROM images  where userID = ?");
                      $stmt=mysqli_prepare($conn,$query);
                      mysqli_stmt_bind_param($stmt,"s",$userID);
                      mysqli_stmt_execute($stmt);
                      mysqli_stmt_store_result($stmt);
                      if(mysqli_stmt_num_rows($stmt)==0)
                      {
                        while ($row = mysqli_fetch_array($result)) {
                          echo "";
                            echo "<img src='img/".$row['imgName']."' >";
                          echo "</div>";
                        }
                      }
                      else{
                        echo "Failed!";
                      }
                }
      }
 ?>

          </div>
          <div class="main__individual-info">
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
              echo "<h4 style='padding-left: 20px;'>".$fname. " " .$lname."</h4><br>";
              echo "<h4 style='padding-left: 20px;'>".$phoneNumber."</h4><br>";
              echo "<h4 style='padding-left: 20px;'>".$email."</h4><br>";
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            ?>
          </div>
          <div class="main__bank-card">
            <p>My bank card <i class="fa fa-sort-down"></i></p>
          <div class="main__bank-card-dropdown">
            <div class="wrap">
              <div class="card">
                <div class="front">
                  <form class="bank-card" action="" method="post">
                    <div class="card-number">
                      <input type="number" class="card-number card-number1" name="card-number1" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX" required>
                      <input type="number" class="card-number card-number2"  name="card-number2" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX" required>
                      <input type="number" class="card-number card-number3"  name="card-number3" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX" required>
                      <input type="number" class="card-number card-number4"  name="card-number4" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX" required>
                    </div>
                    <div class="card-date">
                      <span class="valid">Valid thru</span>
                      <input type="number" class="card-date card-date1" name="card-date1" maxlength="2" min="01" max="12" value="" placeholder="MM" required>
                      <i class="fa fa-slash"></i>
                      <input type="number" class="card-date card-date2" name="card-date2" maxlength="2" min="10" value="" placeholder="YY" required>
                    </div>
                    <div class="name-surname">
                      <input type="text" name="name" value="" placeholder="Name" maxlength="15" required>
                      <input type="text" name="surname" value="" placeholder="Surname" maxlength="15" required>
                    </div>
                  </form>
                  <i class="fa fa-angle-double-right flipToBack"></i>
                </div>
                <div class="back">
                  <form class="bank-card" action="" method="post">
                    <div class="card-cvv">
                      <input type="number" class="card-cvv" name="card-cvv" value="" placeholder="CVV" required>
                    </div>
                  </form>
                  <i class="fa fa-angle-double-right flipToFront"></i>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
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
