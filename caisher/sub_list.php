<?php 
	session_start();
	include('../01header.php'); 
?>

<?php echo $_SESSION['order_type_name'] ?>



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
                    // $menu = $row['menu'];
                    // $menu_name = $row['menu_name'];
                    $created_date = $row['created_date'];

                ?>

                <img src="../admin/cover/<?php echo $row['cover'] ?>" width="200">
                <p><?php echo $food_name ?></p>
                <p style="color : grey"><?php echo $row['description'] ?></p>
                <p><?php echo $row['price'] ?> MMK</p>

             <?php } ?>