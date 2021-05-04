<?php
 error_reporting(0);
 session_start();
 require_once 'confs/dbconfig.php';

 if(isset($_POST['btn-login']))
 {
  $user_email = trim($_POST['user_email']);
  $user_password = trim($_POST['password']);
  
 
  
  try
  { 
  
   $stmt = $db_con->prepare("SELECT * FROM staff WHERE email=:email");
   $stmt->execute(array(":email"=>$user_email));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();
   
   if($row['password']){
    
    echo "ok"; // log in
    $_SESSION['user_session'] = $row['staff_id'];
   }
   else{
    
    echo "email or password does not exist."; // wrong details 
   }
    
  }
  catch(PDOException $e){
   echo $e->getMessage();
  }
 }

?>