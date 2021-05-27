<!DOCTYPE html>
<html lang="el">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthSpotting</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="Calculatestyles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  </head>
  <body class="bodypic">
    <!-- Navigation bar -->
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="Index.php">HEALTHSPOTTING</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="Contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Articles.php">Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="EducateYourself.php">Educate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="CalculateYourself.php">Calculate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border border-dark rounded" id="login" href="login.php">Login/Sign-up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- BMI and DCI  -->
    <section class="container-fluid">
      <br>
      <div class="row justify-content-center row2">
        <div class="col-sm-4">
          <div class="card card2">
            <img src="images/bmipic.jpg" class="card-img-top" alt="bmi picture">
            <div class="card-body">
              <h5 class="card-title">Calculate your BMI!</h5>
              <p class="card-text">Body mass index (BMI) is a value derived from the mass (weight) and height of a person.
                The BMI is a convenient rule of thumb used to broadly categorize a person as underweight, normal weight, overweight, or obese based on tissue mass (muscle, fat, and bone) and height.</p>
              <a href="#" class="btn btn-primary">Lets go!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width:auto;">
            <img src="images/dailycalories.jpg" class="card-img-top" alt="calintake picture">
            <div class="card-body">
              <h5 class="card-title">Calculate your daily calorie intake!</h5>
              <p class="card-text">Calories are a measure of how much energy food or drink contains. An ideal daily intake of calories varies depending on age, metabolism and levels of physical activity, among other things.
              </p>
              <a href="#" class="btn btn-primary">Lets go!</a>
            </div>
          </div>
        </div>
      </div>
      <br>
    </section>
  </body>
  <!-- footer -->
  <footer class="footer-dark">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-md-3 item">
                  <h3>Navigate</h3>
                  <ul>
                      <li><a href="Index.php">Home</a></li>
                      <li><a href="Contact.php">Contact</a></li>
                      <li><a href="Articles.php">Articles</a></li>
                      <li><a href="EducateYourself.php">Educate</a></li>
                      <li><a href="CalculateYourself.php">Calculate</a></li>
                  </ul>
              </div>
              <div class="col-sm-6 col-md-3 item">
                  <h3>Contact</h3>
                  <ul>
                      <li><a href="#">Email: healthspotting@gmail.com</a></li>
                      <li><a href="#">Tel: +302143455323</a></li>
                      <li><a href="#">Address: Aristotle U, GR</a></li>
                  </ul>
              </div>
              <div class="col-md-6 item text">
                  <h3>HealthSpotting</h3>
                  <p>Discover your perfect self</p>
              </div>
              <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
          </div>
      </div>
  </footer>
  </body>
</html>
