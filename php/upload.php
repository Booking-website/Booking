<?php
  session_start();
  include_once('../includes/dbh.inc.php');
  $id = $_SESSION["userid"];
  if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  $fileSize = $file['size'];
  $fileError = $file['error'];
  $fileType = $file['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
      if($fileSize < 1000000){
        $fileNameNew = "profile".$id.".".$fileActualExt;
        $fileDestination = '../img/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        $sql = "UPDATE profileImg SET status = 0 WHERE userid = '$id';";
        $result = mysqli_query($conn , $sql);
        header("Location: profile.php?uploadsuccess");
      } else {
        echo "Your file is too big!";
      }
    } else {
      echo "There was an error";
    }
  } else {
    echo "You cannot upload files of this type!";
  }
}
