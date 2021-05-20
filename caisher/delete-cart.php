<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
 session_start();

  include('../confs/config.php');
$email = $_SESSION['firstname'];
$sql = "DELETE FROM cart WHERE staff='$email'";
$run = mysqli_query($conn,$sql);

if($run){
  echo "success";
}else{
  echo "error";
}
unset($_SESSION['cart']);
echo "<script>window.open('cart.php?d=x5sdd28ka','_self')</script>";

?>