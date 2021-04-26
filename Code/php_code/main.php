<!doctype html>
<html lang="en">
  <head>
    <title>Homes Needs Service</title>\

    <link rel="icon" href="../../Images/Icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../../Images/Icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../Images/Icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../Images/Icons/favicon-16x16.png">
    <link rel="manifest" href="../../Images/Icons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Carousel Template · Bootstrap v5.0</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css-javascript/css/main.css">
    <!-- Custom styles for this template -->
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img src="../../Images/HNS.png" width="64" height="50"> 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Whats New</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./search.php">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <button style="margin-right: 5px" class="btn btn-outline-success" type="submit">Sign In</button>
        <button class="btn btn-outline-success" type="submit">Sign Up</button>
      </div>
    </div>
  </nav>
</header>
<main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img width="100%" height="100%" src="../../Images/home.jpg" alt="Home">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Homes Needs Service</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
  </div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Find Local Professionals Near You!</h2>
        <p class="lead">There are plenty of highly qualified individuals in your area to help fix your problem right now.</p>
      </div>
      <div class="col-md-5">
      <img style="max-width: 500px; max-height: 500px" src="../../Images/womanInSuit.jpg" alt="Woman In Suit">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Find anything from a landscaper to a plumber with ease.</h2>
        <p class="lead">We have professionals registered on our site in areas such as book keeping, babysitting, house cleaning, and much more!</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img style="max-width: 500px; max-height: 500px" src="../../Images/plumber.jpg" alt="Plumber">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">All of our users are verified to be real people.</h2>
        <p class="lead">We believe that trust and piece of mind are central to business, and our verification process ensures that!</p>
      </div>
      <div class="col-md-5">
      <img style="max-width: 500px; max-height: 500px" src="../../Images/shakingHands.jpg" alt="Shaking Hands">
      </div>
    </div>
    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
  </div><!-- /.container -->
  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021 My Home Needs Service, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      
  </body>
</html>