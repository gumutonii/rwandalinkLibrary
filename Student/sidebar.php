<?php include '../php/server.php';
if (empty($_SESSION['s_id'])){
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
                <i class="fas fa-book-reader"></i> 
                <div data-i18n="Layouts"><span>Books</span></div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="book_department.php" class="menu-link">
                    <div data-i18n="Without menu">Request Books</div>
                  </a>
                  <a href="requested_book.php" class="menu-link">
                    <div data-i18n="Without menu">View Requested Books</div>
                  </a>
                </li>
                  
                
              </ul>
            </li>

           
             <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="fas fa-book-reader"></i> 
                <div data-i18n="Layouts">About Books</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="approved_book.php" class="menu-link">
                    <div data-i18n="Without menu">When To Return</div>
                  </a>
                  <a href="Borrow_back.php" class="menu-link">
                    <div data-i18n="Without menu">Borrowed Book</div>
                  </a>
                </li>
                  
                
              </ul>
            </li>
            
            
            
                 
          </ul>
        </aside>


        