<?php include'../php/book_books.php'; ?>
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

          <?php   include 'Navbar.php'; ?>

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
                    
                    
                    <div class="card"> 

                <h5 class="card-header">List Of <?php echo $_SESSION['s_id'] ?> </h5>
                
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>N<sup>o</sup></th>
                        <th>Book Author</th>
                        <th>Book Titile</th>
                        <th>Year of Publisher</th>
                        <th>publisher</th>
                        <th>Edition</th>
                        <th>Reguist</th>

                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="book_details">
                      <?php
                      $book_type_id=$_GET['book_type_id'];
$d_id=$_GET['d_id'];
$i=1;
$select_bsn="SELECT * FROM book_in_stock WHERE b_status='available'";
$cselect_bsn=$connect->prepare($select_bsn);
$cselect_bsn->execute();
while($row_cselect_bsn=$cselect_bsn->fetch(PDO::FETCH_ASSOC)){

$select_book="SELECT * FROM books WHERE d_id='$d_id' AND book_type_id='$book_type_id' AND b_SN='".$row_cselect_bsn['b_SN']."'";
$cselect_book=$connect->prepare($select_book);
$cselect_book->execute();
while($row_cselect_book=$cselect_book->fetch(PDO::FETCH_ASSOC)){
 ?>
 <tr>
  <td><?php echo $i++; ?></td>
   <td><?php echo $row_cselect_book['b_Author']; ?></td>
   <td><?php echo $row_cselect_book['b_title']; ?></td>
   <td><?php echo $row_cselect_book['b_Year_Publisher']; ?></td>
   <td><?php echo $row_cselect_book['b_Publisher']; ?></td>
   <td><?php echo $row_cselect_book['b_Edition']; ?></td>



   <td>
    <form method="post">
    <input type="hidden" name="b_SN" value="<?php echo $row_cselect_book['b_SN']; ?>">
    <input type="hidden" name="s_id" value="<?php echo $_SESSION['s_id'] ?>">
    <button class="btn btn-info" type="submit" name="insert"><i class="fas fa-check-circle"></i></button>
    </form>
   </td>
 </tr>
 <?php } }?>
                    </tbody>
                  </table>
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
            <?php   include 'footer.php'; ?>
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
    <script src="../assets/bootstrap/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="app.js"></script>

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
     
  </body>
</html>
