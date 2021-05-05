<?php
     include_once 'header.php';
 ?>
<head>
 <link rel="stylesheet" href="./css/master-registration.css">
 <!-- meta icon -->
 <title>LogIn</title>
</head>
<main class="main" id="main">
  <div class="container">
    <h1>Log In</h1>
    <form action="includes/login.inc.php" method="post">
      <input type="text" name="login" placeholder="Email/Phone number">
      <input type="password" name="pwd" placeholder="Password">
      <button type="submit" name="submit">Log In</button>
      <button type="submit" name="submit">Log In with GMail</button>
    </form>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == ["emptyinput"]) {
          echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
          echo "<p>There is no user with such login!</p>";
        }
        else if ($_GET["error"] == "wrongpwd") {
          echo "<p>Incorrect Password!</p>";
        }
      }
     ?>
  </div>
</main>

<?php
     include_once 'footer.php';
 ?>
