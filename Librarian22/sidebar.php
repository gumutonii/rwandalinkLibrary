<?php
//  include '../php/server.php';
// if (empty($_SESSION['lb_id'])){
//  header("location:../index.php");
// }
?>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">ISOMERO-HAFI</span>
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
                <i class="menu-icon tf-icons fas fa-warehouse"></i>
                <div data-i18n="Layouts">Department</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="librarian_department.php" class="menu-link">
                    <div data-i18n="Without menu">Register Department</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="librarian_review_department.php" class="menu-link">
                    <div data-i18n="Without menu">Review Department</div>
                  </a>
                </li>  
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-swatchbook"></i>
                <div data-i18n="Layouts">Book Type</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="book_types.php" class="menu-link">
                    <div data-i18n="Without menu">Register Book Type</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="librarian_review_bookType.php" class="menu-link">
                    <div data-i18n="Without menu">Review Book Type</div>
                  </a>
                </li>  
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-book-open"></i>
                <div data-i18n="Layouts">Book</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="book.php" class="menu-link">
                    <div data-i18n="Without menu">Register Book</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="review_books.php" class="menu-link">
                    <div data-i18n="Without menu">Review Book</div>
                  </a>
                </li>  
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fas fa-book-medical"></i>
                <div data-i18n="Layouts">Book Request</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="requested_books.php" class="menu-link">
                    <div data-i18n="Without menu">View Requists</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="Borrow_back.php" class="menu-link">
                    <div data-i18n="Without menu">Borrow Back</div>
                  </a>
                </li>  
                
              </ul>
            </li>
            
            
            
                 
          </ul>
        </aside>