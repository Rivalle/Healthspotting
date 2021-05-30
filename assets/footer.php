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
                  <?php
                      if (isset($_SESSION["username"]) && ($_SESSION["username"] == "admin")){
                        echo "<li><a href='admin.php'>Admin</a></li>";
                        echo "<li><a href='../assets/logout.php'>Log out</a></li>";
                      }
                      else if (isset($_SESSION["username"])){
                        echo "<li><a href='profile.php'>Profile</a></li>";
                        echo "<li><a href='../assets/logout.php'>Log out</a></li>";
                      }
                      else{
                        echo "<li><a href='login.php'>Login</a></li>";
                        echo "<li><a href='signup.php'>Sign-up</a></li>";
                      }
                   ?>
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
            <div class="col item social"><a href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a><a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a></div>
        </div>
    </div>
</footer>
