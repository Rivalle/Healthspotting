<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealthSpotting</title>
  <link rel="stylesheet" type="text/css" href="CSS/indexStyles.css">
  <link rel="stylesheet" type="text/css" href="CSS/signupStyles.css">
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
    include_once 'assets/navbar.php';
   ?>
  <!-- Register forms -->
  <div class="separator">
    <h4>Create an account</h4>
    <hr>
    <input type="text" class="form-control" placeholder="Username" autofocus="" autocomplete="off" maxlength="80" >
    <hr>
    <input type="text" class="form-control" placeholder="Email Address" maxlength="25" >
    <hr>
    <input type="password" class="form-control" placeholder="Password" maxlength="25" >
    <hr>
    <input type="password" class="form-control" placeholder="Repeat Password" maxlength="25" >
    <button class="button1" type="button" name="button">Enter</button>
    <button class="button2" type="button" name="button" onclick="window.location.href='login.php'">Log-in</button>
  </div>
  <!-- footer -->
  <?php
    include_once 'assets/footer.php';
   ?>
  </body>
</html>
