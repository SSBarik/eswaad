<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Swaad | Sambalpur </title>
		<meta charset="UTF-8">
		<meta name="viewport"content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Monofett' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet'>
		<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css'> 
		<!-- the Fabicon -->
		<link rel="shortcut icon" href="img/l.png" type="image/x-icon">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<!-- External Stylings -->
		<link rel="stylesheet" href="css/vstyles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	</head>
	<body>
		
		<?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
		<!--Fixed-Top Navigation Bar-->
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top navbar-shadow" data-aos="">
			<a class="navbar-brand" href="#" style="color:#020B37;font-family: 'Acme';font-size: 30px;padding:0px;margin-left:10px;" ><span style="color:orange;">e-Food</span><span style="color:grey;">SBP</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
				<ul class="navbar-nav" data-aos="";>
					 <li class="nav-item">
						<a class="nav-link" href="index.php"><i class="fas fa-home"></i><span style="color:#FFFDE7;"> Home<span></a>
					</li>
					<!-- Dropdown -->
					<li class="nav-item dropdown  box-shadow" data-aos="fade-in">
					  <a class="nav-link dropdown-toggle" style="box-shadow: 0 1px 8px 0 lightblue, 0 5px 10px 0 black;background-color:lightblue;color:#FFF;" href="#" id="navbardrop" data-toggle="dropdown">
						<i class="fas fa-ellipsis-v"></i> <span style="color:#FFFDE7;">Categories</span>
					  </a>
					  <div class="dropdown-menu">
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid ligtblue;" href="#">Organic Basket</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid brown;" href="regional.php">Regional Cuisine</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid pink;" href="homemade.php">Homemade Delights</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid #FFC300;" href="street.php">Street Food</a>
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
		
		</br></br>
		
		<!--Items-->
		<div class="container-fluid" style="background: lightblue;box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.19);">
			</br></br>
			<div class="col-lg-4 offset-lg-4">
				<center>
				<h1 data-aos="" style="-webkit-box-shadow: inset -1px -2px 47px 9px rgba(87,81,87,0.33);
-moz-box-shadow: inset -1px -2px 47px 9px rgba(87,81,87,0.33);
box-shadow: inset -1px -2px 47px 9px rgba(87,81,87,0.33);font-family:'Cabin Sketch';color:white;padding:2px;" >Organic Basket</h1>
				</center>
			</div>
			<div class="row">	
				<div class="col-lg-3 col-6"  data-aos="fade-up">  
					</br></br>
					<div class="card box-shadow elevate" data-toggle="modal" data-target="#myModal1">
						<div class="card-body">
							<h4 class="card-title">Black Rice</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/r1.jpg" alt="Card image" style="width:100%">
					</div>
				</div>	
				<div class="col-lg-3 col-6"  data-aos="fade-up">  
					</br></br>
					<div class="card box-shadow elevate" data-toggle="modal" data-target="#myModal2">
						<div class="card-body">
							<h4 class="card-title">Kusum Rice</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/r2.jpg" alt="Card image" style="width:100%">
					</div>
				</div>
				<div class="col-lg-3 col-6"  data-aos="fade-up">  
					</br></br>
					<div class="card box-shadow elevate" data-toggle="modal" data-target="#myModal3">
						<div class="card-body">
							<h4 class="card-title">Vasana Rice</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/r3.jpg" alt="Card image" style="width:100%">
					</div>
				</div>	
				<div class="col-lg-3 col-6"  data-aos="fade-up">  
					</br></br>
					<div class="card box-shadow elevate" data-toggle="modal" data-target="#myModal4">
						<div class="card-body">
							<h4 class="card-title">Red Rice</h4>
							<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
							<a href="#" class="btn btn-success box-shadow">Buy now</a>
						</div>
						<img class="card-img-bottom" src="img/r4.jpg" alt="Card image" style="width:100%">
					</div>
				</div>
			</div>
			</br>
			</br></br></br>
		</div>
		<!--#Items-end-->
		
		                                 		
		<!-- Modals yahan hai-->
		<div class="modal fade" id="myModal1">
			<div class="modal-dialog">
				<div class="modal-content">  
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 id="mTitle" class="modal-title">Black Rice</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div> 
					<!-- Modal body -->
					<div class="modal-body">
						<img id="imgM" src="img/r1.jpg" class="img-fluid" alt="">
						<hr/>
						<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
						<?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-success box-shadow">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-light box-shadow" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning box-shadow">Add to cart</a>
									<br/><br/>
										<button class="minus-btn" type="button" name="button">
											<i class="fas fa-minus"></i>
										</button>
										<input type="number" name="counter" value="1" min="1" max="5">
										<button class="plus-btn" type="button" name="button">
											<i class="fas fa-plus"></i>
										</button>
									<?php
                                }
                            }
							?>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="myModal2">
			<div class="modal-dialog">
				<div class="modal-content">  
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 id="mTitle" class="modal-title">Kusum Rice</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div> 
					<!-- Modal body -->
					<div class="modal-body">
						<img id="imgM" src="img/r2.jpg" class="img-fluid" alt="">
						<hr/>
						<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
						<?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-success box-shadow">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-light box-shadow" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning box-shadow">Add to cart</a>
                                    <?php
                                }
                            }
							?>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="myModal3">
			<div class="modal-dialog">
				<div class="modal-content">  
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 id="mTitle" class="modal-title">Vasana Rice</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div> 
					<!-- Modal body -->
					<div class="modal-body">
						<img id="imgM" src="img/r3.jpg" class="img-fluid" alt="">
						<hr/>
						<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
					    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-success box-shadow">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-light box-shadow" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning box-shadow">Add to cart</a>
                                    <?php
                                }
                            }
							?>
						</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="myModal4">
			<div class="modal-dialog">
				<div class="modal-content">  
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 id="mTitle" class="modal-title">Red Rice</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div> 
					<!-- Modal body -->
					<div class="modal-body">
						<img id="imgM" src="img/r4.jpg" class="img-fluid" alt="">
						<hr/>
						<p class="card-text"><del style="color:lightgrey;">Rs.21</del> Rs.16</p>
					    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-success box-shadow">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-light box-shadow" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning box-shadow">Add to cart</a>
                                    <?php
                                }
                            }
							?>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--#Modals_khatam-->		
         			
		<!-- Footer Division-->
		<footer class="container-fluid bg-dark" style="color:#FFFDE7; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.19);">
			</br>
			<center><p>Copyright © 2018 <span><a href="http://bhimamandali.com/" target="_blank" style="color:lightblue;font-size:15px;"><strong>Swaad<span style="color:lightgreen;">SBP</span></strong></a></span>. All rights reserved.</p>
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

		
		<script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);

    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =100;
    		}

    		$input.val(value);
    	});
    </script>
		<!--Modal JS--
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
</script>-->

	</body>
</html>