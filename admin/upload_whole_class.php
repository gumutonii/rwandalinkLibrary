<?php include 'php/server.php'; ?>
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
    <script src="../table2excel.js"></script>

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
<div class="row">
  <div class="col-md-4"><button class="btn btn-info" onclick="exportToExcel()">Download Formart</button></div>
</div>
                <h5 class="card-header">List Of </h5>
                
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      
                    </thead>
                    <tbody class="table-border-bottom-0" >
                      <tr>
                        <td></td>
                        <td>First Name</td>
                        <td>Last name</td>
                        <td>Gender</td>
                        <td>reg</td>
                        <td><?php echo $_GET['d_id']; ?></td>
                        <td><?php echo $_GET['o_id']; ?></td>
                        <td><?php echo $_GET['y_id']; ?></td>
                        <td><?php echo $_GET['program']; ?></td>
                        <td><?php echo $_GET['study_mode']; ?></td>
                        <td><?php echo $_GET['academic_year']; ?></td>
                        <td><?php echo $_GET['s_status']; ?></td>

                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="mt-2 mb-4">
                  <form method="POST" enctype="multipart/form-data">
                  <label>Upload file</label>
                  <input type="file" name="file_upload" class="form-control">
                  <button class="btn btn-secondary mt-2" name="Upload_student">Upload file</button>
                </form>
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
    <script>
function exportToExcel() {

     
  var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("table"));
    }
    </script>
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