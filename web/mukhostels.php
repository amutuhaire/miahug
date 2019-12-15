<?php
session_start();

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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Makerere University | Hostels</title>
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
    <link rel="stylesheet" href="css/move-in.css">

    	<!-- icon -->
	<link rel="shortcut icon" href="img/miahLogo.png" >
    
    <!--  Extra Fonts -->
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container"><a class="navbar-brand" href="index.php">Miah</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="universities.php" class="nav-link">Universities</a></li>
	          
	          <li class="nav-item cta"><a href="login.php" class="nav-link">Login/Signup</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('img/muk.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
    </section>
		<div class="row container mx-auto">
        <div class="col-md-12 text-center mt-4 mb-4">
				<h1 class="mb-3">Makerere University Hostels</h1>
			</div>
		</div>
    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row">
              <?php
                                
                  $sql = "SELECT * FROM hostel WHERE university_id='1'";

                  $result = $conn->query($sql);
                      if($result->num_rows>0){
                          while($data =$result->fetch_assoc()){
                            $hostel_id = $data['id'];
                            $hostel_name =$data['name'];
                            ?>
                            <div class="col-md-4 ftco-animate">
                            <div class="project-wrap">
                             <a href="joe.php">
                                 <div class="d-flex align-items-center mb-4 topp">
                                   <?php echo $hostel_name; ?>
                                 </div>
                             </a>
                               <a href="hostel.php?<?php echo "hostel_id=".$hostel_id."&hostel_name=".$hostel_name; ?>" class="img" style="background-image: url(img/olympia.jpg);"></a>
                               <div class="text p-4">
                                 <p class="location"><span class="icon icon-map-marker"></span> <?php echo $data['location'];?><br>
                                   <span class="zmdi zmdi-male-female"></span> Male and Female</p>
                                 <ul>
                                   <?php
                                  $sqlRooms = "SELECT * FROM room  WHERE hostel_id='$hostel_id' AND occupation_status='VACCANT'";
                                   $result1 = $conn->query($sqlRooms);
                                   ?>
                                   <li><span class="no-rooms"><?php echo $result1->num_rows; ?></span>Available Rooms</li>
                                 </ul>
                               </div>
                             </div>
                         </div>
                         <?php
                          }

                      }  else{

                      }          
                  $conn->close();
                                
              ?>

        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
                <a href="aryan.html">
                    <div class="d-flex align-items-center mb-4 topp">
                        Aryan
                      </div>
                </a>
        			<a href="aryan.html" class="img" style="background-image: url(img/aryan.jpg);"></a>
        			<div class="text p-4">
        			  <p class="location"><span class="icon icon-map-marker"></span> Wandegeya
        			  <br>
        			    <span class="zmdi zmdi-male-female"></span> Male and Female</p>
        			  <ul>
        			    <li><span class="no-rooms">20</span>Available Rooms</li>
      			    </ul>
		          </div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="muhika.html" class="img" style="background-image: url(img/muhika.png);"></a>
        			<a href="muhika.html"><div class="d-flex align-items-center mb-4 topp">
                                Muhika
					</div></a>
        			<div class="text p-4">
        			  <p class="location"><span class="icon icon-map-marker"></span> Kikoni<br>
        			    <span class="zmdi zmdi-male-female"></span> Male and Female</p>
        			  <ul>
  <li><span class="no-rooms">10</span>Available Rooms</li>
</ul>
       			  </div>
        		</div>
        	</div>
        </div>
        </div>
    </section>

    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
  <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md">
            <div class="ftco-footer-widget">
              <h2 class="ftco-heading-2">Miah</h2>
              <p>You don't have to move up and about to find yourself a good hostel anymore. Miah is here to cater for your hostel needs without breaking a sweat.</p>
              <p>Check out our social media platforms </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a ><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a ><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a ><span class="icon-instagram"></span></a></li>
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
	                <li><a ><span class="icon icon-phone"></span><span class="text">+256 392 929 210</span></a></li>
	                <li><a ><span class="icon icon-envelope"></span><span class="text">info@movein.com</span></a></li>
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
    <script src="js/miah/miah.main.js"></script>

</body>

</html>
