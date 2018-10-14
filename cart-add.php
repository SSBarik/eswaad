<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items(users_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //to redirect to the required page
	if($item_id<5){
		header('location: organic.php');
	}
	else if($item_id<9){
		header('location: regional.php');
	}
	else{
		header('location: homemade.php');
	}
}
?>   