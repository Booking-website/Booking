<?php

 if (isset($_POST["submit"])) {

   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $phone = $_POST["tel"];
   $email = $_POST["email"];
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdrepeat"];

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

   if (emptyInputSignup($fname, $lname, $phone, $email, $pwd, $pwdRepeat) !== false) {
     header("location: ../signup.php?error=emptyinput");
     exit();
   }
   if (invalidEmail($email) !== false) {
     header("location: ../signup.php?error=invalidemail");
     exit();
   }
   if (pwdMatch($pwd, $pwdRepeat) !== false) {
     header("location: ../signup.php?error=passwordsdontmatch");
     exit();
   }
   if (emailExists($conn, $email, $phone) !== false) {
     header("location: ../signup.php?error=emailtaken");
     exit();
   }
   createUser($conn, $fname, $lname, $phone, $email, $pwd);
  }
 else {
   header("location: ../signup.php");
   exit();
 }
