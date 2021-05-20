

<?php

 include("../confs/config.php");

          if(isset($_SESSION['cart'])) {

            $total = 0;
            $itemqty = 0;
      
            foreach($_SESSION['cart'] as $food_id => $quantity) {

            $result = "SELECT  * FROM food WHERE food_id = $food_id";
            $run = mysqli_query($conn,$result);
            

            if($run){

              while($obj = mysqli_fetch_object($run)) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
                $itemqty = $itemqty+$quantity;               
              }
            }
          }
          ?>
           <li class="nav-item">
        <a class="nav-link" href="cart.php">Cart<span class="badge bg-dark"><?php echo $itemqty ?></span></a>
      </li>
       <?php  } ?>