<?php
session_start();
error_reporting(0);
include('../confs/config.php');

$food_id = $_GET["id"];

		if(isset($_SESSION["cart"][$food_id])){
            unset($_SESSION["cart"][$food_id]);
		}
        
    $sql = "DELETE FROM cart WHERE food_id='$food_id'";
	$run = mysqli_query($conn,$sql);
   

echo "<script>window.open('cart.php?d=x6sdd28ka','_self')</script>";


?>