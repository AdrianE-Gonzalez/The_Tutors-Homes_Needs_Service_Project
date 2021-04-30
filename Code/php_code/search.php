<?php
    $conn = mysqli_connect('localhost', 'admin', 'test1','Homes_Needs_Service');

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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
        <!--  All snippets are MIT license http://bootdey.com/license -->
        <title>Filter search result page - Bootdey.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css-javascript/css/search.css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
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
                            <a class="nav-link" aria-current="page" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Whats New</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="./appointments.php">Appointments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./search.php">Search</a>
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
    <body>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        <div class="container">
            <div class="row">
            <!-- BEGIN SEARCH RESULT -->
            <div class="col-md-12">
                <div class="grid search">
                <div class="grid-body">
                    <div class="row">
                    <!-- BEGIN FILTERS -->
                    <div class="col-md-3">
                        <h2 class="grid-title"><i class="fa fa-filter"></i> Filters</h2>
                        <hr>
                        
                        <!-- BEGIN FILTER BY CATEGORY -->
                        <h4>By category:</h4>
                        <div class="checkbox">
                        <label><input type="checkbox" class="icheck"> Application</label>
                        </div>
                        <div class="checkbox">
                        <label><input type="checkbox" class="icheck"> Design</label>
                        </div>
                        <div class="checkbox">
                        <label><input type="checkbox" class="icheck"> Desktop</label>
                        </div>
                        <div class="checkbox">
                        <label><input type="checkbox" class="icheck"> Management</label>
                        </div>
                        <div class="checkbox">
                        <label><input type="checkbox" class="icheck"> Mobile</label>
                        </div>
                        <!-- END FILTER BY CATEGORY -->
                        
                        <div class="padding"></div>
                        
                        <!-- BEGIN FILTER BY DATE -->
                        <h4>By date:</h4>
                        From
                        <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input1">
                        <input type="text" class="form-control">
                        <a class="btn btn-default" href="#">
                            <i class="fa fa-align-justify" title="Align Justify"></i>
                        </a>                        </div>
                        <input type="hidden" id="dtp_input1" value="">
                        
                        To
                        <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2">
                        <input type="text" class="form-control">
                        <a class="btn btn-default" href="#">
                            <i class="fa fa-align-justify" title="Align Justify"></i>
                        </a>                        </div>
                        <input type="hidden" id="dtp_input2" value="">
                        <!-- END FILTER BY DATE -->
                        
                        <div class="padding"></div>
                        
                        <!-- BEGIN FILTER BY PRICE -->
                        <h4>By price:</h4>
                        Between <div id="price1">$300</div> to <div id="price2">$800</div>
                        <div class="slider-primary">
                        <div class="slider slider-horizontal" style="width: 152px;"><div class="slider-track"><div class="slider-selection" style="left: 30%; width: 50%;"></div><div class="slider-handle round" style="left: 30%;"></div><div class="slider-handle round" style="left: 80%;"></div></div><div class="tooltip top hide" style="top: -30px; left: 50.1px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">300 : 800</div></div><input type="text" class="slider" value="" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="[300,800]" data-slider-tooltip="hide"></div>
                        </div>
                        <!-- END FILTER BY PRICE -->
                    </div>
                    <!-- END FILTERS -->
                    <!-- BEGIN RESULT -->
                    <div class="col-md-9">
                        <h2><i class="fa fa-file-o"></i> Result</h2>
                        <hr>
                        <!-- BEGIN SEARCH INPUT -->
                        <div class="input-group">
                        <form action="" method="GET" name="">
                            <table>
                                <tr>
                                    <td><input id="search" type="text" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" placeholder="Enter your search keywords" class="form-control"/></td>
                                    <td><input type="submit" name="" value="Search" /><i class="fa fa-search"></i></td>
                                    
                                </tr>
                                
                            </table>      
                           
                            <p>Showing all results matching "<?php echo isset($_GET['search']) ? $_GET['search'] : '';  ?>"</p>

                        </form>
                        
                        </div>
                        <?php 

                            $link = mysqli_connect('localhost', 'admin', 'test1','Homes_Needs_Service');
                            if(isset($_REQUEST["search"])){
                                // Prepare a select statement
                                $sql = "SELECT SERVICERS.Average_Rating, SERVICERS.Distance_From_Address, SERVICES.Service
                                        FROM SERVICERS, SERVICES, PROVIDESSERVICE
                                        WHERE SERVICES.Service LIKE ? AND
                                            PROVIDESSERVICE.Servicer_ID= SERVICERS.Servicer_ID AND
                                            PROVIDESSERVICE.Service= SERVICES.Service";
                                // Check connection
                                if($link === false){
                                    die("ERROR: Could not connect. " . mysqli_connect_error());
                                }
                                if($stmt = mysqli_prepare($link, $sql)){
                                    // Bind variables to the prepared statement as parameters
                                    mysqli_stmt_bind_param($stmt, "s", $param_term);
                                    
                                    // Set parameters
                                    $param_term = $_REQUEST["search"] . '%';
                                    
                                    // Attempt to execute the prepared statement
                                    if(mysqli_stmt_execute($stmt)){
                                        $result = mysqli_stmt_get_result($stmt);
                                        ?>
                                        <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col"></th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Rating</th>
                                                            <th scope="col">Distance From Address</th>
                                                            </tr>
                                                        </thead>
                                      <?php  // Check number of rows in the result set
                                        if(mysqli_num_rows($result) > 0){
                                            // Fetch result rows as an associative array
                                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                                ?>
    
                                                        <tbody><tr>
                                                        <td class="number text-center">1</td>
                                                        <td class="image"><img src="https://via.placeholder.com/400x300/FF8C00" alt=""></td>
                                                        <td class="product"><strong><?php echo htmlspecialchars($row['Service']); ?></strong><br>This is the product description.</td>
                                                        <td class="rate text-right"><?php echo htmlspecialchars($row['Average_Rating']); ?></td>
                                                        <td class="price text-right"><?php echo htmlspecialchars($row['Distance_From_Address']); ?></td>
                                                        </tr>
                                                        
                                                    </tbody>
                                    <?php
                                            }?>
                                            </table>
                                                    </div>
                                        <?php
                                        } else{
                                            echo "<p>No matches found</p>";
                                        }
                                    } else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                                }
                                // Close statement
                                mysqli_stmt_close($stmt);
                            }
                            // close connection
                            mysqli_close($link);
                        ?>
                        <!-- END SEARCH INPUT -->
                        
                        <div class="padding"></div>
                        
                        <div class="row">
                        <!-- BEGIN ORDER RESULT -->
                        <div class="col-sm-6">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Order by
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Name</a></li>
                                    <li><a class="dropdown-item" href="#">Rating</a></li>
                                    <li><a class="dropdown-item" href="#">Distance From Address</a></li>
                                </div>
                            </div>
                        </div>

                        <!-- END ORDER RESULT -->
                        
                        <div class="col-md-6 text-right">
                            <div class="btn-group">
                            <button type="button" class="btn btn-default active"><i class="fa fa-list" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-th" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        </div>
                        
                        <!-- BEGIN TABLE RESULT -->
                        <!-- <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col"></th>
                                <th scope="col">Name</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Distance From Address</th>
                                </tr>
                            </thead>
                            <?php //foreach($HNS as $hns){ ?>
                                <tbody><tr>
                                <td class="number text-center">1</td>
                                <td class="image"><img src="https://via.placeholder.com/400x300/FF8C00" alt=""></td>
                                <td class="product"><strong>Product 1</strong><br>This is the product description.</td>
                                <td class="rate text-right"><?php// echo htmlspecialchars($hns['Average_Rating']); ?></td>
                                <td class="price text-right"><?php// echo htmlspecialchars($hns['Distance_From_Address']); ?></td>
                                </tr>
                            <?php //} ?>
                            
                        </tbody></table>
                        </div> -->
                        <!-- END TABLE RESULT -->
                        
                        <!-- BEGIN PAGINATION -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                        <!-- END PAGINATION -->
                    </div>
                    <!-- END RESULT -->
                    </div>
                </div>
                </div>
            </div>
            <!-- END SEARCH RESULT -->
            </div>
        </div>

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>