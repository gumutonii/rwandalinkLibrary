<script type="text/javascript">

  function de_options(str){
    if (str == '') {
      document.getElementById("optionss").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("optionss").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","department_option.php?d_id="+str,true);
       xmlhttp.send();
    }
  }
</script>
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
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome-all.min.css">

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

          <?php include 'navbar.php'; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                
                
                <!-- Total Revenue -->
                
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-12 order-3 order-md-2">
                  <div class="row">
                    <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Lecturer Registration form</h5>
                      
                    </div>
                    <div class="card-body">
                      <div class="alert alert-danger alert-dismissible" id="error-display" style="display:none;"></div>

                      <?php 
$l_id=$_GET['l_id'];                      
$select_lecturer="SELECT * FROM lecturer WHERE l_id='$l_id'";
$cselect_lecturer=$connect->prepare($select_lecturer);
$cselect_lecturer->execute();
$row_cselect_lecturer=$cselect_lecturer->fetch(PDO::FETCH_ASSOC);
                       ?>
                      <form method="POST" id="lecture_update_form">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">First Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Uwimana"
                                name="l_fname"
                                value="<?php echo $row_cselect_lecturer['l_fname'] ?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Last name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                name="l_lname"
                                placeholder="Christian"
                                value="<?php echo $row_cselect_lecturer['l_lname'] ?>"
                                
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Gender</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <select class="form-select form-select-lg" name="l_gender">
                                <option selected disabled>Select Gender</option>
                                <?php 
$select_gender="SELECT * FROM gender";
$cselect_gender=$connect->prepare($select_gender);
$cselect_gender->execute();
while ($row_cselect_gender=$cselect_gender->fetch(PDO::FETCH_ASSOC)) {
  if ($row_cselect_gender['g_name']== $row_cselect_lecturer['l_gender']) {
                                 ?>
                                <option selected="true" value="<?php echo $row_cselect_gender['g_name']; ?>"><?php echo $row_cselect_gender['g_name']; ?></option>
<?php }else{ ?>
                                <option value="<?php echo $row_cselect_gender['g_name']; ?>"><?php echo $row_cselect_gender['g_name']; ?></option>
                              <?php } }?>
                              </select>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                              <input
                                type="text"
                                name="l_email"
                                class="form-control"
                                placeholder="uwimanachris"
                                value="<?php echo $row_cselect_lecturer['l_email'] ?>"
                              />
                              <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-phone"></i
                              ></span>
                              <input
                                type="text"
                                name="l_phone"
                                class="form-control phone-mask"
                                placeholder="+250"
                                value="<?php echo $row_cselect_lecturer['l_phone'] ?>"
                              />
                            </div>
                          </div>
                        </div>
                        
                      
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-message">password</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="password"
                                class="form-control phone-mask"
                                placeholder="........"
                                name="l_password"
                                value="<?php echo $row_cselect_lecturer['l_password']; ?>"
                              />
                            </div>
                          </div>
                        </div>
                        <input type="hidden" name="l_id" value="<?php echo $row_cselect_lecturer['l_id'] ?>">
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" id="update_lecturer">Update Lecturer</button>
                          </div>
                        </div>

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

          $("#lecture_update_form").validate({
            rules: {
                l_fname:{
                    required: true,
                },
                l_lname:{
                    required: true,
                },
                 l_gender:{
                    required: true,
                },
                l_email:{
                  required: true,
                },
                l_phone:{
                  required: true,
                },
                l_password:{
                  required: true,
                },
                
                
               
                
            //   terms: {
            //     required: true
            //   },
            },
            messages: {
                l_fname:{
                    required: "",
                },
               l_lname:{
                    required: "",
                },
                 l_gender:{
                    required: "",
                },
                l_email:{
                    required: "",
                },
                l_phone:{
                    required: "",
                },
                l_password:{
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
             var f = $("#lecture_update_form")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/update_lecturers.php',
                type: 'POST',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_lecturer').html('Progress <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_lecturer').attr("disabled", true);

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
                        $('#update_lecturer').html('Update Lecturer');
                        $('#update_lecturer').attr("disabled", false);
                    }, 200);
                },


            });

}

});
     


     
</script>
  </body>
</html>
