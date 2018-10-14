<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <title>Swaad | Sambalpur </title>
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
		<link href='https://fonts.googleapis.com/css?family=Monofett' rel='stylesheet'>
		<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css'> 
		<!-- the Fabicon -->
		<link rel="shortcut icon" href="img/l.png" type="image/x-icon">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<!-- External Stylings -->
		<link rel="stylesheet" href="css/vstyles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	</head>
    <body style="background:lightgrey;">

	<!--Fixed-Top Navigation Bar-->
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top navbar-shadow" data-aos="">
			<a class="navbar-brand" href="#" style="color:#020B37;font-family: 'Acme';font-size: 30px;padding:0px;margin-left:10px;" ><span style="color:orange;">e-Food</span><span style="color:grey;">SBP</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
				<ul class="navbar-nav" data-aos="";>
					<li class="nav-item">
						<a class="nav-link" href="index.php"><i class="fas fa-home"></i><span style="color:#FFFDE7;"> Home</span></a>
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
					<li class="nav-item" data-aos="fade-in">
						<a class="nav-link" style="box-shadow: 0 1px 8px 0 grey, 0 5px 10px 0 black;background-color:lightgrey;color:white;"   href="cart.php"><i class="fas fa-shopping-cart"></i> <span style="color:#FFFDE7;">Cart</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link"   href="logout_script.php"><i class="fas fa-sign-out-alt"></i> <span style="color:#FFFDE7;">Logout</span></a>
					</li>
					
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
						<a class="nav-link"  href="signup.php"><i class="fas fa-user-plus"></i> <span style="color:#FFFDE7;">SignUp</span></a>
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
		
	   <div class="container-fluid" id="content">
			</br></br></br></br>
            <?php include 'includes/header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 offset-md-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.users_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id=NULL;
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ",";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary box-shadow'>Confirm</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
							?>
                            <div class="container" data-aos="zoom-in-down">
								<center><span  class="box-shadow" style="background:transparent;color:grey;padding:10px;font-family:'Frijole';font-size:40px;"><small>Your Cart is</small> <span style="color:red;">Empty</span> _<i class="far fa-frown"></i>_ !</span></center>
							</div>
                        <?php
						}
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
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

    </body>
</html>