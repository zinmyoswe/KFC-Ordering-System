<?php 
	session_start();
    error_reporting(0);
	include('../01header.php'); 
  include('nav.php');
  $s = $_GET['s'];
?>

<?php echo $_SESSION['order_type_name'] ?>
<?php echo $_SESSION['firstname'] ?>

<?php if($s == 's52810gy9'){ ?>
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
  title: 'Successfully added to cart'
}).then(function() {
            window.location = "sub_list.php";
        });     
          </script>
<?php }?>



<a href="index.php" title="">Back</a><br>


<?php
 include("../confs/config.php");
 $result = mysqli_query($conn, "SELECT cat_id, cat_name FROM categories");
 while($row = mysqli_fetch_assoc($result)):
 ?>
 <a href="sub_list.php?id=<?php echo $row['cat_id'] ?>" class="btn btn-danger">
 <?php echo $row['cat_name'] ?>
 </a>
 <?php endwhile; ?>
<br>
 <?php 
                include('../confs/config.php');

                $id = $_GET['id'];
 				 

                $query = "SELECT f.*,c.cat_id,c.cat_name from food f 
                LEFT JOIN categories c 
                ON c.cat_id = f.category_id
                where f.category_id = $id
                ORDER BY f.food_id DESC";
                $result = mysqli_query($conn,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['food_id'];
                    $food_name = $row['food_name'];
                    $price = $row['price'];
                    // $menu_name = $row['menu_name'];
                    $created_date = $row['created_date'];

                ?>

                <a href="detail.php?id=<?php echo $row['food_id'] ?>">
                	<img src="../admin/cover/<?php echo $row['cover'] ?>" width="200">
                </a>
                <p><?php echo $food_name ?></p>
                <p style="color : grey"><?php echo $row['description'] ?></p>
                <p>
                     <?php
                          include('../confs/config.php');
                          $sql_dis = mysqli_query($conn,"SELECT * FROM discount 
                            LEFT JOIN food ON discount.food_id = food.food_id
                            WHERE food.food_id = '$id'");
                          $result_dis = mysqli_fetch_assoc($sql_dis);
                           $percentage = $result_dis['percentage'];
                           $discount_id = $result_dis['discount_id'];
                          ?>
                          <?php if( $discount_id == 0){ ?>
                               <h style="font-family: Arial; font-size: 15px; color: ;"><?php echo $price ?>MMK</h>
                          <?php }else{?>
                          <?php
                            $selling_price = $price-($price*($percentage/100))
                          ?>
                          <span style="text-decoration: line-through; color: #DC3545; "><?php echo $price ?> MMK</span>
                          <?php echo $selling_price; ?> MMK
                          <?php } ?>
                    </p>

             <?php } ?>