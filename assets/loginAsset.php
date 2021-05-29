<?php

if (isset($_POST["submit"])) {

  $username = $_POST["username"];
  $pass = $_POST["pass"];

  require_once 'dbhandler.php';
  require_once 'functions.php';

  if (emptyInputsLogin($username,$pass) !== false) {
    header("location: ../PHP/login.php?error=emptyinput");
    exit();
  }

   loginUser($conn, $username, $pass);
}
else{
  header("location: ../PHP/login.php");
  exit();
}
