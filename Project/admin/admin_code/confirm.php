
<?php
        include("../db/connect.php");
?>

		<?php
		//$mysqli = new mysqli("localhost", "root", "", "storebaby_db");
		session_start();
                session_regenerate_id();
                                                        
		$pdeid = $_GET['id'];
                $id = $_SESSION['id'];
              
		
		sqlsrv_query($conn, "UPDATE patient_details SET patient_de_status = 'Confirmed' WHERE patient_de_id = '$pdeid'");
		
		$query2 = sqlsrv_query($conn, "SELECT * FROM [dbo].[patient_details] WHERE patient_de_id='$pdeid'   ");
		while($fetch2 = sqlsrv_fetch_array($query2)){
   
                $name = $fetch2['patient_de_name'];
                $lastname = $fetch2['patient_de_lastname'];
                $pid = $fetch2['patient_id'];
                $Date = date("Y-m-d");
                 //$Date = '2021-10-14';
		
                sqlsrv_query ($conn, "INSERT INTO [dbo].[bed] (patient_id, bed_status, bed_patient_name, bed_patient_lastname, admin_id , bed_date)
		VALUES ('$pid', 'green', '$name', '$lastname', '$id' , '$Date' )");
                
                $t_sql = "UPDATE bed SET bed_date='$Date' WHERE patient_id= '$pid'";
                
                
               // sqlsrv_query($conn, "UPDATE bed SET bed_date ='$Date' WHERE patient_id= '$pid'");
                
		}
		echo "<script>alert('บันทึกรายการเรียบร้อยแล้ว')</script>";
    header( "refresh: 2; url=http://localhost/Project/admin/patient_setting.php" );		
		
		?>