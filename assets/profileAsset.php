//this php file is used by the profile page
<?php
session_start();
require_once 'dbhandler.php';
require_once 'functions.php';

if (isset($_POST["edit1"])) {
  $newname = $_POST["name"];

  if (invalidName($newname) !== false || $newname == "") {
    header("location: ../PHP/profile.php?error=invalidname");
    exit();
  }
  else if (nameExists($conn, $newname, $newname) !== false) {
    header("location: ../PHP/profile.php?error=nametaken");
    exit();
  }
  $name = $_SESSION["username"];
  $query = "UPDATE users SET usersName = '$newname' WHERE usersName = '$name';";
  $queryrun = mysqli_query($conn,$query);
  header("location: logout.php?");
}
else if (isset($_POST["edit2"])) {
  $newemail = $_POST["email"];

  if (invalidEmail($newemail) !== false || $newemail == "") {
    header("location: ../PHP/profile.php?error=invalidemail");
    exit();
  }
  else if (emailExists($conn, $newemail) !== false) {
    header("location: ../PHP/profile.php?error=emailtaken");
    exit();
  }
  $name = $_SESSION["username"];
  $query = "UPDATE users SET usersemail = '$newemail' WHERE usersName = '$name';";
  $queryrun = mysqli_query($conn,$query);
  header("location: ../PHP/profile.php?error=none");
}
else if (isset($_POST["edit3"])) {
  $pass = $_POST["pass"];
  $passrep = $_POST["passrep"];

  if (passMatch($pass, $passrep) !== false) {
    header("location: ../PHP/profile.php?error=passnotmatch");
    exit();
  }
  $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
  $name = $_SESSION["username"];
  $query = "UPDATE users SET userPass = '$hashedPass' WHERE usersName = '$name';";
  $queryrun = mysqli_query($conn,$query);
  header("location: logout.php?");
}
else {
  header("location: ../PHP/profile.php");
  exit();
}
