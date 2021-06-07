//this php file is used by the signup page
<?php

if (isset($_POST["submit"])) {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $passrep = $_POST["passrep"];

  require_once 'dbhandler.php';
  require_once 'functions.php';
  //error handlers for user signup inputs
  if (emptyInputsSignup($name,$email,$pass,$passrep) !== false) {
    header("location: ../PHP/signup.php?error=emptyinput");
    exit();
  }
  if (invalidName($name) !== false) {
    header("location: ../PHP/signup.php?error=invalidname");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../PHP/signup.php?error=invalidemail");
    exit();
  }
  if (passMatch($pass, $passrep) !== false) {
    header("location: ../PHP/signup.php?error=passnotmatch");
    exit();
  }
  if (nameExists($conn, $name, $email) !== false) {
    header("location: ../PHP/signup.php?error=nametaken");
    exit();
  }
  if (emailExists($conn, $email) !== false) {
    header("location: ../PHP/signup.php?error=emailtaken");
    exit();
  }
  createUser($conn, $name, $email, $pass);
}
else {
  header("location: ../PHP/signup.php");
  exit();
}
