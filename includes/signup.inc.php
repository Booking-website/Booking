<?php
 if (isset($_POST["submit"])) {

   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $phone = $_POST["tel"];
   $email = $_POST["email"];
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdrepeat"];

   require_once './dbh.inc.php';
   require_once './functions.inc.php';

   if (emptyInputSignup($fname, $lname, $phone, $email, $pwd, $pwdRepeat) !== false) {
     header("location: ../php/signup.php?error=emptyinput");
     exit();
   }
   if (invalidEmail($email) !== false) {
     header("location: ../php/signup.php?error=invalidemail");
     exit();
   }
   if (pwdMatch($pwd, $pwdRepeat) !== false) {
     header("location: ../php/signup.php?error=passwordsdontmatch");
     exit();
   }
   if (emailExists($conn, $email, $phone) !== false) {
     header("location: ../php/signup.php?error=emailtaken");
     exit();
   }
   createUser($conn, $fname, $lname, $phone, $email, $pwd);
  } else {
   header("location: ../php/signup.php");
   exit();

   // $sql = "SELECT * FROM user WHERE userID = '$id'";
   // $result = mysqli_query($conn, $sql);
   // if (mysqli_num_rows($result) > 0){
   //   while($row = mysqli_fetch_assoc($result)){
   //     $id = $row['userID'];
   //     $sql = "INSERT INTO profileImg (userid, status) VALUES ('$id', 1)";
   //     header("location: profile.php");
   //   }
   // }
 }
