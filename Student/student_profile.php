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
              <h4 class="fw-bold py-3 mb-4"> Account</h4>

              <div class="row">
                <div class="col-md-12">
                  
                  <div class="card mb-4">

                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                   <?php 
                   
                   $select_student="SELECT * FROM student where s_id='".$_SESSION['s_id']."'";
                   $cselect_student=$connect->prepare($select_student);
                   $cselect_student->execute();
                   $row_cselect_student=$cselect_student->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="profile/<?php echo $row_cselect_student['s_profile']; ?>"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="update_student_profile" method="POST" >
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input
                              class="form-control"
                              type="text"
                              name="s_fname"
                              value="<?php echo $row_cselect_student['s_fname']; ?>" 
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="s_lname" value="<?php echo $row_cselect_student['s_lname']; ?>">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="email" name="s_email" value="<?php echo $row_cselect_student['s_email']; ?>">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">RW (+250)</span>
                              <input
                                type="text" 
                                name="s_phone"
                                class="form-control"
                                value="<?php echo $row_cselect_student['s_phone']; ?>"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Reg n<sup>o</sup></label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                
                                name="s_regno"
                                class="form-control"
                                value="<?php echo $row_cselect_student['s_regno']; ?>"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Year of study</label>
                            <div class="input-group input-group-merge">
                              <?php 
$select_year="SELECT * FROM year_study WHERE y_id='".$row_cselect_student['y_id']."'";
$cselect_year=$connect->prepare($select_year);
$cselect_year->execute();
$row_cselect_year=$cselect_year->fetch(PDO::FETCH_ASSOC);
                               ?>
                              <input
                                type="text" 
                                readonly
                                name="s_phone"
                                class="form-control"
                                value="<?php echo $row_cselect_year['y_name']; ?>"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">department</label>
                            <div class="input-group input-group-merge">
                              <?php 
$select_department="SELECT * FROM department WHERE d_id='".$row_cselect_student['d_id']."'";
$cselect_department=$connect->prepare($select_department);
$cselect_department->execute();
$row_cselect_department=$cselect_department->fetch(PDO::FETCH_ASSOC);
                               ?>
                              <input
                                type="text" 
                                readonly
                                name="d_id"
                                class="form-control"
                                value="<?php echo $row_cselect_department['d_shortname']; ?>"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">option</label>
                            <div class="input-group input-group-merge">
                              <?php 
$select_option="SELECT * FROM options WHERE o_id='".$row_cselect_student['o_id']."'";
$cselect_option=$connect->prepare($select_option);
$cselect_option->execute();
$row_cselect_option=$cselect_option->fetch(PDO::FETCH_ASSOC);
                               ?>
                              <input
                              readonly
                                type="text" 
                                name="o_id"
                                class="form-control"
                                value="<?php echo $row_cselect_option['o_shortname']; ?>"
                              />
                            </div>
                          </div>
                          
                          
                          
                          
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">Gender</label>
                            <select class="select2 form-select" name="s_gender">
                              <option value="">Select Gender</option>
                              <?php 
$select_gender="SELECT * FROM gender";
$cselect_gender=$connect->prepare($select_gender);
$cselect_gender->execute();
while($row_cselect_gender=$cselect_gender->fetch(PDO::FETCH_ASSOC)){
  if ($row_cselect_gender['g_name']==$row_cselect_student['s_gender']) {
                               ?>
                              <option selected="selected" value="<?php echo $row_cselect_gender['g_name'];?>"><?php echo $row_cselect_gender['g_name'];?></option>
                            <?php }else {?>
                            <option value="<?php echo $row_cselect_gender['g_name'];?>"><?php echo $row_cselect_gender['g_name'];?></option>
                             <?php } }?> 
                              
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                             <label class="form-label" >Password</label>
                        <div class="input-group">
                          <input class="form-control" type="Password" name="s_password" value="<?php echo $row_cselect_student['s_password']; ?>">
                          
                        </div>
                        <input type="hidden" name="s_id" value="<?php echo $row_cselect_student['s_id']; ?>"> 
                          </div>
                          
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" id="update_student_profile">Update Account</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php 
            include 'footer.php';
             ?>
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
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {

   });

          $("#update_student_profile").validate({
            rules: {
                s_fname:{
                    required: true,
                },
                s_lname:{
                    required: true,
                },
                s_gender:{
                    required: true,
                },
                s_email:{
                  required: true,
                },
                s_regno:{
                  required: true,
                },
                s_phone:{
                  required: true,
                },
                s_password:{
                  required: true,
                },
                
               
                
            //   terms: {
            //     required: true
            //   },
            },
            messages: {
                s_fname:{
                    required: "",
                },
               s_lname:{
                    required: "",
                },
                s_gender:{
                    required: "",
                },
                s_email:{
                    required: "",
                },
                s_regno:{
                    required: "",
                },
                s_phone:{
                    required: "",
                },
                s_password:{
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
             var f = $("#update_student_profile")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/student_update_profile.php',
                type: 'POST',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_student_profile').html('Progress <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_student_profile').attr("disabled", true);

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
                        $('#update_student_profile').html('Update Student');
                        $('#update_student_profile').attr("disabled", false);
                    }, 200);
                },


            });

}

});
     


     
</script>
  </body>
</html>
