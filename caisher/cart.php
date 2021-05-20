
<?php 
	session_start();
    error_reporting(0);
	include('../01header.php'); 
  include('nav.php');
  $d = $_GET['d'];

   include("../confs/config.php");
?>

<?php if($d == 'x5sdd28ka'){ ?>
<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

             <script type="text/javascript">
            
            const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 1800,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Cart deleted successfully'
}).then(function() {
            window.location = "cart.php";
        });
              
          </script>
<?php }else if($d == 'x6sdd28ka'){?>
<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

             <script type="text/javascript">
            
            const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 1800,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Item in Cart deleted successfully'
}).then(function() {
            window.location = "cart.php";
        });
              
          </script>

<?php } ?>

<div class="row">
   <div class="col-lg-9 col-sm-6 col-xs-12">

   
        <a href="index.php" style="color: black;">Home</a>
        /
        <span>Shopping Cart</span>
   

   
    <h2>YOUR BAG <span class="title_cartpage"><?php echo $itemqty?> ITEMS </span></h2> 

    
    <!-- {{-- success error msg start --}} -->
      
    <br>

      <?php
           include("../confs/config.php");
           print_r($_SESSION);

          if(isset($_SESSION['cart'])) {

            $total = 0;
            $tt = 0;
            $itemqty = 0;
            
          
            foreach($_SESSION['cart'] as $food_id => $quantity) {

            $result = "SELECT * FROM food WHERE food_id = $food_id";
            $run = mysqli_query($conn,$result);
    
            if($run){

              while($obj = mysqli_fetch_object($run)) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                

                $itemqty = $itemqty+$quantity;

                

               

                // print_r($color); 

             

             
                  $result_cart = mysqli_query($conn,"SELECT f.*,c.menu,c.qty,c.cart_id FROM cart c
                   LEFT JOIN food f 
                   ON f.food_id = c.food_id
                    where f.food_id='$food_id'");
                 $row_cart = mysqli_fetch_assoc($result_cart);
                 $cart_id = $row_cart['cart_id'];
                  $qty = $row_cart['qty'];
                  $menu = $row_cart['menu'];
                  $pp_id = $row_cart['food_id'];

                  //GET Discount
                  $sql_dis = mysqli_query($conn,"SELECT * FROM discount d 
                            LEFT JOIN food f ON d.food_id = f.food_id
                            WHERE f.food_id = '$food_id'");
                          $result_dis = mysqli_fetch_assoc($sql_dis);
                           $percentage = $result_dis['percentage'];
                           $discount_id = $result_dis['discount_id'];

                $selling_price = $obj->price-($obj->price*($percentage/100));
                $selling_dis = $selling_price * $quantity;
                $tt = $tt + $selling_dis;

                $taxRate=5;
                $tax=$tt*$taxRate/100;
                $finaltotal=$tt+$tax; 



                
                echo '  
                <div class="container cart_item">
                <div class="row">
                ';
                echo '
                <div class="col-lg-2">
                <img src="../admin/cover/'.$obj->cover.'" class="img_cartpage">
                </div>
                ';
                
                echo '
                 <div class="col-lg-5" >
                <a href="" class="cart_a">'.$obj->food_name.'</a>';
             

                
                if($menu == 0){
                	echo '<p class="cart_p">Menu: '.$menu.' </p>';
                }else{
                echo '<p class="cart_p">Menu: '.$menu.' </p>';
             
             	}

                echo '<p>';
                echo '<a href="" class="btn btn-link">Edit</a>';
                echo '<a href="delete-single-cart.php?id='.$food_id.'" 
                class="btn btn-link">Delete</a>';
                 echo '<a href="" class="btn btn-link">Move To Wishlist</a>';
                echo '</p>';
              
       
                echo '</div>';
                echo '<div class="col-lg-2">';
               
                echo ''.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$food_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$food_id.'">-</a>
                  </div>';

                echo '<div class="col-lg-1"></div>';
                echo '<div class="col-lg-2">';
                if( $discount_id == 0){
                   echo '<b style="font-family: Arial; font-size: 15px; color: ;">'.$cost.' MMK</b>';
                }else{

                  $selling_price = $obj->price-($obj->price*($percentage/100));
                   $selling_dis = $selling_price * $quantity;
                echo '<td><b> '.$selling_dis.' MMK</b><strong style="text-decoration: line-through; color: #DC3545;"> '.$cost.' MMK</strong></td>';
                 }
          
                echo '</div>';
                echo '</div>
        </div>
        <hr>';
              }

              
                   $sql2 = "INSERT INTO cart(customer,product_id,color,size,created_date)
                   VALUES('$email','$product_id','$value_c','$value_s',NOW())";

              $run2=mysqli_query($mysqli,$sql2);
              

             
            }

          }
          
          echo '
        <div class="row">
            <div class="col-md-9">';

          echo '
          <a href="delete-cart.php" class="button alert">Empty Cart</a>';

          echo '
          <a href="menu_list.php" style="margin-right: 8px">Continue Shopping</a>
          <a href="checkout.php" class="btn btn-dark">Checkout <i class="fa fa-arrow-right" style="width: 60px;"></i></a>';

          echo ' </div>
            <div class="col-md-3">';

          echo '<p>Subtotal : $'.$total.'</p>';
          echo '<p>Subtotal : $'.$tt.'</p>';

          echo '<p>Qty : '.$itemqty.'</p>';
          echo '<p>Tax(5%) : $'.$tax.'</p>';
          echo '<p><b>Total :  $'.$finaltotal.'</b></p>';

      

        
          

          // if(isset($_SESSION['username'])) {
            // echo '<a href="order-update.php"><button  class="btn btn-info pull-right">Order</button></a>';

          echo '</div>
        </div>';
        
        }

        else {
          echo "<div class='alert alert-dark'><span class='fa fa-exclamation'> </span> You have no items in cart</div><br>
          <a href='menu_list.php' style='margin-right: 8px' class='btn btn-dark'>Continue Shopping</a>
          ";
        }





        
          ?>


</div><!--  col-lg-9 col-sm-6 col-xs-12 end -->
</div>
