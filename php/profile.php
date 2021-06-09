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
        <div class="main__profile-img-wrapper">
          <i class="fa fa-user-circle"></i>



          <?php
            $msg = "";

            // If upload button is clicked ...
            if (isset($_POST['upload'])) {

              $filename = $_FILES["uploadfile"]["name"];
              $tempname = $_FILES["uploadfile"]["tmp_name"];
              $folder = "../img/profileImg/".$filename;

              $db = mysqli_connect("localhost", "root", "", "avia-tickets");


              $userId = "SELECT count(*), userID FROM users WHERE userID=?";
              $stmt=mysqli_prepare($db,$userId);
              mysqli_stmt_bind_param($stmt,"s",$_SESSION['userid']);
              mysqli_stmt_execute($stmt);
              mysqli_stmt_bind_result($stmt,$cnt,$userID);
              mysqli_stmt_fetch($stmt);

                  // TODO:
                  // 1. Can't send send to DB
                  // 2. Show as img in profile
                  // Get all the submitted data from the form
                  $query = "INSERT INTO profileimg VALUES ('$userId', '$filename')";

                  // Execute query
                  mysqli_query($db, $query);

                  // Now let's move the uploaded image into the folder: image
                  if (move_uploaded_file($tempname, $folder))  {
                      $msg = "Image uploaded successfully";
                  }else{
                      $msg = "Failed to upload image";
                }
            }
            $result = mysqli_query($db, "SELECT * FROM `profileimg`");

          ?>
          <img src="<?php echo $data['Filename']; ?>">




          <form method="POST" action="profile.php" enctype="multipart/form-data">
              <input type="hidden" name="size" value="1000000">
            <div class="uploadImage">
              <label for="uploadImageInput">Upload Image</label>
              <input type="file" name="uploadfile" id="uploadImageInput">
            </div>
            <div>
              <button type="submit" name="upload">POST</button>
            </div>
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
          <button type="button" name="edit" class="editProfileButton">Edit profile</button>
        </div>
      </div>
    </div>
  </div>
</main>


<?php
  include_once 'footer.php';
?>
<!-- Own JS -->
<script src="../js/profile.js"></script>
