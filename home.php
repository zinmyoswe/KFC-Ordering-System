<?php
session_start();

if(!isset($_SESSION['user_session']))
{
 header("Location: index.php");
}


include "confs/config.php";

$id = $_SESSION['user_session'];

$sql = "SELECT s.*,r.role_id,r.role_name FROM staff s 
        LEFT JOIN role r
        ON s.role_id = r.role_id
        WHERE staff_id = $id";
$run = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($run);

if($row['role_name'] == 'Caisher'){
	echo "<script>window.open('caisher/index.php?s=gxio29ak','_self')</script>";
}
else if ($row['role_name'] == 'Waiter'){
	echo "<script>window.open('waiter/index.php?s=gxio29ak','_self')</script>";
}
else{
	echo "<script>window.open('admin/index.php?s=gxio29ak','_self')</script>";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form using jQuery Ajax and PHP MySQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" media="screen">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

</head>

<body>

<div class="container">
    <div class='alert alert-success'>
  <button class='close' data-dismiss='alert'>&times;</button>
   <strong>Hello '<?php echo $row['firstname']; ?></strong>  Welcome to the members page. <a href="logout.php" title="">logout</a>
    </div>
</div>

</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>