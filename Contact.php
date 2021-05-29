<!DOCTYPE html>
<html lang="el">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthSpotting</title>
    <link rel="stylesheet" type="text/css" href="CSS/indexStyles.css">
    <link rel="stylesheet" type="text/css" href="CSS/contactStyles.css">
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
      <!-- Contact form -->
      <section id="contact">
        <div class="container box-margin">
          <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card cardimage ">
                  <div class="text-center">
                    <h3 id="header">Contact <strong id="greentext">Us</strong></h3>
                    <div class="md-form">
                      <input class="form-control" name="name" type="text" name="" value="" id="name" placeholder="Your name">
                      <label for="name"></label>
                    </div>
                    <div class="md-form">
                      <input class="form-control" name="email" type="text" name="" value="" id="email" placeholder="Your email">
                      <label for="email"></label>
                    </div>
                    <div class="md-form">
                      <input class="form-control" name="subject" type="text" name="" value="" id="subject" placeholder="Subject">
                      <label for="subject"></label>
                    </div>
                    <div class="md-form">
                      <textarea class="form-control" name="message" rows="6" id="message" placeholder="Your message"></textarea>
                      <label for="message"></label>
                    </div>
                    <button class="btn btn-success btn-rounded " type="button" name="submit" id="submit" >Submit</button>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- footer -->
      <?php
        include_once 'assets/footer.php';
       ?>
    </body>
</html>
