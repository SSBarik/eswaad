<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>eSwaad | Sambalpur </title>
		<meta charset="UTF-8">
		<meta name="viewport"content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Fredericka the Great' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Arbutus' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Frijole' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
		<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css'> 
		<!-- the Fabicon -->
		<link rel="shortcut icon" href="img/fab.png" type="image/x-icon">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<!-- External Stylings -->
		<link rel="stylesheet" href="css/vstyles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	</head>
	<body onload = "startTimer()">
		
		<!--Fixed-Top Navigation Bar-->
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top navbar-shadow" data-aos="">
			<a data-aos="fade-right" class="navbar-brand" href="#" style="color:#020B37;font-family: 'Acme';font-size: 30px;padding:0px;margin-left:10px;" ><span style="color:orange;">e-Food</span><span style="color:grey;">SBP</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
				<ul class="navbar-nav" data-aos="";>
					<li class="nav-item   box-shadow" data-aos="fade-in">
						<a class="nav-link" style="box-shadow: 0 1px 8px 0 orange, 0 5px 10px 0 black;background-color:orange;color:white;" href="index.php"><i class="fas fa-home"></i><span style="color:#FFFDE7;"> Home</span></a>
					</li>
					<!-- Dropdown -->
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle"  href="#" id="navbardrop" data-toggle="dropdown">
						<i class="fas fa-ellipsis-v"></i> <span style="color:#FFFDE7;">Categories</span>
					  </a>
					  <div class="dropdown-menu">
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid lightblue;" href="organic.php">Organic Basket</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid brown;" href="regional.php">Regional Cuisine</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid pink;" href="homemade.php">Homemade Delights</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid yellow;" href="#">Street Food</a>
					  </div>
					</li>
						
					<?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li class="nav-item">
						<a class="nav-link"   href="settings.php"><i class="fas fa-user-alt"></i> <span style="color:#FFFDE7;">My Account</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link"   href="cart.php"><i class="fas fa-shopping-cart"></i> <span style="color:#FFFDE7;">Cart</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link"   href="logout_script.php"><i class="fas fa-sign-out-alt"></i> <span style="color:#FFFDE7;">Logout</span></a>
					</li>
					
					
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
						<a class="nav-link"   href="signup.php"><i class="fas fa-user-plus"></i> <span style="color:#FFFDE7;">SignUp</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link"   href="login.php"><i class="fas fa-sign-in-alt"></i> <span style="color:#FFFDE7;">Login</span></a>
					</li>
					    <?php
                    }
                    ?>
													
				</ul>
			</div>  
		</nav>
		<!--#NAV_end-->
		
		<!-- Carousel & Quote -->
		<div class="jumbotron" style="background:transparent;" data-aos="zoom-in">
			<div class="container">
				</br></br>
				<div class="row">
					<div id="carouselExampleIndicators" class="carousel slide carousel-fade col-lg-8" data-ride="carousel" data-interval="1000">
					  <ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					  </ol>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img class="d-block w-100 img-thumbnail img-fluid img-thumbnail img-fluid" src="img/1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100 img-thumbnail img-fluid" src="img/2.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100 img-thumbnail img-fluid" src="img/3.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100 img-thumbnail img-fluid" src="img/4.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100 img-thumbnail img-fluid" src="img/5.jpg" alt="Third slide">
						</div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
					<div class="col-lg-3 offset-lg-1 col-10 offset-1">
						</br></br>
						<center><p data-aos="fade-up" style="background:black;opacity:0.5;color:white;padding:20px;font-size:15px;border: 6px solid brown;"><i style="font-size:24px" class="fa">&#xf10d;</i></br> Keep calm, </br></br>key to a healthy livelihood </br>is fresh & organic food.</br><i style="font-size:24px" class="fa">&#xf10e;</i> </br></br>_Fresh Vegie Team</br></p></center>
					</div>
				</div>
			</div>
		</div>
		<!--#C&Q_end-->
		
		<!-- Items -->
		<div id="products" class="container-fluid" style="background: orange;box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.19);">
			
			<div>
				</br></br>
				
				<!--Categories Section-->
				<div class="row">
					<div class="col-lg-3 col-6"  data-aos="zoom-in">
					</br></br>
					<a href="organic.php">
						<div class="card box-shadow xelevate">
							</br>
							<center><img class="card-img-top img-fluid" src="img/organic.png" alt="Card image" style="height:30%;width:30%;"><center>
							<div class="card-body" >
							  <center><h4 class="card-title" style="font-family:'Croissant One';">Organic  Basket</h4></center> 
							</div>
						  </div>
						 </a>
					</div>	
					<div class="col-lg-3 col-6"  data-aos="zoom-in">
					</br></br>
					  <a href="regional.php">
						  <div class="card box-shadow xelevate">
						  </br>
						  <center><img class="card-img-top img-fluid" src="img/home.png" alt="Card image" style="height:30%;width:30%;"><center>
							<div class="card-body">
							  <center><h4 class="card-title" style="font-family:'Croissant One';">Regional Cuisine</h4></center> 
							</div>
						  </div>
						  </a>
					</div>	
					<div class="col-lg-3 col-6"  data-aos="zoom-in">
					</br></br>
						<a href="homemade.php">
						  <div class="card box-shadow xelevate">
						  </br>
						  <center><img class="card-img-top img-fluid" src="img/rest.png" alt="Card image" style="height:30%;width:30%;"><center>
							<div class="card-body">
							  <center><h4 class="card-title" style="font-family:'Croissant One';">Homemade Delights</h4></center> 
							</div>
						  </div>
						</a>
					</div>	
					<div class="col-lg-3 col-6"  data-aos="zoom-in">
					</br></br>
					<a href="street.php">
						<div class="card box-shadow xelevate">
					  </br>
					  <center><img class="card-img-top img-fluid" src="img/street.png" alt="Card image" style="height:30%;width:30%;"><center>
						<div class="card-body">
						  <center><h4 class="card-title" style="font-family:'Croissant One';">Street Food</h4></center> 
						</div>
					  </div>
					 </a>
					</div>		
				</div>
				</br>
			</div>
			<br/><br/><br/>
		</div>
		<!--#Items_end-->
		
		
		
		<!-- MOdal yahan hai-->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
				  
					<!-- Modal Header -->
					<div class="modal-header">
							<h4 id="mTitle" class="modal-title"></h4>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					
					<!-- Modal body -->
					<div class="modal-body">
					  <img id="imgM" src="" class="img-fluid" alt="">
					  <hr/>
					  <p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
					  <a href="#" class="btn btn-success box-shadow"  >Buy now</a>
					</div>
					
					<!-- Modal footer -->
					<div class="modal-footer">
					  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
						
				</div>
			</div>
		</div>
		<!--#Modal_end-->
		
		<!-- Footer Division-->
		<footer class="container-fluid bg-dark" style="color:#FFFDE7; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.19);">
			</br>
			<center><p>Copyright © 2018 <span><a href="http://bhimamandali.com/" target="_blank" style="color:lightblue;font-size:15px;"><strong>e<span style="color:lightgreen;">Swaad</span></strong></a></span>. All rights reserved.</p>
					<p>Developed by team <span><a href="http://ssbsuiit.github.io/snskrit/" target="_blank" style="color:orange;font-size:16px;"><strong>SNSKRIT</strong></a></span></p>
			</center>
			</br>
		</footer>	
		<!--#Footer_end-->
		

		
		<!--JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<!--AOSjs-->
		<script src='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js'></script>
		<script>
			AOS.init({
				duration: 1200,
			})
		</script>
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>

		<!--Modal JS-->
		<script>
			function changeModal(id) {
		  
				if(id==1){
					document.getElementById("mTitle").innerHTML="Peanut";
					document.getElementById("imgM").src="img/1.jpg";
				}
				else if(id==2){
					document.getElementById("mTitle").innerHTML="Almond";
					document.getElementById("imgM").src="img/2.jpg";
				}
				else if(id==3){
					document.getElementById("mTitle").innerHTML="Cashew";
					document.getElementById("imgM").src="img/3.jpg";
				}
				else if(id==4){
					document.getElementById("mTitle").innerHTML="Walnut";
					document.getElementById("imgM").src="img/5.jpg";
				}
				else
					document.getElementById("imgM").src="img/4.jpg";
			}
		</script>
		<!--#JS_end-->

	</body>
</html>