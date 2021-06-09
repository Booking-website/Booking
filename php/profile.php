<?php
 include_once 'header.php';
?>

<head>
  <!-- Style -->
 <link rel="stylesheet" href="../css/master-profile.css">
 <title>My Profile</title>
</head>

<main class="main" id="main">
  <div class="container">
    <div class="main__info">
      <div class="main__sidebar">
        <ul class="hoverEffect">
          <h3>Menu</h3>
          <li>
            <a href="./index.php">
              <i class="fa fa-plane" aria-hidden="true"></i>
              <span>Book Flight Tickets</span>
            </a>
          </li>
          <li>
            <a href="./view.booked.tickets.php">
              <i class="fa fa-plane" aria-hidden="true"></i>
              <span>View Booked Flight Tickets</span>
            </a>
          </li>
          <li>
            <a href="#" class="disabled">
              <i class="fa fa-plane" aria-hidden="true"></i>
              <span>Flight Details</span>
            </a>
          </li>
          <li>
            <a href="#" class="disabled">
              <i class="fa fa-plane" aria-hidden="true"></i>
              <span>Repot an error</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="main__profile-info">
      <?php
      include_once '../includes/dbh.inc.php';

          $id = $_SESSION['userid'];
          $sqlImg = "SELECT * FROM profileImg WHERE userid = '$id'";
          $resultImg = mysqli_query($conn, $sqlImg);
          while ($rowImg = mysqli_fetch_assoc($resultImg)){
            echo "<div class='main__profile-img-wrapper'>";
            if ($rowImg['status'] == 0) {
              echo "<img src = '../img/profile".$id.".jpg' style ='height:200px' />";
            } else {
              echo "<img src = '../img/default-profile-photo.jpg' style ='height:200px' />";
            }
          }
       ?>
       <form action="upload.php" method="post"
enctype="multipart/form-data">
           <input type="file" name="file">
           <button type='submit' name='submit'>POST</button>
       </form>
     </div>
        <div class="main__individual-info">
          <?php
            include_once '../includes/dbh.inc.php';
            $query="SELECT count(*), fname, lname, email, phoneNumber FROM users WHERE userID=?";
            $stmt=mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($stmt,"s",$_SESSION['userid']);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt,$cnt,$fname,$lname,$email,$phoneNumber);
            mysqli_stmt_fetch($stmt);

            if($cnt==1) {
              echo "
                <h4>".$fname. " " .$lname."</h4>
                <br>
                <h4>
                  <a href=\"tel: ".$phoneNumber."\">".$phoneNumber."</a>
                </h4>
                <br>
                <h4>
                  <a href=\"mailto: ".$email."\">".$email."</a>
                </h4>
              ";
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
          ?>
        </div>
        <div class="editButtonWrapper">
          <button type="button" name="edit">Edit profile</button>
        </div>
      </div>
    </div>
  </div>
</main>


<?php
  include_once 'footer.php';
?>
