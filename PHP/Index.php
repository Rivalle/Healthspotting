<!DOCTYPE html>
<html lang="el">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="fitness,health,spotting,mental health">
    <meta name="author" content="">
    <meta name="description" content="A page about exercise and its effects on the mental and physical health">
    <title>HealthSpotting</title>
    <link rel="stylesheet" type="text/css" href="../CSS/indexStyles.css">
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
      <!-- Carousel  -->
      <div id="slider">
        <div id="headerSlider" class="carousel slide" data-bs-ride="carousel">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/exercisevascularhealth.jpg" class="d-block w-100" alt="Picture not found">
                <div class="carousel-caption">
                  <h5 style="color:black;">BODY</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../images/meditate.jpg" class="d-block w-100" alt="Picture not found">
                <div class="carousel-caption">
                  <h5 style="color:#0E8DCC;">MIND</h5>
                 </div>
              </div>
              <div class="carousel-item">
                <img src="../images/wellness.jpg" class="d-block w-100" alt="Picture not found">
                <div class="carousel-caption">
                  <h5 style="color:#E4981D;">WELLNESS</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#headerSlider" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#headerSlider" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>
    <br>

    <!-- About section -->

    <div id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <img class="img-fluid" src="../images/covid.jpg" alt="Picture not found">
          </div>
            <div class="col-md-6">
              <h2>Quarantine and Isolation</h2>
                <p name="about" style="justify">We are at a time when the rates of obesity and depression are constantly rising due to the current pandemic.
                  The website aims to inform the world about the improvement of his daily life and health, suggesting the ways in which he can
                  achieve this, as well as to mobilize the average person who needs the stimulus to upgrade his lifestyle having as tool some useful tips.
                  For example, physical exercise contributes significantly to mental health. <a href="https://www.frontiersin.org/articles/10.3389/fpsyg.2020.01708/full">Read more..</a></p>
          </div>
        </div>
      </div>
      </div>

    <div class="main-effects parallax-section shadow-lg p-5 mb-5" id="quote">
    <div class="container">
      <br>
        <div class="row justify-content-center">
          <div class="col-md-12">
            <p>"The pain you feel today will be strength you feel tommorow."
           </p>
           <p>RITU GHATOUREY</p>
          </div>
        </div>
      </div>
    </div>
    </div>
      <!-- Tips section -->
      <div id="tips">
        <div id="firstline" class="jumbotron text-center container ">
                <h2>3 Tips to Stay Healthy in Quarantine</h2>
                  <p name="about" style="justify">During quarantine, it???s hard to stay physically healthy with no access to lots of gym equipment.
                     As of late, all the fitness centers in CT are closed until further notice. Worried about the Quarantine 15?
                      Here are some tips to stay healthy during this time.</p>

        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-lg-5">
              <img class="img-fluid" src="../images/online.jpg" alt="Picture not found">
            </div>

              <div class="col-lg-6 col-sm-3">
                <h2>FOLLOW AN ONLINE EXERCISE CLASS</h2>
                  <p name="about" style="justify">There are so many great online exercise classes out there, and all you need to join is a solid wifi connection and a clear space.
                   Some examples of full body workout classes are The Be.come project, Tracy Anderson, and Aaptiv. Glo and Yogis Anonymous are some online yoga classes also available.
                   Peloton is a great service that offers both workout routines and bike classes, but it???s more on the pricier side. Definitely worth the cost.
                   Find the best suited for you <a href="https://www.verywellfit.com/best-online-exercise-classes-4163381">here</a>!</p>
            </div>
          </div>
        </div>
          <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-3">
                  <h2>WALK</h2>
                    <p name="about" style="justify">Another easy one! According to the WHO, ???Even in small spaces, walking around or walking on the spot, can help you remain active.
                      If you have a call, stand or walk around your home while you speak, instead of sitting down.
                      If you decide to go outside to walk or exercise, be sure to maintain at least a 1-meter distance from other people.
                      More on the benefits of walking <a href="https://www.betterhealth.vic.gov.au/health/healthyliving/walking-for-good-health">here</a>!</p>
              </div>
              <div class="col-sm-3 col-lg-5">
                <img class="img-fluid" src="../images/walk.jpg" alt="Picture not found">
              </div>
            </div>
          </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-3 col-lg-5">
                  <img class="img-fluid" src="../images/meditate2.jpg" alt="Picture not found">
                </div>
                  <div class="col-lg-6 col-sm-3">
                    <h2>RELAX AND TAKE CARE OF YOURSELF</h2>
                      <p name="about" style="justify">Being mentally active and mentally fit is just as important as being physically active and physically fit.
                        Meditation and deep breaths can help you remain calm and keep your mind sharp. For optimal mental and physical health, it is also very important that you are eating right!
                        Replace sugary drinks with water and be sure to eat your fruits and vegetables while cutting back on salt, sugar, and fat.
                        More on the benefits of meditation <a href="https://www.mayoclinic.org/tests-procedures/meditation/in-depth/meditation/art-20045858">here</a></p>
                </div>
              </div>
            </div>
          </div>
    <!-- footer -->
    <?php
      include_once '../assets/footer.php';
     ?>
    </body>
</html>
