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

<script type="text/javascript">

  function programs(str){
    if (str == '') {
      document.getElementById("program").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("program").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","option_program.php?o_id="+str,true);
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
                <div class="col-md-12">
                  
                  <div class="card mb-4">

                    <div class="container mt-2"><h5 class="mb-0">Student Registration Form/ <span><a href="student_class.php" class="btn btn-info">Register Whole class</a></span></h5></div>
                    <!-- Account -->
                   
                    
                    <div class="card-body">
                      <div class="alert alert-danger alert-dismissible" id="error-display" style="display:none;"></div>
                      <form id="class_form" method="POST" >
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Academic Year</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <select class="form-select form-select-lg" name="academic_year">
                                <option selected disabled>Select Year Of Study</option>
                                <?php 
$select_year="SELECT * FROM academic_year WHERE ac_status='PENDING'";
$cselect_year=$connect->prepare($select_year);
$cselect_year->execute();
while ($row_cselect_year=$cselect_year->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <option value="<?php echo $row_cselect_year['ac_id'] ?>"><?php echo $row_cselect_year['ac_name'] ; ?></option>
                               <?php } ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          
                          
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Department</label>
                            <select class="form-control" name="d_id" onchange="de_options(this.value)">
                              <option selected disabled="">Select Department</option>
                              <?php 
$select_department="SELECT * FROM department";
$cselect_department=$connect->prepare($select_department);
$cselect_department->execute();
while($row_cselect_department=$cselect_department->fetch(PDO::FETCH_ASSOC)){
                             ?>
                             <option value="<?php echo $row_cselect_department['d_id']; ?>"><?php echo $row_cselect_department['d_shortname'];?></option>
                           <?php } ?>
                            </select>
                            </div>
                          
                          <div class="mb-3 col-md-6" id="optionss">
                            <label for="organization" class="form-label">Option</label>
                            <div class="input-group input-group-merge">
                              <select class="form-control" name="o_id">
                                <option selected disabled="">Select Option</option>
                              </select>
                            </div>
                          </div>
                          
                          
                          <div class="mb-3 col-md-6" id="program">
                          
                         
                          </div>
                          <div class="mb-3 col-md-6" id="optionss">
                            <label for="organization" class="form-label">Study Mode</label>
                            <div class="input-group input-group-merge">
                              <input type="checkbox" name="study_mode" value="Full Time" class="form-check-input">Full Time
                            </div>
                          </div>
                          <div class="mb-3 col-md-6" id="optionss">
                            <label for="organization" class="form-label">Year Of Study</label>
                            <div class="input-group input-group-merge">
                              <select class="form-control" name="y_id">
                                <option selected disabled="">Select Year Of Study</option>
                                <?php 
$select_year="SELECT * FROM year_study";
$cselect_year=$connect->prepare($select_year);
$cselect_year->execute();
while($row_cselect_year=$cselect_year->fetch(PDO::FETCH_ASSOC)){
                                 ?>
                                 <option value="<?php echo $row_cselect_year['y_id']; ?>"><?php echo $row_cselect_year['y_name']; ?></option>
                               <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="mb-3 col-md-6" id="optionss">
                            <label for="organization" class="form-label">Status</label>
                            <div class="input-group input-group-merge">
                              <select class="form-control" name="s_status">
                                <option selected disabled="">Select Status</option>
                                <?php 
$select_status="SELECT * FROM student_status  ";
$cselect_status=$connect->prepare($select_status);
$cselect_status->execute();
while($row_cselect_status=$cselect_status->fetch(PDO::FETCH_ASSOC)){
                                 ?>
                                 <option value="<?php echo $row_cselect_status['id']; ?>"><?php echo $row_cselect_status['name']; ?></option>
                               <?php } ?>
                              </select>
                            </div>
                          </div>
                          
                          </div>
                          
                          
                        
                          <button type="submit" class="btn btn-primary" id="view_class_formart">view Format</button>
                        </div>
                        <div class="mt-2">
                          
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
fetch();
   });

          $("#class_form").validate({
            rules: {
                academic_year:{
                    required: true,
                },
                y_id:{
                    required: true,
                },
                d_id:{
                    required: true,
                },
                o_id:{
                    required: true,
                },
                
               
                
            //   terms: {
            //     required: true
            //   },
            },
            messages: {
               academic_year:{
                    required: "",
                },
               y_id:{
                    required: "",
                },
                d_id:{
                    required: "",
                },
              o_id:{
                    required: "",
                },
            
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
             var f = $("#class_form")[0];
              var form = new FormData(f);
              $.ajax({
                url: 'whole_class_format.php',
                type: 'POST',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#view_class_formart').html('Progress  <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#view_class_formart').attr("disabled", true);
                },
              success: function(dataResult){
              window.location.href=dataResult;


              },
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#view_class_formart').html('View');
                        $('#view_class_formart').attr("disabled", false);
                    }, 200);
                },


            });

}

});
     

    
     
</script>
  </body>
</html>
