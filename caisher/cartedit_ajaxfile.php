<?php
session_start();
include "../confs/config.php";


$food_id = $_POST['food_id'];
$checked_arr = array();

$sql = "select * from food where food_id=".$food_id;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

       
    $id = $row['food_id'];
    $food_name = $row['food_name'];

     $menu = $row['menu'];
        $price = $row['price'];
        $created_date = $row['created_date'];

        $checked_arr = explode(",",$row['menu']);

    
    echo $food_name;
    echo '<br>'; ?>

    <input type="hidden" name="id" value="<?php echo $food_id ?>">

    <?php


                      // Create checkboxes
        $languages_arr = array("Original Recipe","Hot and Spicy","Mixed");
        foreach($languages_arr as $language){
          
          $checked = "";
          if(in_array($language,$checked_arr)){

            echo '<input type="radio" class="form-check-input" name="lang" value="'.$language.'"  id="lang'.$language.'" '.$checked.'> '.$language.' <br/>';
          }
       
        }
           

   



// echo 0;
exit;