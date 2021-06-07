<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HealthSpotting</title>
      <link rel="stylesheet" type="text/css" href="../CSS/indexStyles.css">
      <link rel="stylesheet" type="text/css" href="../CSS/profileStyles.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <script src="../JS/profile.js"></script>
    </head>
    <body>
      <!-- Navigation bar -->
      <?php
        include_once '../assets/dbhandler.php';
        include_once '../assets/navbar.php';
        if (!$_SESSION["username"]){
          header("location: ../PHP/login.php");
          exit();
        }
        $name = $_SESSION["username"];
        $sql = "SELECT * FROM users WHERE usersName = '$name';";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
      ?>
    <!-- Top wallpaper -->
    <section id="home" class="main-effects parallax-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-sm-12 text-align">
           <h1>Profile</h1>
          </div>
        </div>
      </div>
    </section>
    <div style="margin-top: 20px; margin-bottom:20px;" class="container box-margin">
        <div class="col-md-12 col-sm-12">
            <div class="card cardimage ">
              <div class="text-center">
                <h3 id="header">Change your account info</h3>
                <form action='../assets/profileAsset.php' method='post'>
                  <strong>Username:</strong>
                  <?php echo $row['usersName']; ?>
                  <button class="buttons" onclick="return makeInput(1)">Edit</button>
                  <div id="input1">
                    <?php
                      if (isset($_GET["error"])) {
                        if ($_GET["error"] == "invalidname") {
                          echo "<strong>Empty or Invalid Name</strong>";
                        }
                        else if ($_GET["error"] == "nametaken") {
                          echo "<strong>Name already exists</strong>";
                        }
                      }
                     ?>
                  </div>
                  <br><strong>Email:</strong>
                  <?php echo $row['usersEmail']; ?>
                  <button class="buttons" onclick="return makeInput(2)">Edit</button>
                  <div id="input2">
                    <?php
                      if (isset($_GET["error"])) {
                        if ($_GET["error"] == "invalidemail") {
                          echo "<strong>Empty or Invalid Email</strong>";
                        }
                        else if ($_GET["error"] == "emailtaken") {
                          echo "<strong>Email already exists</strong>";
                        }
                        else if ($_GET["error"] == "none") {
                          echo "<strong>Email changed</strong>";
                        }
                      }
                     ?>
                  </div>
                  <br><strong>Password: <i>hidden</i></strong>
                  <button class="buttons" onclick="return makeInput(3)">Edit</button>
                  <div id="input3">
                    <?php
                    if (isset($_GET["error"])) {
                      if ($_GET["error"] == "passnotmatch") {
                        echo "<strong>Passwords do not match</strong>";
                      }
                    }
                     ?>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
  </body>
  </html>

  <!-- footer -->
<?php
  include_once '../assets/footer.php';
 ?>

<script type="text/javascript">
//function that changes the user credentials
function makeInput(x){
    if (x == 1) {
      let input1 = document.querySelector("#input1");
      input1.innerHTML =`<strong>WARNING! You will be signed out.</strong><input type="text" name="name" placeholder="New Username">
      <button id="submits" type="submit" name="edit1">Edit Name</button>`;
      return false;
    }
    else if (x == 2) {
      let input2 = document.querySelector("#input2");
      input2.innerHTML =`<input type="text" name="email" placeholder="New Email">
      <button id="submits" type="submit" name="edit2">Edit Email</button>`;
      return false;
    }
    else if (x == 3) {
      let input3 = document.querySelector("#input3");
      input3.innerHTML =`<strong>WARNING! You will be signed out.</strong><input type="password" name="pass" placeholder="New Password">
      <input type="password" name="passrep" placeholder="Repeat Password">
      <button id="submits" type="submit" name="edit3">Edit Password</button>`;
      return false;
    }
}
</script>
