<?php
     include_once 'header.php';
 ?>
<head>
  <link rel="stylesheet" href="./css/master-registration.css">
  <!-- meta icon -->
  <title>Sigh Up</title>
</head>
<main class="main" id="main">
  <div class="container">
    <h1>Registration</h1>
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="fname" placeholder="First name">
      <input type="text" name="lname" placeholder="Last name">
      <input type="tel" name="tel" value="+7" placeholder="Telephone number">
      <input type="email" name="email" placeholder="email">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwdrepeat" placeholder="Repeat password">
      <button class="registerButton" type="submit" name="submit">Register now</button>
    </form>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == ["emptyinput"]) {
          echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
          echo "<p>Invalid EMAIL!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
          echo "<p>Passwords don't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
          echo "<p>Something went wrong! Please try again</p>";
        }
        else if ($_GET["error"] == "emailtaken") {
          echo "<p>You have account with that email!</p>";
        }
        else if ($_GET["error"] == "none") {
          echo "<p>You have signed up!</p>";
        }
      }
     ?>
  </div>
</main>
<?php
     include_once 'footer.php';
 ?>
