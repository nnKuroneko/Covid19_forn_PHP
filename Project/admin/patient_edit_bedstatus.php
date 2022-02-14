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
        
        <body>

       
  
             
    <?php
				$id = (int) $_SESSION['id'];
			
					$query = sqlsrv_query ($conn, "SELECT * FROM admin WHERE admin_id = '$id' ") or die (sqlsrv_error($conn));
					$fetch = sqlsrv_fetch_array ($query);
    ?>
            <!--**********************************
                Sidebar end
            ***********************************-->

            <!--**********************************
                Content body start
            ***********************************-->
            <main class="flex-shrink-0">
                <div class="content-body">

                    <div class="row page-titles mx-0">
                        <div class="col p-md-0">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                            </ol>
                        </div>
                    </div>

                    <main class="container">

                        <div class="starter-template">
                            <center>
                                <h1>ปรับสถานะเตียง</h1>
                            </center>
                            <br><br>
                            <?php
                            //$mysqli = new mysqli("localhost", "root", "", "storebaby_db");
                            if (isset($_GET['id'])) {
                                $sql = "Select * from bed where bed_id=" . $_GET['id'];
                                
                                $result = sqlsrv_query($conn, $sql);
                                while ($data = sqlsrv_fetch_object($result)) {
                                    $bed_id = $data->bed_id;

                                    ?>
                            
                                    <form method="post" action="">
                                        <input type="hidden" id="id" name="bed_id" value=<?php echo $bed_id; ?>>
                                        <div class="form-group">
                                        <!--<input type="radio" name="contact_stat" class="radio" value="Confirmed">
                                        <label for="f-option3">Confirmed : ลูกค้าได้รับสินค้าเรียบร้อย </label>-->
                                         <br>
                                        <input type="radio" name="bed_status" class="radio" value="green">
                                        <label for="f-option3">Green : รักษาหายแล้ว </label>
                                         <br>
                                        <input type="radio" name="bed_status" class="radio" value="red">
                                        <label for="f-option3">Red : อาการรุนแรง </label>  
                                         <br>
                                        <input type="radio" name="bed_status" class="radio" value="orange">
                                        <label for="f-option3">Orange : กำลังรักษา </label>   
                                         <br>
                                        <input type="radio" name="bed_status" class="radio" value="black">
                                        <label for="f-option3">Black : เสียชีวิต </label> 
                                        
                                        </div>
                                        <center>
                                            <h1>เลือกโรงพยาบาล</h1>
                                        </center>
                                         <div class="form-group">
                                        <!--<input type="radio" name="contact_stat" class="radio" value="Confirmed">
                                        <label for="f-option3">Confirmed : ลูกค้าได้รับสินค้าเรียบร้อย </label>-->
                                         <br>
                                        <input type="radio" name="bed_hospital" class="radio" value="H1">
                                        <label for="f-option3">รพ : โรงพยาบาลแหลมฉบัง </label>
                                         <br>
                                        <input type="radio" name="bed_hospital" class="radio" value="H2">
                                        <label for="f-option3">รพ : โรงพยาบาลวิภารามแหลมฉบัง </label>  
                                         <br>
                                        <input type="radio" name="bed_hospital" class="radio" value="H3">
                                        <label for="f-option3">รพ : โรงพยาบาลสมเด็จพระบรมราชเทวี ณ ศรีราชา </label>   
                                         <br>
                                        <input type="radio" name="bed_hospital" class="radio" value="H4">
                                        <label for="f-option3">รพ : โรงพยาบาลสมิติเวชศรีราชา </label> 
                                        <br>
                                        <input type="radio" name="bed_hospital" class="radio" value="H5">
                                        <label for="f-option3">รพ : โรงพยาบาลพญาไทศรีราชา </label> 
                                        
                                        </div>
                                        
                                        <br><br>
                                        <button type="submit" name="success" class="btn btn-primary">บันทึกรายการ</button>

                                        
                                        
                                    </form>
        <?php
    } // while 
} //if
?>    
                            <?php

if (isset($_POST['success'])) {
    //$mysqli = new mysqli("localhost", "root", "", "storebaby_db");

    $bed = $_POST['bed_id'];
    $cstat = $_POST['bed_status'];
    $bedhospital = $_POST['bed_hospital'];

                if($cstat == 'green')				
                {
                $t_sql = "UPDATE bed SET bed_status='green'  WHERE bed_id = '$bed'";
                }
                elseif($cstat == 'red')				
                {
                $t_sql = "UPDATE bed SET bed_status='red'  WHERE bed_id = '$bed'";
                }
                elseif($cstat == 'orange')				
                {
                $t_sql = "UPDATE bed SET bed_status='orange'  WHERE bed_id = '$bed'";
                }
                elseif($cstat == 'black')				
                {
                $t_sql = "UPDATE bed SET bed_status='black'  WHERE bed_id = '$bed'";
                }
                //elseif($cstat == 'Confirmed')				
                //{
                //$t_sql = "UPDATE transaction SET contact_stat='Confirmed'  WHERE transaction_id = '$conid'";
                //}
                else				
                {
                }
                
                 if($bedhospital == 'H1')				
                {
                $t_sql1 = "UPDATE bed SET bed_hospital='โรงพยาบาลแหลมฉบัง'  WHERE bed_id = '$bed'";
                }
                elseif($bedhospital == 'H2')				
                {
                $t_sql1 = "UPDATE bed SET bed_hospital='โรงพยาบาลวิภารามแหลมฉบัง'  WHERE bed_id = '$bed'";
                }
                elseif($bedhospital == 'H3')				
                {
                $t_sql1 = "UPDATE bed SET bed_hospital='โรงพยาบาลสมเด็จพระบรมราชเทวี ณ ศรีราชา'  WHERE bed_id = '$bed'";
                }
                elseif($bedhospital == 'H4')				
                {
                $t_sql1 = "UPDATE bed SET bed_hospital='โรงพยาบาลสมิติเวชศรีราชา'  WHERE bed_id = '$bed'";
                }
                elseif($bedhospital == 'H5')				
                {
                $t_sql1 = "UPDATE bed SET bed_hospital='โรงพยาบาลพญาไทศรีราชา'  WHERE bed_id = '$bed'";
                }
                //elseif($cstat == 'Confirmed')				
                //{
                //$t_sql = "UPDATE transaction SET contact_stat='Confirmed'  WHERE transaction_id = '$conid'";
                //}
                else				
                {
                }
                
          
           $t_result = sqlsrv_query($conn,$t_sql); 
           $t_result1 = sqlsrv_query($conn,$t_sql1); 
    
            $result = sqlsrv_query($conn, $t_sql);
            
           
        if (!$result) {

            echo "<script>alert('บันทึกรายการผิดพลาด')</script>";
            echo "<script>window.location = 'patient_bedandstatus.php'</script>";
        } else {

            echo "<script>alert('บันทึกรายการเรียบร้อย')</script>";
            echo "<script>window.location = 'patient_bedandstatus.php'</script>";
            // header( "refresh: 1; url=/NewProject_3/admin/listitem.php" );
            //exit(0);
        }
        
     
                                
    
}
?>
                        </div>

                    </main>

                    <!-- #/ container -->
                </div>


                <!--**********************************
                    Content body end
                ***********************************-->


                <!--**********************************
                    Footer start
                ***********************************-->
                <div class="footer">
                    <div class="copyright">
                        <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
                    </div>
                </div>
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