<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <a href="about.php"><img class="logogrid" style="float: left; width: 66px; min-width: 0%!important;" src=https://images-na.ssl-images-amazon.com/images/I/A1cd6TMkAML._AC_SL1500_.jpg></a>
  <!--  <a class="box_a" href="index.html"><img src="instaref camera.png" height=100% width="100%"></a> -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">InstaRef</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <?php
        if (isset($_SESSION["useruid"])) {
          echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile Page</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Log Out</a></li>";
        }
        else {
          echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign Up</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='login.php'>Log In</a></li>";
        }
      ?>     
      </ul>
    </div>
  </div>
</nav>
    
  
</head>
<body>
  
    
</body>
</html>