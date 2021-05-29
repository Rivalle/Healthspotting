<?php

function emptyInputsSignup($name,$email,$pass,$passrep){
  $result;
  if (empty($name) || empty($email) || empty($pass) || empty($passrep)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidName($name){
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email){
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function passMatch($pass,$passrep){
  $result;
  if ($pass !== $passrep) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function nameExists($conn, $name, $email){
  $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("location: ../PHP/signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $email);
  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($result)) {
    return $row;
  }
  else{
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $pass){
  $sql = "INSERT INTO users (usersName,usersEmail,userPass) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("location: ../PHP/signup.php?error=stmtfailed");
    exit();
  }

  $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPass);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../PHP/login.php?error=none");
  exit();

}
