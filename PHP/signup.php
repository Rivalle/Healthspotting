<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealthSpotting</title>
  <link rel="stylesheet" type="text/css" href="../CSS/indexStyles.css">
  <link rel="stylesheet" type="text/css" href="../CSS/signupStyles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- Navigation bar -->
  <?php
    include_once '../assets/navbar.php';
   ?>
  <!-- Register forms -->
  <form class="separator" action="../assets/signupAsset.php" method="post">
    <h4>Create an account</h4>
    <hr>
    <input type="text" class="form-control" placeholder="Username" name="name" autocomplete="off" maxlength="80" >
    <input type="text" class="form-control" placeholder="Email Address" name="email" autocomplete="off" maxlength="25" >
    <input type="password" class="form-control" placeholder="Password" name="pass" maxlength="25" >
    <input type="password" class="form-control" placeholder="Repeat Password" name="passrep" maxlength="25" >
    <button class="button1" type="submit" name="submit">Submit</button>
    <button class="button2" type="button" name="button" onclick="window.location.href='login.php'">Log-in</button>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invalidname") {
          echo "<p>Invalid Name</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
          echo "<p>Invalid Email</p>";
        }
        else if ($_GET["error"] == "passnotmatch") {
          echo "<p>Passwords do not match</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
          echo "<p>Something went wrong. Try again</p>";
        }
        else if ($_GET["error"] == "nametaken") {
          echo "<p>Username already taken</p>";
        }
        else if ($_GET["error"] == "emailaken") {
          echo "<p>Email already taken</p>";
        }
      }
     ?>
  </form>

  <!-- footer -->
  <?php
    include_once '../assets/footer.php';
   ?>
  </body>
</html>
