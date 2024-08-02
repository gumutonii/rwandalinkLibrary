<?php include 'php/server.php';  ?>
<!DOCTYPE html>
<html >

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RWANDALINKLIBRARY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/1 option logo.png" />

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
                  <h6 class="text-muted">Login Form</h6>
                  <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                      <li class="nav-item">
                        <a href="signin.php"
                          
                          class="nav-link"
                          role="tab"
                         
                          aria-controls="navs-justified-student"
                          aria-selected="true"
                        >
                          <i class="tf-icons bx bx-user"></i>Admin Login
                          
                        </a>
                      </li>
                      
                      
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="navs-justified-student" role="tabpanel">
                <form method="POST" id="admini_log">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    name="a_email"
                    placeholder="Enter your email"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"   
                      class="form-control"
                      name="a_password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                     
                    />
                  </div>
                </div>
                
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit" id="admin_login">Sign in</button>
                </div>
              </form>
                      </div>
                      
                      
                      
                    </div>
                  </div>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assetss/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assetss/vendor/aos/aos.js"></script>
  <script src="assetss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetss/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assetss/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assetss/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assetss/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assetss/js/main.js"></script>

</body><script>
        $(document).ready(function () {

   });

$("#admini_log").validate({
            rules: {
                a_email:{
                  required: true,
                },
                a_password:{
                  required: true,
                },
                

            },
            messages: {
                a_email:{
                    required: "",
                },
                a_password:{
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
             var f = $("#admini_log")[0];
              var form = new FormData(f);
              $.ajax({
                url: 'php/admin_login_query.php',
                type: 'POST',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#admin_login').html('Progress <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#admin_login').attr("disabled", true);

                },
              success: function(dataResult){
                var resl = JSON.parse(dataResult);
                // console.log(dataResult);
                  if(resl[0][0] == 'success'){
                    // console.log(resl[0][1])
                    window.location.href=resl[0][1];
                    // console.log(resl[0][1]);
                  }
                  else{
                    $("#error-display").html(resl[0][1]);

                    $("#error-display").addClass('alert-warning');
                    $("#error-display").show();
                  } 
                 



              },
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#admin_login').html('Sign in');
                        $('#admin_login').attr("disabled", false);
                    }, 200);
                },


            });

}

}); 


</script>

</html>