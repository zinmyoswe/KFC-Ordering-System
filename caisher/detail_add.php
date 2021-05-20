<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
 error_reporting(0);
 session_start();

  include('../confs/config.php');




     $id = $_POST['id'];
     $lang = $_POST['lang'];
     
  
    $firstname = $_SESSION['firstname'] ;
     $_SESSION['lang'] = $lang ;

     echo $firstname;
     echo $_SESSION['lang'];

     $insert_cart = "INSERT INTO cart (food_id,menu,qty,staff)
                     VALUES ('$id','$lang',1,'$firstname')";
     mysqli_query($conn,$insert_cart);


echo "<script>window.location='update-cart-with-modal.php?action=add&id=$id'</script>";


?>