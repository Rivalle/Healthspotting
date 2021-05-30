<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HealthSpotting</title>
      <link rel="stylesheet" type="text/css" href="../CSS/indexStyles.css">
      <link rel="stylesheet" type="text/css" href="../CSS/adminStyles.css">
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
      <?php
        include_once '../assets/dbhandler.php';
        include_once '../assets/navbar.php';
        if ($_SESSION["username"] !== "admin"){
          header("location: ../PHP/login.php");
          exit();
        }
      ?>
    <!-- Top wallpaper -->
    <section id="home" class="main-effects parallax-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-sm-12 text-align">
           <h1>Admin Control</h1>
          </div>
        </div>
      </div>
    </section>
    <div style="margin-top: 10px;" class="container box-margin">
        <div class="col-md-12 col-sm-12">
            <div class="card cardimage ">
              <div class="text-center">
                <h3 id="header">Insert a new User</h3>
                <form action="../assets/adminAsset.php" method="post">
                  <input class="form-control" type="text" name="name" placeholder="Username">
                  <input class="form-control" type="text" name="email" placeholder="Email">
                  <input class="form-control" type="password" name="pass" placeholder="Password" maxlength="25">
                  <input class="form-control" type="password" placeholder="Repeat Password" name="passrep" maxlength="25" >
                  <button class="btn btn-success btn-rounded " type="submit" name="submit" id="submit" >Submit</button>
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
                      else if ($_GET["error"] == "none") {
                        echo "<p>Successfully added user!</p>";
                      }
                    }
                   ?>
                </form>
              </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 20px; margin-bottom:20px;" class="container box-margin">
        <div class="col-md-12 col-sm-12">
            <div class="card cardimage ">
              <div class="text-center">
                <h3 id="header">Manage Users</h3>
                <?php
                  $sql = "SELECT * FROM users;";
                  $result = mysqli_query($conn,$sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<strong>Username:</strong>" . $row['usersName'] . "<br><strong>Email:</strong>" . $row['usersEmail'] . "<hr>";
                  }
                 ?>
                 <form action='../assets/adminAsset.php' method='post'>
                   <input id="deleteform" type="text" name="uname" placeholder="User to delete(Username/Email)" maxlength="25">
                   <button id="delete" type="submit" name="delete">Delete</button>
                   <?php
                     if (isset($_GET["error"])) {
                       if ($_GET["error"] == "userdeleted") {
                         echo "<p>User was deleted!</p>";
                       }
                       else if ($_GET["error"] == "namenotfound") {
                         echo "<p>The User was not found</p>";
                       }
                       else if ($_GET["error"] == "empty") {
                         echo "<p>No user entered</p>";
                       }
                     }
                    ?>
                 </form>
              </div>
            </div>
        </div>
    </div>
    </body>
  </html>

<?php
  include_once '../assets/footer.php';
 ?>
