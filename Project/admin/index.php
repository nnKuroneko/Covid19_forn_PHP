<!DOCTYPE html>

<?php
include("admin_code/session_admin.php");
 include("../function/alert.php");
include("../db/connect.php");
?>
        <!--**********************************
            Sidebar end
        
        ***********************************-->
         <?php
include ("FooterAdmin.php");
?>
        <head>
            
            
        </head>
        
        <body>

        <!--**********************************
            Content body start
        ***********************************-->

                
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">

                    
                      <?php
				$id = (int) $_SESSION['id'];
			
					$query = sqlsrv_query ($conn, "SELECT * FROM admin WHERE admin_id = '$id' ") or die (sqlsrv_error($conn));
					$fetch = sqlsrv_fetch_array ($query);
    ?>
                    
                    
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">�?ู�?�?�?วย�?�?ระ�?�?</h3>
                                <div class="d-inline-block">
                                    
                                    <h2 class="text-white">
                                        
                                          <?php

        $sql=sqlsrv_query($conn,"SELECT * FROM [dbo].[patient] " , array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));                               
    
    
        ?>
                                        
                                        
              <h3><?php echo sqlsrv_num_rows($sql) ; ?></h3>
                             
      
                                    </h2>
                           
                                    <p class="text-white mb-0">#</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                   
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">รอ�?ารอ�?ุมัติ</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">
                                    
                                   
      
                                        
                                    
                                    </h2>
                                    <p class="text-white mb-0">#</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-calendar-check-o"></i></span>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">�?ู�?�?�?วยที�?�?อรั�?�?ารรั�?ษา</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">
                                        
                                         <?php

        $sql=sqlsrv_query($conn,"SELECT * FROM [dbo].[patient_details] " , array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));                               
    
    
        ?>
    
                      
              <h3><?php echo sqlsrv_num_rows($sql) ; ?></h3>
                                    
                                    </h2>
                                    <p class="text-white mb-0">#</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-wheelchair"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">อยู�?�?�?�?ั�?�?ตอ�?�?ารรั�?ษา</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">
                      
                                                   <?php

       $sql=sqlsrv_query($conn,"SELECT * FROM [dbo].[bed] where bed_status= 'orange' or bed_status='red' " , array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
                               
    
    
        ?>
                                        
              <h3><?php echo sqlsrv_num_rows($sql) ; ?></h3>
              
                                    </h2>
                                    <p class="text-white mb-0">#</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-medkit"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                    
               
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
      
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>