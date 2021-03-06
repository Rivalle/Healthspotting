<!DOCTYPE html>
<html lang="el">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthSpotting</title>
    <link rel="stylesheet" type="text/css" href="../CSS/indexStyles.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Calculatestyles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/calculate.js"></script>
    </script>
  </head>
  <body class="bodypic">
    <!-- Navigation bar -->
    <?php
      include_once '../assets/navbar.php';
     ?>
    <!-- Top wallpaper -->
    <section id="home" class="main-effects parallax-section">
      <div class=" container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12">
        </div>
      </div>
      </div>
    </section>
    <!-- BMI and DCI  -->
    <section class="container-fluid">
      <br>
      <div class="container box-margin">
        <div class="row justify-content-center">
          <div class="col-md-8 col-sm-8">
            <h1 class="text-center" id="header">Calculate your Body and your Stomach!</h1>
              <div class="card cardimage ">
                <div class="text-center">
                  <h3 id="header">BMI Calculator</h3>
                  <div class="md-form">
                    <p>Weight(in Kg):</p>
                    <input class="form-control" type="number" id="weight" placeholder="Weight">
                  </div>
                  <div class="md-form">
                    <p>Height(in Cm):</p>
                    <input class="form-control" type="number"  id="height" placeholder="Height">
                  </div>
                  <div class="md-form">
                    <div id="result"></div>
                  </div>
                  <button class="btn btn-success btn-rounded " type="button" id="bmi-btn" >Calculate BMI</button>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="container box-margin" style="margin-top:20px;">
        <div class="row justify-content-center">
          <div class="col-md-8 col-sm-8">
              <div class="card cardimage ">
                <div class="text-center">
                  <h3 id="header">Daily Caloric Intake</h3>
                  <div class="md-form">
                    <p>Weight(in Kg):</p>
                    <input class="form-control" type="number" id="weight2" placeholder="Weight">
                  </div>
                  <div class="md-form">
                    <p>Height(in Cm):</p>
                    <input class="form-control" type="number"  id="height2" placeholder="Height">
                  </div>
                  <div class="md-form">
                    <p>Age:</p>
                    <input class="form-control" type="number"  id="age" placeholder="Age">
                  </div>
                  <div class="md-form">
                    <input type="radio" id="radiomale" name="gender" value="male" checked> Male<br>
                    <input type="radio" id="radiofem" name="gender" value="female"> Female<br>
                  </div>
                  <div class="md-form">
                    <div id="result2"></div>
                  </div>
                  <button class="btn btn-success btn-rounded " type="button" id="bmr-btn">Calculate BMR</button>
                </div>
              </div>
          </div>
        </div>
      </div>
      <br>
    </section>
  </body>
  <!-- footer -->
  <?php
    include_once '../assets/footer.php';
   ?>
  </body>
</html>
