<?php
 error_reporting(0);
 session_start();
 require_once 'confs/config.php';

 if(isset($_POST['btn-login']))
 {
  $email = $_POST['email'];
  $password = $_POST['password'];  
 
  
  
   
   $sql = "SELECT * FROM staff WHERE password='$password' AND email='$email'";

        $run = mysqli_query($conn,$sql);

        $check_customer = mysqli_num_rows($run);



        if($check_customer == 0){

          echo "
          
                
                Incorrect email and password!!
           
        ";
          exit();
        }

         $sel_customer = "SELECT * FROM staff WHERE email='$email'";

      $run = mysqli_query($conn,$sel_customer);

      $row = mysqli_fetch_array($run);

        if($check_customer>0){

          $_SESSION['user_session'] = $row['staff_id'];
          $_SESSION['email']=$email;
          $_SESSION['id']=$row['id'];
        // echo "<script>alert('Login successfully!!')</script>";
        echo "<script>window.open('home.php?s=gxio29ak','_self')</script>";
        }
        else{
           $_SESSION['email']=$email;
           $_SESSION['id']=$row['id'];
        // echo "<script>alert('Login successfully!!')</script>";
        echo "<script>window.open('home.php?s=gxio29ak','_self')</script>";

        }
 }

?>