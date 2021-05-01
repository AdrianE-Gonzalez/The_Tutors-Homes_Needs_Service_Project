<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbproject";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if(!$conn){
        echo 'Connection Error: ' . mysqli_connect_error();
    }

    // Gets Columns From Table Specified
    $sql = 'SELECT Average_Rating, Distance_From_Address FROM SERVICERS';

    // Stores Columns Into Variable
    $results= mysqli_query($conn, $sql);

    $HNS = mysqli_fetch_all($results, MYSQLI_ASSOC);

    // Free Database From Memory
    mysqli_free_result($results);

    // Close Connection
    mysqli_close($conn);

?>

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
    <link rel="stylesheet" href="../css-javascript/css/appointments.css">

    <!-- Custom styles for this template -->
  </head>
  <body>
    
<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Home Needs</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./main.php">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="./appointments.php">Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./search.php">Search</a>
            </li>
        </ul>
        <?php if(isset($_SESSION['email'])) {?>
          <a style="margin-right: 5px" href="./SignIn.php" class="btn btn-outline-success">Sign In</a>
          <a href="./SignUp.php" class="btn btn-outline-success">Sign Up</a>
        <?php } else{?>
          <a style="margin-right: 5px" href="./SignOut.php" class="btn btn-outline-danger">Sign Out</a>
          <a href="./profile.php" class="btn btn-outline-success">View Profile</a>
        <?php }?>
      </div>
    </div>
  </nav>
</header>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
<div class="floatLeft">
<tr><table>
<tr><td class="box3_t">
    <?php 
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * from appointments";
        $result = $conn->query($sql);
                           
                                        
    ?>
    <div class="table-responsive">
                        <table class="table table-hover">
                        <h1>Appointments</h1>

                        <thead>
                                <tr>
                                <th scope="col">Appointment ID</th>
                                <th scope="col">Special Instructions</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Service</th>
                                <th scope="col">Address Number</th>
                                <th scope="col">Street</th>
                                <th scope="col">Zip Code</th>
                                <th scope="col">City</th>
                                <th scope="col">State</th>

                                </tr>
                            </thead>
                            <?php foreach($result as $hns){ ?>
                                <tbody><tr>
                                <td class="number text-center"><?php echo htmlspecialchars($hns['Appointment_ID']); ?></td>
                                <td class="text text-right"><?php echo htmlspecialchars($hns['Special_Instructions']); ?></td>
                                <td class="date text-right"><?php echo htmlspecialchars($hns['Date']); ?></td>
                                <td class="time text-right"><?php echo htmlspecialchars($hns['Time']); ?></td>
                                <td class="text text-right"><?php echo htmlspecialchars($hns['Service']); ?></td>
                                <td class="number text-center"><?php echo htmlspecialchars($hns['Address_Number']); ?></td>
                                <td class="text text-center"><?php echo htmlspecialchars($hns['Street']); ?></td>
                                <td class="number text-center"><?php echo htmlspecialchars($hns['Zip_Code']); ?></td>
                                <td class="text text-center"><?php echo htmlspecialchars($hns['City']); ?></td>
                                <td class="text text-center"><?php echo htmlspecialchars($hns['State']); ?></td>

                                </tr>
                            <?php } ?>
                            
                        </tbody></table>
                        </div> 
<tr><td class="box3_b"></td></tr>
</td></tr></table>
</div>  </div>

  </body>
</html>