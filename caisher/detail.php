<?php 
	session_start();
	include('../01header.php'); 
?>

<?php echo $_SESSION['order_type_name'] ?>
<?php echo $_SESSION['firstname'] ?>



<br>
 <?php 
                include('../confs/config.php');

                $id = $_GET['id'];
 				 
    			$checked_arr = array();

                $query = "SELECT f.*,c.cat_id,c.cat_name from food f 
                LEFT JOIN categories c 
                ON c.cat_id = f.category_id
                where f.food_id = $id
                ORDER BY f.food_id DESC";
                $result = mysqli_query($conn,$query);

                $count = 1;
                $row = mysqli_fetch_assoc($result);
                    $id = $row['food_id'];
                    $cat_id = $row['category_id'];
                    $food_name = $row['food_name'];
                    $menu = $row['menu'];
                    // $menu_name = $row['menu_name'];
                    $created_date = $row['created_date'];

                    $checked_arr = explode(",",$row['menu']);

                  
                ?>
                
                	<img src="../admin/cover/<?php echo $row['cover'] ?>" width="400">
         
                <p><?php echo $food_name ?></p>
                <p style="color : grey"><?php echo $row['description'] ?></p>
                <p><?php echo $row['price'] ?> MMK</p>

   

                <?php
                	  // Create checkboxes
	    $languages_arr = array("Original Recipe","Hot and Spicy","Mixed");
	    foreach($languages_arr as $language){
	      
	      $checked = "";
	      if(in_array($language,$checked_arr)){
	        $checked = "checked";
	        echo '<input type="radio" class="form-check-input" name="lang" value="'.$language.'" '.$checked.' id="lang'.$language.'"> '.$language.' <br/>';
	      }
	   
	  	}
                ?>

        

                <a href="sub_list.php?id=<?php echo $cat_id ?>" >Back</a>