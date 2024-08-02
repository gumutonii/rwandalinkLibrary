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

                    <h5 class="card-header">Book Details</h5>
                    <!-- Account -->
                   <?php 
$select_book="SELECT * FROM books WHERE b_id='".$_GET['b_id']."'";
$cselect_book=$connect->prepare($select_book);
$cselect_book->execute();
$row_cselect_book=$cselect_book->fetch(PDO::FETCH_ASSOC);
                    ?>
                    
                    <div class="card-body">
                      <form id="librarian_update_book" method="POST" >
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="b_SN" class="form-label">Book Serial n<sup>o</sup></label>
                            <input
                              class="form-control"
                              type="text"
                              name="b_SN"
                              value="<?php echo $row_cselect_book['b_SN']; ?>"
                              readonly
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="b_Author" class="form-label">Book Author</label>
                            <input class="form-control" type="text" name="b_Author" value="<?php echo $row_cselect_book['b_Author'] ?>">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="b_title" class="form-label">Book title</label>
                            <input class="form-control" type="text" name="b_title" value="<?php echo $row_cselect_book['b_title'] ?>">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="b_Year_Publisher" class="form-label">Year Of publisher</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text" 
                                name="b_Year_Publisher"
                                class="form-control"
                                value="<?php echo $row_cselect_book['b_Year_Publisher'] ?>"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">book publisher</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text" 
                                name="b_Publisher"
                                class="form-control"
                                value="<?php echo $row_cselect_book['b_Publisher'] ?>"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">book Edition</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text" 
                                name="b_Edition"
                                class="form-control"
                                value="<?php echo $row_cselect_book['b_Edition'] ?>"
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Book ISBN ISSN</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text" 
                                name="b_ISBN_ISSN"
                                class="form-control"
                                 value="<?php echo $row_cselect_book['b_ISBN_ISSN'] ?>"
                              />
                            </div>
                          </div>
                          
                          
                          <div class="mb-3 col-md-6">
                             <label class="form-label" >Book Call no</label>
                        <div class="input-group">
                          <input class="form-control" type="text" name="b_Call_no" value="<?php echo $row_cselect_book['b_Call_no'] ?>">
                          
                        </div>
                         
                          </div>
                          <div class="mb-3 col-md-6">
                             <label class="form-label">Department</label>
                        <div class="input-group">
                          <select class="form-control" name="d_id" onchange="depaBookType(this.value)">
                            <option selected disabled="">Select option</option>
                          <?php 
$select_department="SELECT * FROM department";
$cselect_department=$connect->prepare($select_department);
$cselect_department->execute();
while($row_cselect_department=$cselect_department->fetch(PDO::FETCH_ASSOC)){
                           ?>
                          <option value="<?php echo $row_cselect_department['d_id']; ?>"><?php echo $row_cselect_department['d_shortname']; ?></option>
                          <?php } ?>
                          </select>
                        </div>
                         
                          </div>
                        <div class="mb-3 col-md-6" id="book_type">
                        <label class="form-label" >Book Type</label>
                        <div class="input-group">
                          <select class="form-control" name="book_type_id">
                            <option selected disabled>Select Book Type</option>
                          </select>
                          
                        </div>
                         
                          </div>
                          
                        </div>
                        <input type="hidden" name="b_id" value="<?php echo $_GET['b_id']; ?>">
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" id="update_books">Register Book</button>
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

          $("#librarian_update_book").validate({
            rules: {
                b_SN:{
                    required: true,
                },
                b_Author:{
                    required: true,
                },
                b_title:{
                    required: true,
                },
                b_Year_Publisher:{
                    required: true,
                },
                b_Publisher:{
                    required: true,
                },
                b_Edition:{
                    required: true,
                },
                b_ISBN_ISSN:{
                    required: true,
                },
                b_Call_no:{
                    required: true,
                },
                d_id:{
                    required: true,
                },
                book_type_id:{
                    required: true,
                },
                
                
               
                
            //   terms: {
            //     required: true
            //   },
            },
            messages: {
                b_SN:{
                    required: "",
                },
                b_Author:{
                    required: "",
                },
                b_title:{
                    required: "",
                },
                b_Year_Publisher:{
                    required: "",
                },
                b_Publisher:{
                    required: "",
                },
                b_Edition:{
                    required: "",
                },
                b_ISBN_ISSN:{
                    required: "",
                },
                b_Call_no:{
                    required: "",
                },
                d_id:{
                    required: "",
                },
                book_type_id:{
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
             var f = $("#librarian_update_book")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/librarian_update_books.php',
                type: 'POST',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_books').html('Progress <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_books').attr("disabled", true);

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


              },
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#update_books').html('Register Book');
                        $('#update_books').attr("disabled", false);
                    }, 200);
                },


            });

}

});
     


     
</script>
  </body>
</html>
