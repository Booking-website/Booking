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
  <link rel="stylesheet" href="./css/flexable.css">

  <!-- Icon -->
  <link rel="icon" href="./img/Icon.png" type="image/png" sizes="16x16">
</head>
<body>
  <nav class="nav" id="nav">
    <div class="container">
      <div class="nav-left">
        <a href="./index.php">
          <img src="./img/logo.png"/>
        </a>
      </div>
      <div class="nav-right">
        <div class="menu">
          <div class="menu-open" id="menu-open">
            <div class="menu-open-item"><a href="#">link1</a></div>
            <div class="menu-open-item"><a href="#">link2</a></div>
            <div class="menu-open-item"><a href="#">link3</a></div>
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
