<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Alleviate Hunger</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css file  -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <!-- bootstrap-cdn  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- slider -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <!-- fontawesome-cdn  -->
  <script src="https://kit.fontawesome.com/61f1497cf8.js" crossorigin="anonymous"></script>

  

</head>
<body>
  <!-- header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-12">

        </div>
		
        <div class="col-md-4 col-12 text-center">
          <h2 class="my-md-3 site-title primary-color text-white">Alleviate Hunger</h2>
        </div>
       <div class="col-md-4 col-12 text-right">
          <p class="my-md-4 header-links">
            <a href="index.html" class="px-2">LogOut</a>
            <!-- <a href="register.html" class="px-1">Create an Account</a> -->
          </p>
        </div>

      </div>
    </div>
    <div class="container-fluid p-0">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="./images/icon1.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DONATE
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="donatefood.php">FOOD</a>
                <a class="dropdown-item" href="#">MONEY</a>

              </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">HUNGER SPOT</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="volunteer.html">VOLUNTEER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="requestforfood.html">REQUEST FOR FOOD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT US</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>

         <div>
		<b><span style="font-size:  20px; color:white;">Welcome! <?php echo $_SESSION['user']; ?></span></b>
		</div>


  </header>
  <!-- main  -->
  <main>
    <!-- slider -->

    <!-- test -->
    <div id="slider">
      <div id="headerSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
          <li data-target="#headerSlider" data-slide-to="1"></li>
          <li data-target="#headerSlider" data-slide-to="2"></li>
          <li data-target="#headerSlider" data-slide-to="3"></li>
          <!-- <li data-target="#headerSlider" data-slide-to="4"></li> -->

        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/img3.jpg" class="d-block w-100" id="image" >
          </div>
          <div class="carousel-item">
            <img src="images/img1.jpg" class="d-block w-100" id="image">
          </div>
          <div class="carousel-item">
            <img src="images/img4.jpg" class="d-block w-100" id="image">
          </div>
          <div class="carousel-item">
            <img src="images/img5.png" class="d-block w-100" id="image">
          </div>
          <!-- <div class="carousel-item">
          <img src="images/img5.png" class="d-block w-100" id="image">
        </div> -->

      </div>
      <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>



  <!-- test -->
  <!-- slider -->
</main>
<!-- main -->
<!-- footer  -->
<footer>
  <section class="footer">
    <div class="container tex-center">
      <div class="row">
        <div class="col-md-3">
          <h1>Useful links</h1>

          <a href="#" class="header-links1"> <p>Privacy Policy</p></a>
          <a href="#" class="header-links1"><p>Terms Of Use</p></a>
          <a  href="#" class="header-links1"> <p> Donate</p></a>
          <a  href="#" class="header-links1"><p>Create an Account</p></a>

        </div>
        <div class="col-md-3">
          <h1>Company</h1>
          <a href="#" class="header-links1"><p>About Us</p></a>
          <a href="#" class="header-links1"><p>Contact Us</p></a>
          <a href="#" class="header-links1"><p>Career</p></a>
          <a href="#" class="header-links1"><p>Affiliate</p></a>
        </div>
        <div class="col-md-3">
          <h1>Follow Us On</h1>
          <a href="#" class="header-links1"><p><i class="fa fa-facebook-official"></i> Facebook</p></a>
          <a href="#" class="header-links1"><p><i class="fa fa-twitter"></i> Twitter</p></a>
          <a href="#" class="header-links1"><p><i class="fa fa-instagram"></i> Instagram</p></a>
          <a href="#" class="header-links1"><p><i class="fa fa-linkedin"></i> Linkedin</p></a>
        </div>
      </div>
    </div>
  </section>

</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="./js/main.js">

</script>

</body>
</html>
