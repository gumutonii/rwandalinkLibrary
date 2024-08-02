<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>RWANDALINKLIBRARY</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/1 option logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome-all.min.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php include 'sidebar.php'; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include 'Navbar.php'; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                
               
                <!-- Total Revenue -->
                
                <!--/ Total Revenue -->
                <div class=" col-md-8 ">
                  <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Book Type Update Form</h5>
                    </div>
                    <div class="card-body">
                      <div class="alert alert-danger alert-dismissible" id="error-display" style="display:none;"></div>
<?php 
$select_book_type="SELECT * FROM books_type WHERE book_type_id='".$_GET['book_type_id']."'";
$cselect_book_type=$connect->prepare($select_book_type);
$cselect_book_type->execute();
$row_cselect_book_type=$cselect_book_type->fetch(PDO::FETCH_ASSOC);
 ?>


                      <form method="POST" id="update_bookType_form">
                        <div class="mb-3">
                          <label class="form-label">Book Type Name</label>
                          <input type="text" class="form-control" name="book_type_name" value="<?php echo $row_cselect_book_type['book_type_name'] ?>">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Book Type Department </label>
                          <select class="form-control" name="d_id">
                            <option selected disabled="">Select Department</option>
                          <?php 
$select_department="SELECT * FROM department";
$cselect_department=$connect->prepare($select_department);
$cselect_department->execute();
while($row_cselect_department=$cselect_department->fetch(PDO::FETCH_ASSOC)){
  if ($row_cselect_department['d_id'] == $row_cselect_book_type['d_id'] ) {
                           ?>
<option selected="true" value="<?php echo $row_cselect_department['d_id']; ?>"><?php echo $row_cselect_department['d_shortname']; ?></option>
<?php }else{ ?>

                          <option value="<?php echo $row_cselect_department['d_id']; ?>"><?php echo $row_cselect_department['d_shortname']; ?></option>
                          <?php } }?>
                          </select> 
                        </div>
                        <input type="hidden" name="book_type_id" value="<?php echo $row_cselect_book_type['book_type_id']; ?>">                    
                        <button type="submit" class="btn btn-primary" id="update_book_type">Update Book Type</button>
                      </form>
                    </div>
                  </div>
                </div>
                
              </div>
                </div>
              </div>
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  
                    
                  </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
               
                <!--/ Expense Overview -->

                <!-- Transactions -->
                
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include 'footer.php'; ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
  
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../jquery.validate.min.js"></script>
<script>
        $(document).ready(function () {

   });

          $("#update_bookType_form").validate({
            rules: {
                book_type_name:{
                    required: true,
                },
                d_id:{
                    required: true,
                },
                
               
                
            //   terms: {
            //     required: true
            //   },
            },
            messages: {
               book_type_name:{
                    required: "",
                },
                d_id:{
                    required: "",
                },
                
                
              
            //   terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            },


              submitHandler: function () {
             var f = $("#update_bookType_form")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/librarian_update_bookType.php',
                type: 'POST',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_book_type').html('Progress <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_book_type').attr("disabled", true);

                },
              success: function(dataResult){
                var up = JSON.parse(dataResult);
              if (up[0][0]  == 'success') {
                window.location.href=up[0][1];
              }
              else
              {
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-danger');
                  $("#error-display").html("failed to update <span data-dismiss='alert' aria-label='close' style='float: right; cursor: pointer;'>X</span>");
              }

//alert(dataResult);

                //  if(dataResult == 1){
                //   $("#error-display").show();
                //   $("#error-display").removeClass('alert-success');
                //   $("#error-display").addClass('alert-danger');
                //   $("#error-display").html("failed to registerd <span data-dismiss='alert' aria-label='close' style='float: right; cursor: pointer;'>X</span>");
                // }else{
                //   $("#error-display").show();
                //   $("#error-display").removeClass('alert-danger');
                //   $("#error-display").addClass('alert-success');
                //   $("#error-display").html("well registerd <span data-dismiss='alert' aria-label='close' style='float: right; cursor: pointer;'>X</span>");
                  
                // }

              },
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#update_book_type').html('Update Book Type');
                        $('#update_book_type').attr("disabled", false);
                    }, 200);
                },


            });

}

});
     


     
</script>
  </body>
</html>
