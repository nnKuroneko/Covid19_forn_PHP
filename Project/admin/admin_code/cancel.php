		<?php
                
                include("../db/connect.php");
		
		$t_id = $_GET['id'];
		
		sqlsrv_query($conn, "UPDATE patient_details SET patient_de_status = 'Cancelled' WHERE patient_de_id = '$t_id'");
								
		 echo "<script>alert('บันทึกรายการเรียบร้อยแล้ว')</script>";
    header( "refresh: 2; url=/Project/admin/patient_setting.php" );	
		
		?>