<?php include 'php/server.php';  ?>
<script type="text/javascript">

  function ShowStudentInfo(str){
    if (str == '') {
      document.getElementById("StudentInformation").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("StudentInformation").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","Student_information.php?s_regno="+str,true);
       xmlhttp.send();
    }
  }
</script>
 <script type="text/javascript">

  function lecture_Info(str){
    if (str == '') {
      document.getElementById("show_lecturer").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("show_lecturer").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","lecturer_information.php?r_email="+str,true);
       xmlhttp.send();
    }
  }
</script>
<!DOCTYPE html>
<html >

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RWANDALINKLIBRARY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetss/vendor/aos/aos.css" rel="stylesheet">
  <link href="assetss/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetss/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assetss/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assetss/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assetss/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />







  <!-- Template Main CSS File -->
  <link href="assetss/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendors/styles/icon-font.min.css"
    />

    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

</head>

<body>
<style>
        .invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #dc3545;
}
    </style>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php">RWANDALINKLIBRARY</a></h1>
      </div>

      <!-- .navbar -->
    </div>
  </header>
  <main id="main">
    <div
      class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center mt-5" 
    >
<div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="col-xl-12 ">
                  <h6 class="text-muted">Registration Form</h6>
                  <div id="error-display" class="alert alert-dismissible alert-warning  " style="display:none;"></div>
                  <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link active"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-justified-home"
                          aria-controls="navs-justified-home"
                          aria-selected="true"
                        >
                          <i class="tf-icons bx bx-user"></i>Student Login
                          
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-justified-profile"
                          aria-controls="navs-justified-profile"
                          aria-selected="false"
                        >
                          <i class="tf-icons bx bx-user"></i> Lecturer Login
                        </button>
                      </li>
                      
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
                <form method="POST" id="student_reg_form">
                  
                <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Academic year</label>
                    
                  </div>
                  <?php 
$show_adademic="SELECT * FROM academic_year WHERE ac_status='PENDING'";
$cshow_adademic=$connect->prepare($show_adademic);
$cshow_adademic->execute();
$row_cshow_adademic=$cshow_adademic->fetch(PDO::FETCH_ASSOC);
if ($row_cshow_adademic) {
                   ?>
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      value="<?php echo $row_cshow_adademic['ac_name']; ?>"
                      class="form-control"
                      readonly
                      autofocus
                    />
                  </div>
                </div>

                  <div class="mb-3">
                  <label for="email" class="form-label">Reg<sup>o<sup></label>
                  <input
                    type="text"
                    class="form-control"
                    onmouseout="ShowStudentInfo(this.value)"
                    name="s_regno"
                    placeholder="Registration Number"
                    autofocus
                  />
                </div>
                <div id="StudentInformation">
                
                </div>
                
              </form>
            <?php }else{
echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                     <strong class='pull-left'>THERE IS NO REGISTRATION<span data-dismiss='alert' aria-label='close' style='float:right;cursor: pointer;'>X</span> </strong>
                                 </div>";

}

             ?>
                      </div>
                  <form method="post" id="lecturer">
                  <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                  <label  class="form-label">First name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="l_fname"
                    placeholder="firstname"
                    autofocus
                  />
                </div>
                    </div>
                    <div class="col-md-6">
                  <div class="mb-3">
                  <label  class="form-label">Last name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="l_lname"
                    placeholder="lastname"
                    autofocus
                  />
                </div>
                    </div>
                  </div>
                  <button class="btn btn-info" id="lecturer_complete">Complete registration</button>
                
                
                </div>
              </div>
              <div id="show_lecturer"></div>
                      </div>
                      </form>
                      
                      
                    </div>
                  

          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
 


    

  </main><!-- End #main -->

  
</div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>RWANDALINKLIBRARY</strong> 2024
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            
          </div>
        </div>
        
      </div>
    </div>
  </footer><!-- End Footer -->
  <script type="text/javascript">
                    
                        function myPasswordConfirm() {
                           var x = document.getElementById("confPassword");
                           var v = document.getElementById("realPassword");
                           var y = document.getElementById("hide4");
                           var z = document.getElementById("hide3");
                           if (x.type === 'password' && v.type === 'password') {
                            x.type= "text";
                            v.type ="text";
                            y.style.display= "block";
                            z.style.display= "block";                           
                           }
                           else
                           {
                             x.type= "password";
                             v.type= "password";
                            y.style.display= "none";
                            z.style.display= "none"; 
                           }
                        }
                    </script>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assetss/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assetss/vendor/aos/aos.js"></script>
  <script src="assetss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetss/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assetss/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assetss/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assetss/vendor/php-email-form/validate.js"></script>

    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery.validate.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assetss/js/main.js"></script>
  




<script>
        $(document).ready(function () {

   });

          $("#student_reg_form").validate({
            rules: {
                s_email:{
                  required: true,
                },
                s_phone:{
                  required: true,
                },
                s_password:{
                  required: true,
                },
                con_password:{
                  required: true,
                },
                
               
                
            //   terms: {
            //     required: true
            //   },
            },
            messages: {
                s_email:{
                    required: "",
                },
                s_phone:{
                    required: "",
                },
                s_password:{
                    required: "",
                },
                con_password:{
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
             var f = $("#student_reg_form")[0];
              var form = new FormData(f);
              $.ajax({
                url: 'php/update_student_info.php',
                type: 'POST',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#student_registration').html('Progress <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#student_registration').attr("disabled", true);

                },
              success: function(dataResult){
                var up = JSON.parse(dataResult);
              if (up[0][0]  == 'success') {
                window.location.href=up[0][1];
              }
              else
              {
                  $("#error-display").html(resl[0][1]);
                  $("#error-display").addClass('alert-warning');
                  $("#error-display").show();
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
                        $('#student_registration').html('Update Student');
                        $('#student_registration').attr("disabled", false);
                    }, 200);
                },


            });

}

});


$("#lecturer").validate({
            rules: {
                l_fname:{
                    required: true,
                },
                l_lname:{
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
             var f = $("#lecturer")[0];
              var form = new FormData(f);
              $.ajax({
                url: 'complete_lecturer.php',
                type: 'POST',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#lecturer_complete').html('Progress  <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#lecturer_complete').attr("disabled", true);
                },
              success: function(dataResult){
              window.location.href=dataResult;


              },
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#lecturer_complete').html('Complete Registration');
                        $('#lecturer_complete').attr("disabled", false);
                    }, 200);
                },


            });

}

});          
     

     
</script>                    

</body>

</html>