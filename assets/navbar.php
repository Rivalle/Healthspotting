//this file displays the footer on every page and changes whether the user is signed in or not
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
            <a class="nav-link" href="Articles.php">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="EducateYourself.php ">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="CalculateYourself.php">BMI-BMR</a>
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
              }
           ?>
           <li>
             <input type="text" id="search" placeholder="Search">
             <button class="btn btn-success btn-rounded" id="searchbutton" onclick="findText()">Go</button>
           </li>

        </ul>
      </div>
    </div>
  </nav>
</div>
<script type="text/javascript">
//function that search the page for the given word
function findText() {
  let text = document.getElementById("search").value;
  window.find(text);
}
</script>
