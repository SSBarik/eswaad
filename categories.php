<!DOCTYPE html>
<html lang="en">
	<head>
		<title>e-Food | Sambalpur </title>
		<meta charset="UTF-8">
		<meta name="viewport"content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
		<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css'> 
		<!-- the Fabicon -->
		<link rel="shortcut icon" href="img/l.png" type="image/x-icon">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<!-- External Stylings -->
		<link rel="stylesheet" href="css/vstyles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	</head>
	<body>
		
		<!--Fixed-Top Navigation Bar-->
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top navbar-shadow" data-aos="zoom-out">
			<a class="navbar-brand" href="#" style="color:#020B37;font-family: 'Acme';font-size: 30px;padding:0px;margin-left:10px;" ><span style="color:orange;">e-Food</span><span style="color:grey;">SBP</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
				<ul class="navbar-nav" data-aos="zoom-in";>
					<li class="nav-item">
						<a class="nav-link" href="sbp.html"><i class="fas fa-home"></i> Home</a>
					</li>
					<!-- Dropdown -->
					<li class="nav-item dropdown  box-shadow">
					  <a class="nav-link dropdown-toggle" style="background-color:orange;color:white;" href="#" id="navbardrop" data-toggle="dropdown">
						<i class="fas fa-ellipsis-v"></i> <span style="color:#FFFDE7;">Categories</span>
					  </a>
					  <div class="dropdown-menu">
						<a class="dropdown-item  nav-elevate" style="border-left: 4px solid #64DD17;" href="#">Street Food</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 4px solid yellow;" href="#">Fruits</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 4px solid orange;" href="#">Nuts</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 4px solid pink;" href="#">Rice & Dal</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 4px solid lightblue;" href="#">Seasonal Basket</a>
					  </div>
					</li>
					<li class="nav-item">
						<a class="nav-link"   href="#"><i class="fas fa-user-alt"></i> <span style="color:#FFFDE7;">My Account</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link"   href="#"><i class="fas fa-shopping-cart"></i> <span style="color:#FFFDE7;">Cart</span></a>
					</li><li class="nav-item">
						<a class="nav-link"   href="#"><i class="fas fa-user-plus"></i> <span style="color:#FFFDE7;">SignUp</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link"   href="#"><i class="fas fa-sign-in-alt"></i> <span style="color:#FFFDE7;">Login</span></a>
					</li>									
				</ul>
			</div>  
		</nav>
		
		</br></br>
		
		<!--Street Food Section-->
		<div class="container-fluid" style="background: brown;box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.19);">
			</br></br>
			<center><a href="#" data-aos="zoom-out" class="btn btn-outline-info btn-lg box-shadow">Street Food <span class="badge badge-light">10</span></a>
			</center>
			<div class="row">	
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(1)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Peanut</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/1.jpg" alt="Card image" style="width:100%">
					</div>
				</div>	
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(2)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Almond</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/2.jpg" alt="Card image" style="width:100%">
					</div>
				</div>
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(3)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Cashew</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/3.jpg" alt="Card image" style="width:100%">
					</div>
				</div>	
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(4)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Walnut</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/5.jpg" alt="Card image" style="width:100%">
					</div>
				</div>
			</div>
			</br>
			<a href="#" data-aos="slide-right" class="btn btn-primary box-shadow float-right">Show more ></a>
			</br></br></br>
		</div>
		
		<!--Authentic Food Section-->
		<div class="container-fluid" style="background: lightblue;box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.19);">
			</br></br>
			<center><a href="#" data-aos="zoom-out" class="btn btn-outline-info btn-lg box-shadow">Desi Food <span class="badge badge-light">10</span></a>
			</center>
			<div class="row">	
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(1)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Peanut</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/1.jpg" alt="Card image" style="width:100%">
					</div>
				</div>	
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(2)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Almond</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/2.jpg" alt="Card image" style="width:100%">
					</div>
				</div>
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(3)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Cashew</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/3.jpg" alt="Card image" style="width:100%">
					</div>
				</div>	
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(4)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Walnut</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/5.jpg" alt="Card image" style="width:100%">
					</div>
				</div>
			</div>
			</br>
			<a href="#" data-aos="slide-right" class="btn btn-primary box-shadow float-right">Show more ></a>
			</br></br> </br>
		</div>
		<!--Western Food Section-->
		<div class="container-fluid" style="background: orange;box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.19);">
			</br></br>
			<center><a href="#" data-aos="zoom-out" class="btn btn-outline-info btn-lg box-shadow">Western Food <span class="badge badge-light">10</span></a>
			</center>
			<div class="row">	
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(1)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Peanut</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/1.jpg" alt="Card image" style="width:100%">
					</div>
				</div>	
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(2)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Almond</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/2.jpg" alt="Card image" style="width:100%">
					</div>
				</div>
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(3)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Cashew</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/3.jpg" alt="Card image" style="width:100%">
					</div>
				</div>	
				<div class="col-lg-3 col-6"  data-aos="zoom-in">  
					</br></br>
					<div class="card box-shadow elevate" onclick="changeModal(4)" data-toggle="modal" data-target="#myModal">
						<div class="card-body">
							<h4 class="card-title">Walnut</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/5.jpg" alt="Card image" style="width:100%">
					</div>
				</div>
			</div>
			</br>
			<a href="#" data-aos="slide-right" class="btn btn-primary box-shadow float-right">Show more ></a>
			</br></br> </br>
		</div>
		
		
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
				
		
		<!-- Footer Division-->
		<footer class="container-fluid bg-dark" style="color:#FFFDE7; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.19);">
			</br>
			<center><p>Copyright © 2018 <span><a href="http://bhimamandali.com/" target="_blank" style="color:lightblue;font-size:15px;"><strong>Fresh<span style="color:lightgreen;">Vegie</span></strong></a></span>. All rights reserved.</p>
					<p>Developed by team <span><a href="http://bhimamandali.com/" target="_blank" style="color:orange;font-size:16px;"><strong>SNSKRIT</strong></a></span></p>
			</center>
			</br>
		</footer>	
		
		<!--JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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

	</body>
</html>