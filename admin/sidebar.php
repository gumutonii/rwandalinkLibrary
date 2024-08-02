<?php include '../php/server.php';
if (empty($_SESSION['a_id'])){
 header("location:../index.php");
}
?>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                
              </span>
              <H5 class="app-brand-text menu-text ">RWANDALINKLIBRARY</H5>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-calendar-plus"></i>
                <div data-i18n="Layouts">Academic Year</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="create_academic_year.php" class="menu-link">
                    <div data-i18n="Without menu">Create Academic Year</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="review_academicYear.php" class="menu-link">
                    <div data-i18n="Without menu">Review Academic Year</div>
                  </a>
                </li>  
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-calendar-plus"></i>
                <div data-i18n="Layouts">Year Of Study</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="create_Year_Of_Study.php" class="menu-link">
                    <div data-i18n="Without menu">Create Year Of Study</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="review_Year_Of_Study.php" class="menu-link">
                    <div data-i18n="Without menu">Review Year Of Study</div>
                  </a>
                </li>  
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-suitcase"></i>
                <div data-i18n="Layouts">Function</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="create_function.php" class="menu-link">
                    <div data-i18n="Without menu">Create Function</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="review_functions.php" class="menu-link">
                    <div data-i18n="Without menu">Review Function</div>
                  </a>
                </li>  
                
              </ul>
            </li>

           <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-warehouse"></i>
                <div data-i18n="Layouts">Department</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="department.php" class="menu-link">
                    <div data-i18n="Without menu">Register Department</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="review_department.php" class="menu-link">
                    <div data-i18n="Without menu">Review Department</div>
                  </a>
                </li>  
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-hdd"></i>
                <div data-i18n="Layouts">Option</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="option.php" class="menu-link">
                    <div data-i18n="Without menu">Register Option</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="review_option.php" class="menu-link">
                    <div data-i18n="Without menu">Review Option</div>
                  </a>
                </li>  
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-user-tie"></i>
                <div data-i18n="Layouts">Librarian</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="Librarian.php" class="menu-link">
                    <div data-i18n="Without menu">Register Librarian</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="review_Librarian.php" class="menu-link">
                    <div data-i18n="Without menu">Review Librarian</div>
                  </a>
                </li>  
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-users"></i>
                <div data-i18n="Layouts">Student</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="student.php" class="menu-link">
                    <div data-i18n="Without menu">Register Student</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="review_student.php" class="menu-link">
                    <div data-i18n="Without menu">Review Student</div>
                  </a>
                </li>  
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-user-circle"></i>
                <div data-i18n="Layouts">Lecture</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="lecturer.php" class="menu-link">
                    <div data-i18n="Without menu">Register Lecturer</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="review_lecturer.php" class="menu-link">
                    <div data-i18n="Without menu">Review Lecturer</div>
                  </a>
                </li>  
                
              </ul>
            </li>
                 
          </ul>
        </aside>