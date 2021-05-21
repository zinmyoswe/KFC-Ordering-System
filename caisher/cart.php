
<?php 
	session_start();
    error_reporting(0);
	include('../01header.php'); 
  include('nav.php');
  $d = $_GET['d'];

   include("../confs/config.php");
?>

<style type="text/css">
	a {
    color: #000;
    text-decoration: none;
}
</style>

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

          
            

                echo'

                <button data-id='.$pp_id.' class="userinfo btn btn-link">Edit</button>

               <!-- Modal -->
            <div class="modal fade" id="empModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

                  <form method="post" action="cart-update.php">
                        <div class="modal-body">
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                           <input type="submit" value="Update" class="btn btn-outline-primary">
                        </div>
                        </form>
                    </div>
                  
                </div>
            </div>

            <!-- Modal End-->
                ';
                echo '<a href="delete-single-cart.php?id='.$food_id.'" 
                class="btn btn-link">Delete</a>';
                 
                
              
       
                echo '</div>';
                echo '<div class="col-lg-2">';
               
                echo ''.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$food_id.'">+</a>';

                if($quantity == 1){
                	  echo '
                &nbsp;<a class="button alert" style="padding:5px;" href="delete-single-cart.php?id='.$food_id.'"" >
                	<span class="fal fa-trash"></span>
                </a>
                  </div>';

                }else{
                	  echo '
                &nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$food_id.'">-</a>
                  </div>';

                }
              
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

              
              //      $sql2 = "INSERT INTO cart(customer,product_id,color,size,created_date)
              //      VALUES('$email','$product_id','$value_c','$value_s',NOW())";

              // $run2=mysqli_query($mysqli,$sql2);
              

             
            }

          }
          
          echo '
        <div class="row">
            <div class="col-md-9">';

          echo '
          <a href="delete-cart.php" class="button alert">Empty Cart</a>';

          echo '
          <a href="menu_list.php" style="margin-right: 8px">Continue Shopping</a><br><br>

          <a href="checkout.php" class="btn btn-dark">Pay Cash <i class="fa fa-arrow-right" style="width: 60px;"></i></a>
          <a href="checkout.php" class="btn btn-dark">Pay Cash quick <i class="fa fa-arrow-right" style="width: 60px;"></i></a>
          <a href="checkout.php" class="btn btn-dark">Pay Card <i class="fa fa-arrow-right" style="width: 60px;"></i></a>
          <a href="checkout.php" class="btn btn-dark">Gift Voucher <i class="fa fa-arrow-right" style="width: 60px;"></i></a>

          ';


          echo ' </div>
            <div class="col-md-3">';

          echo '<p>Subtotal : '.$total.' MMK</p>';
          echo '<p>Discount : '.$tt.'MMK</p>';

          echo '<p>Qty : '.$itemqty.'</p>';
          echo '<p>Tax(5%) : '.$tax.' MMK</p>';

          echo '<p>Payment : '."0".' MMK</p>';
          echo '<p><b>Balance :  $'.$finaltotal.' MMK</b></p>';

      

        
          

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
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script type='text/javascript'>
            $(document).ready(function(){

                $('.userinfo').click(function(){
                   
                    var food_id = $(this).data('id');

                    // AJAX request
                    $.ajax({
                        url: 'cartedit_ajaxfile.php',
                        type: 'post',
                        data: {food_id: food_id},
                        success: function(response){ 
                            // Add response in Modal body
                            $('.modal-body').html(response); 

                            // Display Modal
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>

<?php include('../02footer.php'); ?>
