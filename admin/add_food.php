<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  include('header.php');
  include('navbar.php');
  include('sidebar.php');

?>

    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        
         <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="./ecommerce-products.html">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add product</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Add product</h1>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->



      <div class="row gx-2 gx-lg-3">
          <div class="col-lg-12 mb-3 mb-lg-12">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Add Food</h5>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options="{
                       &quot;target&quot;: &quot;#reportsOverviewDropdown2&quot;,
                       &quot;type&quot;: &quot;css-animation&quot;
                     }" data-hs-unfold-target="#reportsOverviewDropdown2" data-hs-unfold-invoker="">
                    <i class="tio-more-vertical"></i>
                  </a>

                  <div id="reportsOverviewDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y" data-hs-target-height="247.833" data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInUp" data-hs-unfold-content-animation-out="fadeOut" style="animation-duration: 300ms;">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-share dropdown-item-icon"></i> Share chart
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-download-to dropdown-item-icon"></i> Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                 

 <!-- form start -->
            <form class="form-horizontal" method="post" action="add_food.php" enctype="multipart/form-data">
        

              <div class="form-group">
          <label for="exampleInputEmail1">Food Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter Food Name">
            </div>

               
                            
                         <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" >Price</label>
                  <input type="text" name="price"  class="form-control" id="inputEmail3" placeholder="Price"/>            
                </div>
                <!-- FORM ENDS -->

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3">Category</label>
              
                  <select id="cat" class="form-control" name="cat">
                                                <option>Choose a Category</option>
                                               <?php 
                                                $get_cat = "SELECT * FROM categories";
                                                $run_cat = mysqli_query($conn,$get_cat);
                                                while($row_cat= mysqli_fetch_array($run_cat)){
                                                  $id = $row_cat['cat_id'];
                                                  $name = $row_cat['cat_name'];

                                                  echo "
                                                    <option value='$id'>$name</option>
                                                  ";
                                                }
                                                ?>
                                          </select>  
                                         </div>
                                             <!-- FORM END -->

                <div class="form-group">
                 <label for="inputEmail3">Description</label>
                    
                     <textarea name="description" class="form-control"></textarea>
                  </div>
                <!-- FORM ENDS -->

                 <div class="form-group">
             <?php 
 include("../confs/config.php"); 
 $result = mysqli_query($conn, "SELECT * FROM menu"); 
?> 

 <?php while($row = mysqli_fetch_assoc($result)): ?>

 


 <input type="checkbox" name="menu[]" value="<?php echo $row['menu_name'] ?>">
 <?php echo $row['menu_name'] ?><br>
 <?php endwhile; ?> 

 </div>
                <!-- FORM ENDS -->


                

                 <div class="form_group">
                            <label for="inputEmail3" >Image</label>
                  <div class="col-sm-10">
                            <input type="file" name="cover">
                            </div>
                            </div>
                            <!-- FORM ENDS -->

                             <!-- Dropzone -->
               <!--  <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed">
                  <div class="dz-message custom-file-boxed-label">
                    <img class="avatar avatar-xl avatar-4by3 mb-3" src="./assets/svg/illustrations/browse.svg" alt="Image Description">
                    <h5 class="mb-1">Choose files to upload</h5>
                    <p class="mb-2">or</p>
                    <span class="btn btn-sm btn-primary">Browse files</span>
                  </div>
                </div> -->
                <!-- End Dropzone -->

               

                            <br>
                             <button type="submit" name="submit" class="btn btn-primary float-right" style="margin: 0 4px">Save</button>
                <a href="view_food.php" class="btn btn-outline-primary float-right" >Back</a>
              </form>

              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div> <!-- col-lg-5 end -->

        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->

       <!-- JS Implementing Plugins -->
    <script src="./assets/js/vendor.min.js"></script>
    
    

    <!-- JS Front -->
    <script src="./assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        
          if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
              .on('shown.bs.popover', function () {
                $('.popover').last().addClass('popover-dark')
              });

            $(document).on('click', '#closeBuilderPopover' , function() {
              window.localStorage.setItem('hs-builder-popover', true);
              $('#builderPopover').popover('dispose');
            });
          } else {
            $('#builderPopover').on('show.bs.popover', function () {
              return false
            });
          }
        
        // END ONLY DEV
        // =======================================================


        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
          $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        
          // INITIALIZATION OF MEGA MENU
          // =======================================================
          var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
              position: 'left'
            }
          }).init();
        

        
        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        
        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        
        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        
        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        var quill = $.HSCore.components.HSQuill.init('.js-quill');

        
        // INITIALIZATION OF ADD INPUT FILED
        // =======================================================
        $('.js-add-field').each(function () {
          new HSAddField($(this), {
            addedField: function() {
              $('.js-add-field .js-select2-custom-dynamic').each(function () {
                var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
              });
            }
          }).init();
        });

        
        // INITIALIZATION OF TAGIFY
        // =======================================================
        $('.js-tagify').each(function () {
          var tagify = $.HSCore.components.HSTagify.init($(this));
        });

        
        // INITIALIZATION OF DROPZONE FILE ATTACH MODULE
        // =======================================================
        $('.js-dropzone').each(function () {
          var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>





   <!--  <script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->

<script type="text/javascript">
  $(document).ready(function(){
    $("#cat").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $("#cities-container").html("");
        
        $.ajax({
          type:'post',
          data:{category_id:getCountryID},
          url: 'ajax_request_cat_and_menu.php',
          success:function(returnData){
            $("#loader").hide();  
            $("#cities-container").html(returnData);
          }
        }); 
      }
      
    })
  });
</script>


<?php

    if(isset($_POST['submit'])){

      $name = $_POST['name'];
      
      $price = $_POST['price'];
      $cat = $_POST['cat'];
      $description = $_POST['description'];
      $cover = $_FILES['cover']['name'];
      $tmp = $_FILES['cover']['tmp_name'];

      $checkbox1=$_POST['menu'];  

     

      // $product_image2 = $_FILES['product_image2']['name'];
      // $tmp2 = $_FILES['product_image2']['tmp_name'];

      // $product_image3 = $_FILES['product_image3']['name'];
      // $tmp3 = $_FILES['product_image3']['tmp_name'];

      
      // move_uploaded_file($tmp,"cover/$product_image");
      // move_uploaded_file($tmp2,"cover/$product_image2");
      // move_uploaded_file($tmp3,"cover/$product_image3");
      
      if($cover){
        move_uploaded_file($tmp, "cover/$cover");

      }

      $chk="";  
    foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
      
    
      $sql = "INSERT INTO food(food_name,price,menu,category_id,description,created_by,cover,created_date,modified_date)
                   VALUES('$name','$price','$chk','$cat','$description','zinmyo','$cover',now(),now())";

      $run=mysqli_query($conn,$sql);
      
      if($run){

        // echo "<script>alert('Product has been inserted')</script>";
        echo "<script>window.open('view_food.php?w2=success','_self')</script>";
      }
      else{
        echo "error";
      }

    
    }
?>


    