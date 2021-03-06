<?php

//function that checks if the inputs were empty
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

//function that checks if the name given was valid
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

//function that checks if the email given was valid
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

//function that checks whether the passwords were the same
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

//function that checks if the name or email entered exists
function nameExists($conn, $name, $email){
  $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail=?;";
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

//function that checks if the email given already exists
function emailExists($conn, $email){
  $sql = "SELECT * FROM users WHERE usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("location: ../PHP/signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $email);
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

//function that creates the user
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

//function that checks if the login inputs are empty
function emptyInputsLogin($name, $pass){
  $result;
  if (empty($name) || empty($pass)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

//function that logs the user in
function loginUser($conn, $username, $pass){
  $nameexists = nameExists($conn, $username, $username);

  if ($nameexists === false) {
    header("location: ../PHP/login.php?error=wrongloginname");
    exit();
  }

  $passHashed = $nameexists["userPass"];
  $checkPass = password_verify($pass, $passHashed);

  if ($checkPass === false) {
    header("location: ../PHP/login.php?error=wrongloginpass");
    exit();
  }
    else if ($checkPass === true) {
    session_start();
    $_SESSION["userid"] = $nameexists["usersId"];
    $_SESSION["username"] = $nameexists["usersName"];
    header("location: ../PHP/Index.php");
    exit();
  }
}

//function that is used by the admin page to create a user manually
function createUserFromAdmin($conn, $name, $email, $pass){
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
  header("location: ../PHP/admin.php?error=none");
  exit();
}
