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
                <div class="contain">
                  <div class="row">

<div class="col-md-6 col-lg-4 col-xl-12 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Books Statistics</h5>
                        <?php 
$select_books_number="SELECT count(*)as book_number FROM books";
$cselect_books_number=$connect->prepare($select_books_number);
$cselect_books_number->execute();
$row_cselect_books_number=$cselect_books_number->fetch(PDO::FETCH_ASSOC);

                         ?>
                        <small class="text-muted"><?php echo $row_cselect_books_number['book_number']; ?> Total Sales</small>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="orederStatistics"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      
                      <ul class="p-0 m-0">
                       <?php 
$select_dep="SELECT * FROM department";
$cselect_dep=$connect->prepare($select_dep);
$cselect_dep->execute();
While($row_cselect_dep=$cselect_dep->fetch(PDO::FETCH_ASSOC)){
 ?>
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"
                              ><i class="fas fa-book"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">

                            <div class="me-2">
                              <h6 class="mb-0"><?php echo $row_cselect_dep['d_shortname']; ?></h6>
                              <?php 
$select_book_type="SELECT * FROM books_type WHERE d_id='".$row_cselect_dep['d_id']."'";
$cselect_book_type=$connect->prepare($select_book_type);
$cselect_book_type->execute();
While($row_cselect_book_type=$cselect_book_type->fetch(PDO::FETCH_ASSOC)){

                                 ?>
                              <small class="text-muted"><?php  echo $row_cselect_book_type['book_type_name']."<br>"; ?></small>
                            <?php } ?>
                            </div>
                            <div class="user-progress">
<?php 
$select_book_type="SELECT * FROM books_type WHERE d_id='".$row_cselect_dep['d_id']."'";
$cselect_book_type=$connect->prepare($select_book_type);
$cselect_book_type->execute();
While($row_cselect_book_type=$cselect_book_type->fetch(PDO::FETCH_ASSOC)){

  $select_number="SELECT count(b_SN) as number_book FROM books WHERE book_type_id='".$row_cselect_book_type['book_type_id']."' AND d_id='".$row_cselect_book_type['d_id']."'";
$cselect_number=$connect->prepare($select_number);
$cselect_number->execute();
$row_select_number=$cselect_number->fetch(PDO::FETCH_ASSOC);
  
                                 ?>
                              <small class="fw-semibold"><?php echo $row_select_number['number_book']."<br>"; ?></small>
                              <?php } ?>
                            </div>
                          </div>
                        </li>
<?php   } ?>
                      </ul>
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
<?php 
$current=date("Y-m-d");

$show_borrowed="SELECT * FROM borrowed_book_student  WHERE  bbs_status='BORROWED' and bbs_return_date<'$current'";
$cshow_borrowed=$connect->prepare($show_borrowed);
$cshow_borrowed->execute();
while($row_cshow_borrowed=$cshow_borrowed->fetch(PDO::FETCH_ASSOC)){

$show_student="SELECT * FROM student_request WHERE  sr_id='".$row_cshow_borrowed['sr_id']."' AND sr_status='ACCEPTED'";
$cshow_student=$connect->prepare($show_student);
$cshow_student->execute();
while($row_cshow_student=$cshow_student->fetch(PDO::FETCH_ASSOC)){

if ($row_cshow_student) {
$show_borrowedd="SELECT * FROM student_pernarity WHERE s_id='".$row_cshow_student['s_id']."' AND date_penarities='$current' AND bbs_id='".$row_cshow_borrowed['bbs_id']."' AND sp_status='pending' ";
$cshow_borrowedd=$connect->prepare($show_borrowedd);
$cshow_borrowedd->execute();
$row_cshow_borrowedd=$cshow_borrowedd->fetch(PDO::FETCH_ASSOC);    
if ($row_cshow_borrowedd){
                     
                        
}
else
{
                           $s_id=$row_cshow_student['s_id'];
                           $bbs_id=$row_cshow_borrowed['bbs_id'];
                           $date_penarities=date("Y-m-d");
                           $sp_pernarity=200;
                           $sp_status="pending";
                           $student_pernarity_data=[
                            's_id'=>$s_id,
                            'date_penarities'=>$date_penarities,
                            'sp_pernarity'=>$sp_pernarity,
                            'sp_status'=>$sp_status,
                            'bbs_id'=>$bbs_id,
                             ];
                             
                       
                            
                            $insert="INSERT INTO student_pernarity VALUES ('',:bbs_id,:s_id,:date_penarities,:sp_pernarity,:sp_status)";
                            $cinsert=$connect->prepare($insert);
                            $cinsert->execute($student_pernarity_data);
                       
                       
}


}

}
}
?>
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
  </body>
</html>
