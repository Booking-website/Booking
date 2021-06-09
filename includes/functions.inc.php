<?php

function emptyInputSignup($fname, $lname, $phone, $email, $pwd, $pwdRepeat) {
  $result;
  if(empty($fname) || empty($lname) || empty($phone) || empty($email) || empty($pwd) || empty($pwdRepeat) ) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email) {
  $result;
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
  $result;
  if($pwd !== $pwdRepeat) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function emailExists($conn, $email, $phone) {
  $sql = "SELECT * FROM users WHERE email = ? OR phoneNumber = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../php/signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $email, $phone);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}

function createUser($conn, $fname, $lname, $phone, $email, $pwd) {
  $sql = "INSERT INTO users (fname, lname, email, phoneNumber, userPwd) VALUES (?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../php/signup.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $phone, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location: ../php/signup.php?error=none");


  exit();
}

function emptyInputLogin($username, $pwd) {
  $result;
  if(empty($username) || empty($pwd) ) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}
function loginUser($conn, $username, $pwd) {
  $usernameExists = emailExists($conn, $username, $username);

  if ($usernameExists === false) {
    header("location: ../php/login.php?error=wronglogin");
    exit();
  }

  $pwdHashed = $usernameExists["userPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd === false) {
    header("location: ../php/login.php?error=wrongpwd");
    exit();
  }
  else if ($checkPwd === true) {
    session_start();
    $_SESSION["userid"] = $usernameExists["userID"];
    header("location: ../php/index.php");
    exit();
  }
}
