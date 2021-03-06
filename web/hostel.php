<?php
session_start();

if(isset($_REQUEST['hostel_id'])){
    $hostel_name = $_REQUEST['hostel_name'];
    $hostel_id = $_REQUEST['hostel_id'];
}else{
    header("location: ../web/universities.php");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hostel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

        	<!-- icon -->
	<link rel="shortcut icon" href="img/miahLogo.png" >


    <!--  Extra Fonts -->
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/move-in.css">
    <style>
        .ftco-navbar-light {
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            padding: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container"><a class="navbar-brand" href="index.php">Miah</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link" style="color:#000000b8;">Home</a></li>
                    <li class="nav-item"><a href="universities.php" class="nav-link" style="color:#000000b8;">Universities</a></li>

                    <li class="nav-item cta"><a href="login.php" class="nav-link">Login/Signup</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->



    <section class="ftco-section mt-3">
        <div class="container">
            <div class="container">
                <div class="row justify-content-start">
                    <a href="mukhostels.php" class="view-more"><span class="fas fa-backward"></span>&nbsp;&nbsp;Back</a>
                </div>
            </div>
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-1"><?php echo $hostel_name." Hostel"; ?></h2>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 hostel-img">
                        <img src="img/olympia.jpg">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Description</h5>
                            </div>
                            <div class="col-md-12">
                                Joe is a fictitious hostel that is used to illustrate the hostel solution. It is located in Wandegeya and the features below describe it best.
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12 hostel-features">
                                <h5>Features and Services</h5>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                <?php
                                $sql = "SELECT * FROM hostel_features_map WHERE hostel_id='$hostel_id'";

                                $result = $conn->query($sql);
                                    if($result->num_rows>0){
                                        while($data =$result->fetch_assoc()){
                                            $feature_id = $data['feature_id'];
                                                $sqlfeature = "SELECT * FROM hostel_features  WHERE id='$feature_id'";
                                                 $result1 = $conn->query($sqlfeature);
                                                    $row = $result1->fetch_assoc();
                                                 ?>
                                                    <div class="icon"><span class="icon icon-airport_shuttle"></span>&nbsp; - <?php echo $row['name']?><br></div>

                                       <?php
                                        }
              
                                    }  else{
              
                                    }          
                                
                                
                                ?>

                                        <div class="icon"><span class="icon icon-security"></span>&nbsp; - 24/7 Security<br></div>
                                        <div class="icon"><span class="zmdi zmdi-wifi-alt"></span>&nbsp; - Wi-Fi<br></div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="icon"><span class="icon icon-pool"></span>&nbsp; - Swimming Pool <br></div>
                                        <div class="icon"><span class="icon icon-restaurant"></span>&nbsp; - Restaurant<br></div>
                                        <div class="icon"><span class="icon icon-shopping-basket"></span>&nbsp; - Supermarket<br></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row justify-content-center pb-4">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h3 class="mb-1">Room Categories</h3>
                    </div>
                </div>
            </div>
            <div class="container mt-2">
            <?php
                                $sql = "SELECT * FROM room WHERE hostel_id='$hostel_id' AND size='SINGLE'";
                                $result = $conn->query($sql);
                                    if($result->num_rows>0){
                                        $data =$result->fetch_assoc();
                                            $room_price = $data['price'];
                                    
                                    }                                        
                                ?>
                <a href="login.php">
                    <div class="row d-flex mt-4">
                        <div class="col-md-6 room-img">
                            <img src="img/joe-single.jpg">
                        </div>
                        <div class="col-md-5">
                            <h4>Single Room</h4>
                            <h6>Price: <?php echo $room_price;?></h6>
                            <div class="btn btn-success p-3 btn-book">Book Now</div>
                        </div>
                        <div class="col-md-1">
                            <h4 class="bg-secondary text-white text-center"><?php echo $result->num_rows;?></h4>
                            <h6>Available</h6>
                        </div>
                    </div>
                </a>

                <a href="login.php">
                <?php
                                $sql = "SELECT * FROM room WHERE hostel_id='$hostel_id' AND size='DOUBLE'";
                                $result = $conn->query($sql);
                                    if($result->num_rows>0){
                                        $data =$result->fetch_assoc();
                                            $room_price = $data['price'];
                                    
                                    }                                        
                                ?>
                    <div class="row d-flex mt-4">
                        <div class="col-md-6 room-img">
                            <img src="img/joe-double.jpg">
                        </div>
                        <div class="col-md-5">
                            <h4>Double Room</h4>
                            <h6>Price: <?php echo $room_price;?></h6>
                            <div class="btn btn-success p-3 btn-book">Book Now</div>
                        </div>
                        <div class="col-md-1">
                            <h4 class="bg-secondary text-white text-center"><?php echo $result->num_rows;?></h4>
                            <h6>Available</h6>
                        </div>
                    </div>
                </a>

                <a href="login.php">
                <?php
                                $sql = "SELECT * FROM room WHERE hostel_id='$hostel_id' AND size='DOUBLE'";
                                $result = $conn->query($sql);
                                    if($result->num_rows>0){
                                        $data =$result->fetch_assoc();
                                            $room_price = $data['price'];
                                    
                                    }
                                    $conn->close();                                        
                                ?>
                    <div class="row d-flex mt-4">
                        <div class="col-md-6 room-img">
                            <img src="img/joe-tripple.jpg">
                        </div>
                        <div class="col-md-5">
                            <h4>Tripple Room</h4>
                            <h6>Price: <?php echo $room_price;?></h6>
                            <div class="btn btn-success p-3 btn-book">Book Now</div>
                        </div>
                        <div class="col-md-1">
                            <h4 class="bg-secondary text-white text-center"><?php echo $result->num_rows;?></h4>
                            <h6>Available</h6>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </section>
    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2">MiahUg</h2>
                        <p>You don't have to move up and about to find yourself a good hostel anymore. MiahUg is here to cater for your hostel needs without breaking a sweat.</p>
                        <p>Check out our social media platforms </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have any Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">CoCIS, Level 5<br>
	                  Makerere University</span></li>
                                <li><a><span class="icon icon-phone"></span><span class="text">+256 392 929 210</span></a></li>
                                <li><a><span class="icon icon-envelope"></span><span class="text">info@MiahUg.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center"> </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $(".btn-book").click(function() {
                location.href = "login.php";
            });
        });
    </script>
</body>

</html>cript>
</body>

</html>