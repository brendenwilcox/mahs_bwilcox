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
    <link rel="stylesheet" type="text/css" href="main.css">
    <div class="logogrid">
      <a class="box" style="text-decoration: none;" href="signup.php">Home</a>
    </div>
<div class="grid">
  <!--  <a class="box_a" href="index.html"><img src="instaref camera.png" height=100% width="100%"></a> -->
  <a href="about.php"><img class="logogrid" style="float: left;" src=https://images-na.ssl-images-amazon.com/images/I/A1cd6TMkAML._AC_SL1500_.jpg width=5% height=10%></a>
      <a class="box" style="text-decoration: none;" href="login.php">Log in</a>
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<a class="box" style="text-decoration: none;" href="includes/logout.inc.php">Log Out</a>";
            echo "<a class="box" style="text-decoration: none;" href="profile.php">Profile Page</a>";
          }
          else {
            echo "<a class="box" style="text-decoration: none;" href="login.php">Log in</a>";
            echo "<a class="box" style="text-decoration: none;" href="signup.php">Sign Up</a>";
          }
        ?>
      <a class="box" style="text-decoration: none;" href="signup.php">Sign up</a>
    </div>
</head>
<body>
  
    
</body>
</html>