<?php 
session_start();
 include("../confs/config.php"); 
 $email = $_SESSION['firstname'];
 $id = $_POST['id']; 
 $lang = $_POST['lang']; 

 echo $id;
 echo $lang;
 echo $email;

 $sql = "UPDATE cart SET menu='$lang'
 		WHERE food_id = $id and staff = '$email' "; 

 		echo $sql;
 mysqli_query($conn, $sql); 


echo "<script>window.open('cart.php','_self')</script>";
?>
