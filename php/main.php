<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<body>

  <?php
    $page="home";
    include "include/nav.php";
   ?>


  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item  active">
        <div class="banner" style="background-image: url(../images/carousel1.jpg)"></div>
      </div>
      <div class="carousel-item ">
        <div class="banner" style="background-image: url(../images/carousel2.jpg)"></div>
      </div>
      <div class="carousel-item ">
      </div>
      <div class="banner" style="background-image: url(../images/carousel3.jpg)"></div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <section class="service">
    <div class="container">
      <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-7 text-center">
          <span class="subheading">Welcome to Roxandrea Hotel</span>
          <h2 class="mb-4">A New Vision of Luxury Hotel</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="service_blocks col-3">
          <i class="icon fas fa-concierge-bell"></i>
          <a>
            <h4>Friendly Service</h4>
          </a>
        </div>
        <div class="service_blocks col-3">
          <i class="icon fas fa-concierge-bell"></i>
          <a>
            <h4>Friendly Service</h4>
          </a>
        </div>
        <div class="service_blocks col-3">
          <i class="icon fas fa-concierge-bell"></i>
          <a>
            <h4>Friendly Service</h4>
          </a>
        </div>

      </div>
    </div>
  </section>


  <?php
    include "include/footer.php";
   ?>
