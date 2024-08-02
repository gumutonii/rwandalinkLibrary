<script type="text/javascript">

  function depaBookType(str){
    if (str == '') {
      document.getElementById("book_type").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("book_type").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","depart_book_type.php?d_id="+str,true);
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

                    <h5 class="card-header">Penarity Payment form</h5>
                    <!-- Account -->
                   
                    
                    <div class="card-body">

                      <form id="penarity_form" method="POST" >
                        <?php 
$show_book="SELECT * FROM borrowed_book_student WHERE bbs_id='".$_GET['bbs_id']."' AND bbs_status='BORROWED'";
$cshow_book=$connect->prepare($show_book);
$cshow_book->execute();
$row_cshow_book=$cshow_book->fetch(PDO::FETCH_ASSOC);

$select_books="SELECT * FROM student_request WHERE sr_id='".$row_cshow_book['sr_id']."' AND sr_status='ACCEPTED' AND s_id='".$_GET['s_id']."'";
$cselect_books=$connect->prepare($select_books);
$cselect_books->execute();
$row_cselect_books=$cselect_books->fetch(PDO::FETCH_ASSOC);

$select_book_name="SELECT * FROM books WHERE b_SN='".$row_cselect_books['b_SN']."'";
$cselect_book_name=$connect->prepare($select_book_name);
$cselect_book_name->execute();
$row_cselect_book_name=$cselect_book_name->fetch(PDO::FETCH_ASSOC);

$show_student="SELECT * FROM student WHERE s_id='".$row_cselect_books['s_id']."'";
$cshow_student=$connect->prepare($show_student);
$cshow_student->execute();
$row_cshow_student=$cshow_student->fetch(PDO::FETCH_ASSOC);

$show_money="SELECT * FROM student_pernarity WHERE sp_id='".$_GET['sp_id']."'";
$cshow_money=$connect->prepare($show_money);
$cshow_money->execute();
$row_cshow_money=$cshow_money->fetch(PDO::FETCH_ASSOC);




                         ?>
                        <div class="row">
                          
                          <div class="mb-3 col-md-6">
                            <label for="b_Author" class="form-label">Book Author</label>
                            
                            <input class="form-control" type="text" name="b_Author" value="<?php echo $row_cselect_book_name['b_Author'] ?>" readonly>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="b_title" class="form-label">Book title</label>
                            <input class="form-control" type="text" name="b_title" value="<?php echo $row_cselect_book_name['b_title'] ?>" readonly>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="b_Year_Publisher" class="form-label">Book Serial N<sup>o</sup></label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text" 
                                name="b_SN"
                                class="form-control"
                                value="<?php echo $row_cselect_book_name['b_SN'] ?>"
                                readonly
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">amount of money to be payed</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text" 
                                readonly
                                value="<?php echo $row_cshow_money['sp_pernarity']." RWF" ?>"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Student Reg N<sup>o</sup></label>

                            <div class="input-group input-group-merge">
                              <input
                                type="text" 
                                class="form-control"
                                value="<?php echo $row_cshow_student['s_regno'] ?>"
                                readonly
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">amount of money to be payed</label>

                            <div class="input-group input-group-merge">
                              <input
                                type="text" 
                                name="amount_payed"
                                class="form-control"
                                
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Mode Of payment</label>

                            <div class="input-group input-group-merge">
                              <input
                                type="text" 
                                name="mode_pay"
                                class="form-control"
                                
                              />
                            </div>
                          </div>
                          <input type="hidden" name="sp_id" value="<?php echo $_GET['sp_id'] ?>">
                          <input type="hidden" name="bbs_id" value="<?php echo $_GET['bbs_id'] ?>">
                          <input type="hidden" name="s_id" value="<?php echo $_GET['s_id'] ?>">
                          
                          
                          
                          
                          
                          
                        
                          
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" id="pay_pen">Accept Offer</button>
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

          $("#penarity_form").validate({
            rules: {
                amount_payed:{
                    required: true,
                },
                mode_pay:{
                    required: true,
                },
                
                
               
                
            //   terms: {
            //     required: true
            //   },
            },
            messages: {
               amount_payed:{
                    required: "",
                },
                mode_pay:{
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
             var f = $("#penarity_form")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/student_pay_penarity.php',
                type: 'POST',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#pay_pen').html('Progress <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#pay_pen').attr("disabled", true);

                },
              success: function(dataResult){
                var up = JSON.parse(dataResult);
              if (up[0][0]  == 'success') {
                // alert('Thank you for pay !');
                window.location.href=up[0][1];
              }
              else
              {
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-danger');
                  $("#error-display").html("failed Try Again <span data-dismiss='alert' aria-label='close' style='float: right; cursor: pointer;'>X</span>");
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
                        $('#pay_pen').html('Accept Offer');
                        $('#pay_pen').attr("disabled", false);
                    }, 200);
                },


            });

}

});
     


     
</script>
  </body>
</html>
