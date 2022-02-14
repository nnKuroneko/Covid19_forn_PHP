    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
     
    
    <!--====== PRELOADER PART START ======
    
    <?php
				$id = (int) $_SESSION['id'];
			
					$query = sqlsrv_query ($conn, "SELECT * FROM patient WHERE patient_id = '$id' ") or die (sqlsrv_error($conn));
					$fetch = sqlsrv_fetch_array ($query);
    ?>


   
        <div class="gridtemplate-loader">
            <div class="preloader">
                 <div class="spinner"></div>
                <img   class="preload-logo" src="assets/images/favicon.png">
            </div> 
        </div>


    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    
    
    <section class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                      
                         <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


                            
      <div class="top-bar">
        <div class="container" >
          <div class="row">
            <div class="col-12">
            
             
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">Covid@yourdomain.com</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">+66 123 456 789</span></a>


              <div class="float-right">
                  
               
                     <?php
                                        $role = "";
                                        if (isset($_SESSION['id'])) {
                                            $login = $_SESSION['id'];
                                            $role = $_SESSION['role'];
                                            echo '  <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">FACEBOOK ';
                                        }
                                        ?>
                                        <?php
                                        if ($role == "admin") {
                                            echo ' <a href="admin/admin_login.php" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">การจัดการ ';
                                        }
                                        ?>
                    
                    </span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="function/logout.php" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">ออกจากระบบ</span></a>

              </div>

            </div>

          </div>

        </div>
      </div>
                  

                        <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
                          <div class="container-fluid px-0">

                            <a class="navbar-brand" href="home.php">
                                <img src="assets/images/normal/logo-primary.png" class="" alt="Logo">
                              
                            </a>
                        

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarScroll">
                              <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="--bs-scroll-height: 100px;">
             
                                <li class="nav-item "> <!-- active -->
                                    <a class="nav-link page-scroll" href="home.php">หน้าหลัก</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="#corona"> ข้อมูล</a>
                                </li>
                                 <li class="nav-item">
                                     <a class="nav-link page-scroll" href="help_form_home.php"> ขอความช่วยเหลือ</a>
                                </li>
                                 <!-- <li class="nav-item">
                                    <a class="nav-link page-scroll" href="help_home.php"> ให้ความช่วยเหลือ</a>
                                </li> -->
                                 <li class="nav-item">
                                    <a class="nav-link page-scroll" href="search_patient.php"> ค้นหาทั้งหมด</a>
                                </li>

        
                              </ul>
                              <div class="d-flex">
                                    <div class="button">
                                      
                                       
                                        <a href="myaccount_home.php" class=" page-scroll main-btn-outline btn-outline btn">ข้อมูลส่วนตัว</a>
                                        
                                  <!--      <button type="button" class="btn-inline page-scroll btn main-btn-inline" data-toggle="modal" data-target="#myModal">Open Modal</button>

                                        
                                        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                   -->                     
                                        
                                        
                                        
                                        
                                        
                                        
                                    </div>
                              </div>
                            </div>
                          </div>
                        </nav>


                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
         </div> <!-- header navbar -->


        
    
           


        </div> <!-- header hero -->
    </section>

   