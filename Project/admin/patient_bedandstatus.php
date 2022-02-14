
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

<!-- Begin page content -->
<main>
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <h4 class="card-title">แสดงรายการออเดอร์ทั้งหมด</h4>
                        </center>
                        
                   <label  class="input-group-prepend" style="padding:5px; float:right;"><span class="input-group-text">ค้นหา</span><input type="text" name="filter" placeholder="ค้นหาสินค้า....." id="filter"></label>
             
                        
                        <div class="table-responsive">
                            
                         
        

        
                            <table class="table table-striped table-bordered zero-configuration">
                                
                                
                                <thead>
                                    <tr>
                                        <th scope="col">ไอดีเตียง</th>                                  
                                        <th scope="col">ไอดีผู้ป่วย</th>
                                        <th scope="col">ชื่อ - นามสกุล</th>
                                        <th scope="col">สถานะอาการ</th>
                                        <th scope="col">แอดมินที่รับผิดชอบ</th>                                      
                                         <th scope="col">ว/ด/ปี</th>
                                         <th scope="col">โรงพยาบาลที่อยู่</th>
                                         <th scope="col">การจัดการ</th>
                               
                                        
                                      
                                        
                              
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
					
					$query = sqlsrv_query($conn, "SELECT * FROM bed ") or die(sqlsrv_error());
					while($fetch = sqlsrv_fetch_array($query))
						{
						$bedid = $fetch['bed_id']; 												
                                                $pid = $fetch['patient_id']; 
                                                $name = $fetch['bed_patient_name'].' '.$fetch['bed_patient_lastname'];
                                                $adminid = $fetch['admin_id'];                                           
                                                $Date = $fetch['bed_date']->format('d/m/Y');
                                                $bed_stat= $fetch['bed_status'];
                                                $bedhospital= $fetch['bed_hospital'];
                                                
						
				?>
				<tr>
					<td><?php echo $bedid; ?></td>
                                        <td><?php echo $pid; ?></td>
                                        <td><?php echo $name; ?></td>   
                                        <td><?php echo $bed_stat; ?></td>
                                        <td><?php echo $adminid; ?></td>
                                        <td><?php echo $Date; ?></td>
                                        <td><?php echo $bedhospital; ?></td>
                                         
                                         <td><a href="/Project/patient_details.php?id=<?php echo $bedid; ?>">View</a>
                                      
					<?php 
					if($bed_stat == 'Confirmed'){
					echo '';
					}elseif($bed_stat == 'green'){
                                        //echo '| <a class="btn btn-mini btn-success" href="admin_code/confirm.php?id='.$id.'">ปรับสถานะ</a> ';
                                        echo '| <a class="btn btn-mini btn-info" href="patient_edit_bedstatus.php?id='.$bedid.'">ปรับสถานะ</a> ';
                                    
					}elseif($bed_stat == 'red'){
                                        echo '| <a class="btn btn-mini btn-info" href="patient_edit_bedstatus.php?id='.$bedid.'">ปรับสถานะ</a> ';
                                       
					}elseif($bed_stat == 'blue'){
                                        echo '| <a class="btn btn-mini btn-info" href="patient_edit_bedstatus.php?id='.$bedid.'">ปรับสถานะ</a> ';
                                       
					}elseif($bed_stat == 'orange'){
                                        echo '| <a class="btn btn-mini btn-info" href="patient_edit_bedstatus.php?id='.$bedid.'">ปรับสถานะ</a> ';
                                       
					}
                                        elseif($bed_stat == 'black'){
                                        echo '| <a class="btn btn-mini btn-info" href="patient_edit_bedstatus.php?id='.$bedid.'">ปรับสถานะ</a> ';
                                       
					}
                                        else{
					
					echo '| <a class="btn btn-mini btn-danger" href="admin_code/cancel.php?id='.$id.'">ยกเลิก</a></td>';
					}					
					?>
				</tr>		
				<?php
					}
				?>          
                                </tbody>
                                <tfoot>
                                    <tr>
                             <th scope="col">ไอดีเตียง</th>                                  
                                        <th scope="col">ไอดีผู้ป่วย</th>
                                        <th scope="col">ชื่อ - นามสกุล</th>
                                        <th scope="col">สถานะอาการ</th>
                                        <th scope="col">แอดมินที่รับผิดชอบ</th>                                      
                                         <th scope="col">ว/ด/ปี</th>
                                          <th scope="col">โรงพยาบาลที่อยู่</th>
                                         <th scope="col">การจัดการ</th>
                                     
                                    </tr>
                                </tfoot>
                            </table>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    
    <script src="/Project/javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
	$(document).ready( function() {
		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");

		
		if(confirm("Are you sure you want to delete this product?")){
			
		
			$.ajax({
			type: "POST",
			url: "Project/admin/admin_code/remove.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut(2000, function(){ $(this).remove();}); 
			}
			}); 
			}else{
			return false;}
		});				
	});

</script>
</body>

</html>