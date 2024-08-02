
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
            
            <div class="container-fluid">
            <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <form method="post">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                          <td>No</td>
                                        <th>Book Title</th>
                                        <th>Book Serial Number</th>
                                        <th >Status</th>
                                        <th >Return Date</th>
                                        
                                    </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php

                                        error_reporting(0);
$show_approve_reqiust="SELECT distinct(s_id) FROM student_request WHERE s_id='".$_SESSION['s_id']."' AND sr_status='ACCEPTED'";
                  $cshow_approve_reqiust=$connect->prepare($show_approve_reqiust);
                  $cshow_approve_reqiust->execute();
                  while($row_cshow_approve_reqiust=$cshow_approve_reqiust-> fetch(PDO::FETCH_ASSOC)){

                  ?>
                                   <tr>
                                    

                                        <td>

                                          <?php
                  $i=1;
                  $show_approve_reqiust_book_o="SELECT distinct(sr_date) FROM student_request WHERE s_id='".$row_cshow_approve_reqiust['s_id']."'  AND sr_status='ACCEPTED'";
                  $cshow_approve_reqiust_book_o=$connect->prepare($show_approve_reqiust_book_o);
                  $cshow_approve_reqiust_book_o->execute();
                  while($row_cshow_approve_reqiust_book_o=$cshow_approve_reqiust_book_o-> fetch(PDO::FETCH_ASSOC)){


                $show_approve_reqiust_order="SELECT distinct(sr_order_no) FROM student_request WHERE s_id='".$row_cshow_approve_reqiust['s_id']."' AND sr_date='".$row_cshow_approve_reqiust_book_o['sr_date']."'  ";
                  $cshow_approve_reqiust_order=$connect->prepare($show_approve_reqiust_order);
                  $cshow_approve_reqiust_order->execute();
                  while($row_cshow_approve_reqiust_order=$cshow_approve_reqiust_order-> fetch(PDO::FETCH_ASSOC)){

                  $show_approve_reqiust_book="SELECT * FROM student_request WHERE s_id='".$row_cshow_approve_reqiust['s_id']."' AND sr_date='".$row_cshow_approve_reqiust_book_o['sr_date']."'  AND sr_status='ACCEPTED' AND sr_order_no='".$row_cshow_approve_reqiust_order['sr_order_no']."'";
                  $cshow_approve_reqiust_book=$connect->prepare($show_approve_reqiust_book);
                  $cshow_approve_reqiust_book->execute();
                  while($row_cshow_approve_reqiust_book=$cshow_approve_reqiust_book-> fetch(PDO::FETCH_ASSOC)){
                  
                  $show_book="SELECT * FROM book_in_stock WHERE b_SN='".$row_cshow_approve_reqiust_book['b_SN']."' AND b_status='BOOKED'";
                  $cshow_book=$connect->prepare($show_book);
                  $cshow_book->execute();
                  $row_show_book=$cshow_book ->fetch(PDO::FETCH_ASSOC);

                  $show_book_name="SELECT * FROM books WHERE b_SN='".$row_show_book['b_SN']."' AND b_id='".$row_show_book['b_id']."'";
                  $cshow_book_name=$connect->prepare($show_book_name);
                  $cshow_book_name->execute();
                  $row_show_book_name=$cshow_book_name ->fetch(PDO::FETCH_ASSOC);
                  ?>
                
                 <b><?php echo $i++; ?></b>
                 </td>
                 <td>
                 <?php echo $row_show_book_name['b_title']."<br> "; ?>
                 <?php  }
                //  echo "<hr>";
             }
                
                                         }?>
                                      </td>
                                         
                                        <td>
                                           <?php 
                    $show_approve_reqiust_book_s_O="SELECT distinct(sr_date) FROM student_request WHERE s_id='".$row_cshow_approve_reqiust['s_id']."'  AND sr_status='ACCEPTED'";
                  $cshow_approve_reqiust_book_s_O=$connect->prepare($show_approve_reqiust_book_s_O);
                  $cshow_approve_reqiust_book_s_O->execute();
                  while($row_cshow_approve_reqiust_book_s_O=$cshow_approve_reqiust_book_s_O-> fetch(PDO::FETCH_ASSOC)){

                  $show_approve_reqiust_order="SELECT distinct(sr_order_no) FROM student_request WHERE s_id='".$row_cshow_approve_reqiust['s_id']."' AND sr_date='".$row_cshow_approve_reqiust_book_s_O['sr_date']."'  ";
                  $cshow_approve_reqiust_order=$connect->prepare($show_approve_reqiust_order);
                  $cshow_approve_reqiust_order->execute();
                  while($row_cshow_approve_reqiust_order=$cshow_approve_reqiust_order-> fetch(PDO::FETCH_ASSOC)){                       

                   $show_approve_reqiust_book_s="SELECT * FROM student_request WHERE s_id='".$row_cshow_approve_reqiust['s_id']."' AND sr_date='".$row_cshow_approve_reqiust_book_s_O['sr_date']."'  AND sr_status='ACCEPTED' AND sr_order_no='".$row_cshow_approve_reqiust_order['sr_order_no']."'";
                  $cshow_approve_reqiust_book_s=$connect->prepare($show_approve_reqiust_book_s);
                  $cshow_approve_reqiust_book_s->execute();
                  while($row_cshow_approve_reqiust_book_s=$cshow_approve_reqiust_book_s-> fetch(PDO::FETCH_ASSOC)){
                  
                  $show_book_s="SELECT * FROM book_in_stock WHERE b_SN='".$row_cshow_approve_reqiust_book_s['b_SN']."' AND b_status='BOOKED'";
                  $cshow_book_s=$connect->prepare($show_book_s);
                  $cshow_book_s->execute();
                  $row_show_book_s=$cshow_book_s ->fetch(PDO::FETCH_ASSOC);

                  ?>
                  <?php echo $row_show_book_s['b_SN']."<br> ";?>
                  <?php
                  // echo "<hr>";
              }
                   }
                   
               }

 ?>  
                                        </td>
                                        <td>
                                            <?php  

$show_approve_reqiust_status="SELECT distinct(sr_date) FROM student_request WHERE s_id='".$row_cshow_approve_reqiust['s_id']."'  AND sr_status='ACCEPTED'";
    $cshow_approve_reqiust_status=$connect->prepare($show_approve_reqiust_status);
    $cshow_approve_reqiust_status->execute();
    while($row_cshow_approve_reqiust_status=$cshow_approve_reqiust_status-> fetch(PDO::FETCH_ASSOC)){

    $show_approve_reqiust_order="SELECT distinct(sr_order_no) FROM student_request WHERE s_id='".$row_cshow_approve_reqiust['s_id']."' AND sr_date='".$row_cshow_approve_reqiust_status['sr_date']."'  ";
    $cshow_approve_reqiust_order=$connect->prepare($show_approve_reqiust_order);
    $cshow_approve_reqiust_order->execute();
    while($row_cshow_approve_reqiust_order=$cshow_approve_reqiust_order-> fetch(PDO::FETCH_ASSOC)){                        
                                          
        $show_approve_reqiust_book_na="SELECT * FROM student_request WHERE s_id='".$row_cshow_approve_reqiust['s_id']."' AND sr_date='".$row_cshow_approve_reqiust_status['sr_date']."'  AND sr_status='ACCEPTED' AND sr_order_no='".$row_cshow_approve_reqiust_order['sr_order_no']."'";
        $cshow_approve_reqiust_book_na=$connect->prepare($show_approve_reqiust_book_na);
        $cshow_approve_reqiust_book_na->execute();
        $row_cshow_approve_reqiust_book_na=$cshow_approve_reqiust_book_na-> fetch(PDO::FETCH_ASSOC);
       echo $row_cshow_approve_reqiust_book_na['sr_status']."<br>";
}}

                                          ?>
                                        </td>
                                        <td>
                                            <?php
                                            
                              
                                            

                                          
                   $show_approve_reqiust_book_date="SELECT * FROM borrowed_book_student WHERE sr_id='".$row_cshow_approve_reqiust_book_na['sr_id']."'  AND bbs_status='BORROWED'";
                  $cshow_approve_reqiust_book_date=$connect->prepare($show_approve_reqiust_book_date);
                  $cshow_approve_reqiust_book_date->execute();
            while($row_cshow_approve_reqiust_book_date=$cshow_approve_reqiust_book_date-> fetch(PDO::FETCH_ASSOC)){
                  
                  echo $row_cshow_approve_reqiust_book_date['bbs_return_date']."<br> ";
              }
                  ?>
                                        </td>
                                        <!-- <td> -->
                                            <?php   

//     $show_approve_reqiust_pena="SELECT distinct(sr_order_no) FROM student_request WHERE sr_id='".$row_cshow_approve_reqiust['sr_id']."'  AND sr_status='ACCEPTED'";
//     $cshow_approve_reqiust_pena=$connect->prepare($show_approve_reqiust_pena);
//     $cshow_approve_reqiust_pena->execute();
//     while($row_cshow_approve_reqiust_pena=$cshow_approve_reqiust_pena-> fetch(PDO::FETCH_ASSOC)){

      
// $show_approve_reqiust_book_borr="SELECT * FROM borrowed_books WHERE u_id='".$row_cshow_approve_reqiust['u_id']."' AND u_order_no='".$row_cshow_approve_reqiust_pena['u_order_no']."' AND br_book_status='borrowed out'";
// $cshow_approve_reqiust_book_borr=$connect->prepare($show_approve_reqiust_book_borr);
// $cshow_approve_reqiust_book_borr->execute();
// while($row_cshow_approve_reqiust_book_borr=$cshow_approve_reqiust_book_borr-> fetch(PDO::FETCH_ASSOC)){

// $show_date_pena_s="SELECT SUM(br_penaritis) AS total_penarities FROM penarities WHERE u_id='".$row_cshow_approve_reqiust['u_id']."' AND borrowed_id='".$row_cshow_approve_reqiust_book_borr['borrowed_id']."'";
//     $cshow_date_pena_s=$connect->prepare($show_date_pena_s);
//     $cshow_date_pena_s->execute();
//     $row_cshow_date_pena_s=$cshow_date_pena_s-> fetch(PDO::FETCH_ASSOC);
//                                          ?> 
 <?php 

  // echo $row_cshow_date_pena_s['total_penarities']."RWF"."<br> "."<hr>";  
  ?>
<?php 
  // }

// }
 ?>
                                        <!-- </td> -->
                                    
                                        
                                    </tr>
<?php 
echo"<hr>";


} ?>
                                  </tbody>
                                  </table>
                                  </div>
                                  </form>

                        </div>
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
     <script>
        $(document).ready(function () {
fetch();
   });
    function fetch(){
      const queryString=window.location.search;
    $.ajax({ 
           url:"requeted_book_details.php",
            type:'GET',
            data:queryString,
             // beforeSend: function () {
             //        $('#Refresh').show();
             //    },
            success: function(data) {
                $('#book_details').html(data);
            },
     });
};

function delete_request_book(data){
        $.ajax({
                url: '../php/student_delete_request.php',
                type: 'POST',
                data: {
                  data:data
                },
              dataType:"json",
              beforeSend:function(){

                return confirm('Are You Sure You Want to delete request ');
              },
              success: function(dataResult){

                if (dataResult == 1) {
                  fetch();
                }
                else
                {
                  fetch();
                }
           

              },
               


            });
     
     };
     
</script>
  </body>
</html>
