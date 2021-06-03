<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <!-- Meta to din's ave in cache -->
  <meta http-equiv="Cache-control" content="no-cache">

  <!-- Style -->
  <link rel="stylesheet" href="./css/all-pages.css">

  <!-- Icon -->
  <link rel="icon" href="./img/Icon.png" type="image/png" sizes="16x16">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

</head>
<body>
  <nav class="nav" id="nav">
    <div class="container">
    <div class="bottom">
      <p>
        <i class="fa fa-envelope"></i> <a target="_blank" href="mailto: mail@example.com">mail@example.com</a>
      </p>
      <p>
        <i class="fa fa-phone"></i> <a href="tel: +7 (777) 777 77 77">+7 (777) 777 77 77</a>
      </p>
    </div>
    <div class="nav-left">
      <a href="./index.php">
        <img src="./img/logo.png"/>
      </a>
    </div>
    <div class="nav-right">
      <div class="menu">
        <div class="menu-open" id="menu-open">
          <?php
          if (isset($_SESSION["userid"])) {
            echo '<div class="menu-open-item"><a href="./profile.php">Profile page</a></div>';
            echo '<div class="menu-open-item"><a href="includes/logout.inc.php">Log Out</a></div>';
          }
          else {
            echo '<div class="menu-open-item"><a href="./signup.php">Register</a></div>';
            echo  '<div class="menu-open-item"><a href="./login.php">Log In</a></div>';
          }
           ?>
        </div>
      </div>
    </div>
    </div>
  </nav>
