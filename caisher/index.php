<?php include('../01header.php'); ?>


<img src="../image/homekfc.jpg" >
<?php
    
    session_start();
    include "../confs/config.php";
    $id = $_SESSION['user_session'];

    $sql = "SELECT s.*,r.role_id,r.role_name FROM staff s 
        LEFT JOIN role r
        ON s.role_id = r.role_id
        WHERE staff_id = $id";
$run = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($run);

    echo $row['role_name'];
?>

<h1>Caisher view</h1>
<h5>Welcome <?php echo $row['firstname']; ?></h5>

<a href="../logout.php" title="">Logout</a>



<?php 
 include("../confs/config.php"); 
 $result = mysqli_query($conn, "SELECT * FROM order_type"); 
?> 

 <?php while($row = mysqli_fetch_assoc($result)): ?>

<a href="menu_list.php?id=<?php echo $row['order_type_id'] ?>" class="btn btn-danger"><?php echo $row['order_type_name'] ?></a> 

 <?php endwhile; ?> 
