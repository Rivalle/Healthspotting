<?php

require_once 'dbhandler.php';
require_once 'functions.php';
if (isset($_POST["submit"])) {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $passrep = $_POST["passrep"];


  if (emptyInputsSignup($name,$email,$pass,$passrep) !== false) {
    header("location: ../PHP/admin.php?error=emptyinput");
    exit();
  }
  if (invalidName($name) !== false) {
    header("location: ../PHP/admin.php?error=invalidname");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../PHP/admin.php?error=invalidemail");
    exit();
  }
  if (passMatch($pass, $passrep) !== false) {
    header("location: ../PHP/admin.php?error=passnotmatch");
    exit();
  }
  if (nameExists($conn, $name, $email) !== false) {
    header("location: ../PHP/admin.php?error=nametaken");
    exit();
  }
  if (emailExists($conn, $email) !== false) {
    header("location: ../PHP/admin.php?error=emailtaken");
    exit();
  }
  createUserFromAdmin($conn, $name, $email, $pass);
}
else if (isset($_POST["delete"])){
  $uname = $_POST["uname"];
  if (nameExists($conn, $uname, $uname) === false) {
    if ($uname === "") {
      header("location: ../PHP/admin.php?error=empty");
    }
    else{
      header("location: ../PHP/admin.php?error=namenotfound");
    }
  }
  else {
    $query = "DELETE FROM users WHERE usersName = '$uname' OR usersEmail = '$uname';";
    $queryrun = mysqli_query($conn,$query);
    header("location: ../PHP/admin.php?error=userdeleted");
  }
}
else {
  header("location: ../PHP/admin.php");
  exit();
}
