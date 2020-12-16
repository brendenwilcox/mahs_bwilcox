<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
<?php include 'header2.php';?>

  <div>
    <h1 class="title">We Are InstaRef</h1>
    <h3 class="title">Never have a bad call again</h3>
  </div>
<!--
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://scontent-atl3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/130882003_202694191499638_7622284923803072616_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_cat=110&_nc_ohc=lcy7jCMdcEkAX8j6VR5&tp=1&oh=e7f6125924678c4373c598f9a5647cc2&oe=6001C428" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
-->

<div class="slideshow-container">
    <div class="mySlides fade" style="opacity: 1;">
      <img width=500px height=500px src="https://scontent-atl3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/130882003_202694191499638_7622284923803072616_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_cat=110&_nc_ohc=lcy7jCMdcEkAX8j6VR5&tp=1&oh=e7f6125924678c4373c598f9a5647cc2&oe=6001C428" height=20% width=100%>
    </div>

    <div class="mySlides fade" style="opacity: 1;">
      <img width=500px height=500px src="https://scontent-atl3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/131354746_2171398452994507_8300723865119097800_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_cat=107&_nc_ohc=NIB-ich5RsAAX_fz61P&tp=1&oh=227b9eac9e45ea61f0408425c9c72a68&oe=6002EC55" height="20%" width="100%">
    </div>

    <div class="mySlides fade" style="opacity: 1;">
      <img width=500px height=500px src="https://scontent-atl3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/131334994_210376903918070_1676970809018492249_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_cat=102&_nc_ohc=BqajE18mhEUAX8xwLGA&tp=1&oh=2240191f231091f2a057eb2db3fbc076&oe=5FFF634F" height="20%" width="100%">
    </div>

    <div class="mySlides fade" style="opacity: 1;">
      <img width=500px height=500px src="https://scontent-atl3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/131044447_1698774970280921_2781570689583030506_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_cat=105&_nc_ohc=OrwizhD_cdYAX-yXVVy&tp=1&oh=10309c66d28a4d11990a3127bfdb5f34&oe=60012AD7" height="20%" width="100%">
    </div>
    <a class="prev" style="opacity: 1;" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" style="opacity: 1;" onclick="plusSlides(1)">&#10095;</a>
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
</div>
<div style="flex-direction: row; display: flex; left: 25%; position: absolute;">
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">InstaRef Camera</h5>
    <p class="card-text" style="font-size: 16px;">Use this camera for your pickup basketball games and get every foul call perfect!</p>
    <a href="order.php" class="btn btn-primary">Order</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">InstaRef Camera</h5>
    <p class="card-text" style="font-size: 16px;">Use this camera for your pickup basketball games and get every foul call perfect!</p>
    <a href="order.php" class="btn btn-primary">Order</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">InstaRef Camera</h5>
    <p class="card-text" style="font-size: 16px;">Use this camera for your pickup basketball games and get every foul call perfect!</p>
    <a href="order.php" class="btn btn-primary">Order</a>
  </div>
  </div>
  </div>
  <a class="box" type="button" style="font-size: 32px; text-decoration: none; margin-top: 400px;" href="about.php">Learn more about us</a>

<?php include 'footer.php';?>

</body>
</html>