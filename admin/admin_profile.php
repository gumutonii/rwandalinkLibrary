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
                   echo $register_admin_m;
                   echo $register_admin_u;
                   $select_admin="SELECT * FROM admin";
                   $cselect_admin=$connect->prepare($select_admin);
                   $cselect_admin->execute();
                   $row_cselect_admin=$cselect_admin->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="profile/<?php echo $row_cselect_admin['a_profile']; ?>"
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
                      <form id="register_admin" method="POST" >
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input
                              class="form-control"
                              type="text"
                              name="a_first_name"
                              value="<?php echo $row_cselect_admin['a_first_name']; ?>" 
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="a_last_name" value="<?php echo $row_cselect_admin['a_last_name']; ?>">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="email" name="a_email" value="<?php echo $row_cselect_admin['a_email']; ?>">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">RW (+250)</span>
                              <input
                                type="text" 
                                name="a_telphone"
                                class="form-control"
                                value="<?php echo $row_cselect_admin['a_telphone']; ?>"
                              />
                            </div>
                          </div>
                          
                          
                          
                          
                          
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">Gender</label>
                            <select class="select2 form-select" name="a_gender">
                              <option value="">Select Gender</option>
                              <?php 
$select_gender="SELECT * FROM gender";
$cselect_gender=$connect->prepare($select_gender);
$cselect_gender->execute();
while($row_cselect_gender=$cselect_gender->fetch(PDO::FETCH_ASSOC)){
  if ($row_cselect_gender['g_name']==$row_cselect_admin['a_gender']) {
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
                          <input class="form-control" type="Password" name="a_password" value="<?php echo $row_cselect_admin['a_password']; ?>">
                          
                        </div>
                        <input type="hidden" name="a_id" value="<?php echo $row_cselect_admin['a_id']; ?>"> 
                          </div>
                          
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" name="update_admin">Update Account</button>
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
  </body>
</html>
