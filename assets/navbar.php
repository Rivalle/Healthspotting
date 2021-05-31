<?php
    session_start();
 ?>

<div id="nav-bar">
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
            <a class="nav-link"  href="EducateYourself.php ">Educate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="CalculateYourself.php">Calculate</a>
          </li>
          <?php
              if (isset($_SESSION["username"]) && ($_SESSION["username"] == "admin")){
                echo "<li class='nav-item'><a class='nav-link'  href='admin.php'>Admin</a></li>";
                echo "<li class='nav-item'><a class='nav-link'  href='../assets/logout.php'>Log out</a></li>";
              }
              else if (isset($_SESSION["username"])){
                echo "<li class='nav-item'><a class='nav-link'  href='profile.php'>Profile</a></li>";
                echo "<li class='nav-item'><a class='nav-link'  href='../assets/logout.php'>Log out</a></li>";
              }
              else{
                echo "<li class='nav-item'><a class='nav-link' id='login' href='login.php'>Login</a></li>";
                echo "<li class='nav-item'><a class='nav-link' id='signup' href='signup.php'>Sign-up</a></li>";
              }
           ?>
        </ul>
      </div>
    </div>
  </nav>
</div>
