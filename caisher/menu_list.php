<?php 
	session_start();
	include('../01header.php'); 
?>
<?php
 include("../confs/config.php"); 
 $id = $_GET['id'];
 $result = mysqli_query($conn, "SELECT * FROM order_type WHERE order_type_id = $id"); 
 $row = mysqli_fetch_assoc($result); 

 echo $row['order_type_name'];
 $_SESSION['order_type_name'] = $row['order_type_name'];

?>


<a href="index.php" title="">Back</a><br>

<?php echo $_SESSION['order_type_name'] ?>
<?php echo $_SESSION['firstname'] ?>


<?php
 include("../confs/config.php");
 $result = mysqli_query($conn, "SELECT cat_id, cat_name FROM categories");
 while($row = mysqli_fetch_assoc($result)):
 ?>
 <a href="sub_list.php?id=<?php echo $row['cat_id'] ?>" class="btn btn-danger">
 <?php echo $row['cat_name'] ?>
 </a>
 <?php endwhile; ?>