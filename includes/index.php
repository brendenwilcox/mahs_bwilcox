<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="footerstyle.css">
</head>

<body>
<?php include 'header2.php';?>

  <h1 class="title">We Are InstaRef</h1>
  <h3 class="title">Never have a bad call again</h3>

  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img width=500px height=500px src="https://scontent-atl3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/130882003_202694191499638_7622284923803072616_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_cat=110&_nc_ohc=lcy7jCMdcEkAX8j6VR5&tp=1&oh=e7f6125924678c4373c598f9a5647cc2&oe=6001C428" height=20% width=100%>
      <div class="text">a</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img width=500px height=500px src="https://scontent-atl3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/131354746_2171398452994507_8300723865119097800_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_cat=107&_nc_ohc=NIB-ich5RsAAX_fz61P&tp=1&oh=227b9eac9e45ea61f0408425c9c72a68&oe=6002EC55" height="20%" width="100%">
      <div class="text">b</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img width=500px height=500px src="https://scontent-atl3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/131334994_210376903918070_1676970809018492249_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_cat=102&_nc_ohc=BqajE18mhEUAX8xwLGA&tp=1&oh=2240191f231091f2a057eb2db3fbc076&oe=5FFF634F" height="20%" width="100%">
      <div class="text">c</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img width=500px height=500px src="https://scontent-atl3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/131044447_1698774970280921_2781570689583030506_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_cat=105&_nc_ohc=OrwizhD_cdYAX-yXVVy&tp=1&oh=10309c66d28a4d11990a3127bfdb5f34&oe=60012AD7" height="20%" width="100%">
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