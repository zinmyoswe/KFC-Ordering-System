<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
 error_reporting(0);
 session_start();

  include('../confs/config.php');

$food_id = $_GET['id'];
$action = $_GET['action'];
  $lang = $_SESSION['lang'];
  $firstname = $_SESSION['firstname'] ;
  $category_id = $_SESSION['category_id'] ;

// $query="SELECT * FROM product_attribute WHERE color='$color'and size='$size' ";
//   $ret = mysql_query($query);
//   $num_result=mysql_num_rows($ret);
//     $row=mysql_fetch_array($ret);

//     if($num_result>0)
//   {
   
//     $_SESSION['size']=$row['size'];
//     $_SESSION['color']=$row['color'];

//   }
//   else
//   {
//    echo "error";
//   }


// print_r($_SESSION);

if($action === 'empty')
  unset($_SESSION['cart']);
 

$result = $conn->query("SELECT * FROM food WHERE food_id = ".$food_id);
  
  

if($result){

  if($obj = $result->fetch_object()) {



    switch($action) {

      case "add":
      if($_SESSION['cart'][$food_id]+1)
        $_SESSION['cart'][$food_id]++;
      break;

      case "remove":
      $_SESSION['cart'][$food_id]--;
      if($_SESSION['cart'][$food_id] == 0)
        unset($_SESSION['cart'][$food_id]); 
        break;



    }
  }
}

if($_SESSION['cart'][$food_id] == 0){
  $email = $_SESSION['firstname'];
  $sql = "DELETE FROM cart WHERE staff='$email' and food_id='$food_id'";
  $run = mysqli_query($conn,$sql);
}



// echo "<script>window.open('cart.php','_self')</script>";
echo "<script>window.open('cart.php','_self')</script>";

?>
