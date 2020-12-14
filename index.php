<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="footerstyle.css">
    
 <a href="about.php"><img class="logogrid" style="float: left;" src=https://images-na.ssl-images-amazon.com/images/I/A1cd6TMkAML._AC_SL1500_.jpg width=5% height=10%></a>
<?php include 'header2.php';?>
 
</head>
<body>
  <h1 class="title">We Are InstaRef</h1>
  <h3 class="title">Never have a bad call again</h3>

  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img src="#" height=20% width=100%>
      <div class="text">a</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="#" height="20%" width="100%">
      <div class="text">b</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="#" height="20%" width="100%">
      <div class="text">c</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img src="#" height="20%" width="100%">
      <div class="text">d</div>
    </div>


    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)" width="100%" height="100%"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>

  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
  <a class="box" type="button" style="font-size: 32px; text-decoration: none;" href="about.php">Learn more about us</a>

<?php include 'footer.php';?>

</body>
</html>