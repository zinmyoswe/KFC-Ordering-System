<?php 
	
    error_reporting(0);
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
                    $price = $row['price'];
                    $created_date = $row['created_date'];

                    $checked_arr = explode(",",$row['menu']);

                  $_SESSION['category_id'] = $row['category_id'];
                ?>


                <form method="post" action="detail_add.php" enctype="multipart/form-data">

                  <input type="hidden" name="id" value="<?php echo $row['food_id'];?>">
                
                	<img src="../admin/cover/<?php echo $row['cover'] ?>" width="400">
         
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

        
              <div class="d-grid gap-2 col-4 mx-auto">
                <input type="submit" name="submit" value="Order" class="btn btn-danger" /> 

                </div>
             
              </form>
               <a href="sub_list.php?id=<?php echo $cat_id ?>" >Back</a>
                