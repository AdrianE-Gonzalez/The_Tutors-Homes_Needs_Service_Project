It just needs to list current and past appointments. 
It links from a page to confirm am on appointment that in turn links from the search page. 
Add a link to a review page where a person can write a review. I'm using $_SESSIONS as soon as a person signs up or signs in to avoid having to make more sql calls. 
I also changed the navbar to reflect when a person is signed in

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
      <a class="navbar-brand" href="./main.php">
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
            <a class="nav-link" href="./appointments.php">Appointments</a>
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
      
  </body>
</html>