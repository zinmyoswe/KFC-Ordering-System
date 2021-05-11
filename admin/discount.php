<?php
  error_reporting(0);
  session_start();
  include('../confs/config.php');
  include('header.php');
  include('navbar.php');
  include('sidebar.php');

  $w2 = $_GET['w2'];
?>

<?php
 include("../confs/config.php"); 
 $id = $_GET['id'];
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

                    // $menu_name = $row['menu_name'];
                    $created_date = $row['created_date'];
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
                  <li class="breadcrumb-item active" aria-current="page">Manage Discount</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Manage Discount</h1>
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
                <h5 class="card-header-title">Discount</h5>

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
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">

            	<div class="row">
            		<div class="col-lg-4">
            	<img src="../admin/cover/<?php echo $row['cover'] ?>" width="200">
            		</div>
            		<div class="col-lg-6">
            	 <p style="color: #000"><?php echo $food_name ?></p>
                <p style="color : grey"><?php echo $row['description'] ?></p>
                <p style="color: #000">
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
                	</div>
                </div>

                <input type="hidden" name="id" value="<?php echo $row['food_id']; ?>">

                            

                <div class="row">

                <div class="col-md-4">
                	<div class="form-group">
		          <label for="exampleInputEmail1">Start Date</label>	

		          <!-- Flatpickr -->
                          <div id="invoiceDateFlatpickr" class="js-flatpickr flatpickr-custom input-group input-group-merge"
                               data-hs-flatpickr-options='{
                                "appendTo": "#invoiceDateFlatpickr",
                                "dateFormat": "d/m/Y",
                                "wrap": true
                              }'>
                            <div class="input-group-prepend" data-toggle>
                              <div class="input-group-text">
                                <i class="tio-date-range"></i>
                              </div>
                            </div>

                            <input type="text" name="str_date" class="flatpickr-custom-form-control form-control" placeholder="Select dates" data-input >
                          </div>
                          <!-- End Flatpickr -->	         
		        

		            </div>
                </div>

                <div class="col-md-4">
                	<div class="form-group">
		          <label for="exampleInputEmail1">End Date</label>		        <!-- Flatpickr -->
                          <div id="invoiceDueDateFlatpickr" class="js-flatpickr flatpickr-custom input-group input-group-merge"
                               data-hs-flatpickr-options='{
                                "appendTo": "#invoiceDueDateFlatpickr",
                                "dateFormat": "d/m/Y",
                                "wrap": true
                              }'>
                            <div class="input-group-prepend" data-toggle>
                              <div class="input-group-text">
                                <i class="tio-date-range"></i>
                              </div>
                            </div>

                            <input type="text" name="end_date" class="flatpickr-custom-form-control form-control" placeholder="Select dates" data-input >
                          </div>
                          <!-- End Flatpickr -->	    
		       
		            </div>
                </div>

                 <div class="col-md-4">
                	<div class="form-group">
		          <label for="exampleInputEmail1">Discount Percentage</label>		         
		         
                <input type="text" class="form-control" name="percentage" id="datepicker" placeholder="Enter Discount" required/>
		            </div>
                </div>


                </div><!--  row end -->
 
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

        
        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        $('.js-file-attach').each(function () {
          var customFile = new HSFileAttach($(this)).init();
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        
        // INITIALIZATION OF FLATPICKR
        // =======================================================
        $('.js-flatpickr').each(function () {
          $.HSCore.components.HSFlatpickr.init($(this));
        });

        
        // INITIALIZATION OF QUANTITY COUNTER
        // =======================================================
        $('.js-quantity-counter').each(function () {
          var quantityCounter = new HSQuantityCounter($(this)).init();
        });

        
        // INITIALIZATION OF ADD INPUT FILED
        // =======================================================
        $('.js-add-field').each(function () {
          new HSAddField($(this), {
            addedField: function() {
              $('.js-add-field .js-select2-custom-dynamic').each(function () {
                var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
              });

              $('[data-toggle="tooltip"]').tooltip();

              
              // INITIALIZATION OF QUANTITY COUNTER
              // =======================================================
              $('.js-quantity-counter').each(function () {
                var quantityCounter = new HSQuantityCounter($(this)).init();
              });
            },
            deletedField: function() {
              $('.tooltip').hide();
            }
          }).init();
        });

        
        // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        $('.js-sticky-block').each(function () {
          var stickyBlock = new HSStickyBlock($(this), {
            targetSelector: $('#header').hasClass('navbar-fixed') ? '#header' : null
          }).init();
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>
</html>

 <?php
 	include('../confs/config.php');
    if(isset($_POST['submit'])){

      $id = $_POST['id'];
      $str_date = $_POST['str_date'];
      $end_date = $_POST['end_date'];
      $percentage = $_POST['percentage'];
 
      
    
      $sql = "INSERT INTO discount(food_id,percentage,duration,start_date,end_date)
                   VALUES('$id','$percentage','','$str_date','$end_date')";

      $run=mysqli_query($conn,$sql);
      
      if($run){

        // echo "<script>alert('Discount has been inserted')</script>";
        echo "<script>window.open('view_food.php?w2=discount','_self')</script>";
      }
      else{
        echo "error";
      }

    
    }
?>







