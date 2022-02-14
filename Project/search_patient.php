
<!DOCTYPE html>
<?php
include("function/session.php");
include("db/connect.php");
?>

<html lang="en">

    <head>
       <meta charset="utf-8">
        <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
        <!--  All snippets are MIT license http://bootdey.com/license -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Baby Store - สำหรับลูกน้อย </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        
        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
    
    
    
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>



    <body>


        <?php
				$id = (int) $_SESSION['id'];
			
					$query = sqlsrv_query ($conn, "SELECT * FROM patient WHERE patient_id = '$id' ") or die (sqlsrv_error($conn));
					$fetch = sqlsrv_fetch_array ($query);
    ?>


       
 <main>
       <div class="topnav">
           <a class="active" href="home.php">หน้าหลัก</a>
           <a href="">About</a>
           <a href="help_form_home.php">ขอความช่วยเหลือ</a>
      
  
</div>

   
                  
            

                        <div class="content-panel">
                            <center>
                                <br>
                                <br>
                                <br>
                                <h2 class="title"><i class="text-success">ค้นหารายชื่อหรือข้อมูลผู้ป่วยทั้งหมด</i></h2>
                                <br>
                             <h3 class="fieldset-title">
                             
                                  <?php
       // $mysqli = new mysqli("localhost", "root", "", "covid_db");

        $sql=sqlsrv_query($conn,"SELECT * FROM [dbo].[bed]");      
        
        echo '<h3>จำนวนผู้ป่วย <i class="text-success">' . sqlsrv_has_rows($sql) . '</i> คน
          </h3>
            ';
        
        ?>
          <label  class="input-group-prepend" style="padding:5px; float:left;">
                       <span class="input-group-text">ค้นหา</span>
                       <input type="text" name="filter" placeholder="ค้นหาผู้ป่วย....." id="filter"></label>
    
                             </h3>
                             <br>
                             <br>
                             <br>
                            
                              </center>
      
                            
                              <div class="container-fluid">
        <div class="row">
           
            <div class="col-12">
                
                <div class="card">
                    
                    <div class="card-body">
                        
                        <center>
                        <h4 class="card-title">ประวัติการแจ้งปัญหาของคุณ</h4>
                        
                        </center>
                        
                   
                        
                        <div class="table-responsive">
                            
                         
        

        <?php
       // $mysqli = new mysqli("localhost", "root", "", "covid_db");

        
        ?>
                            <table class="table table-striped table-bordered zero-configuration">
                                
                                
                                <thead>
                                    <tr>
                                        <th scope="col">ไอดีเตียง</th>                                  
                                      
                                   
                                        <th scope="col">อาการของคุณ</th>
                                        <th scope="col">รายละเอียด</th>
                                        <th scope="col">เวลาที่แจ้งเข้าระบบ</th>
                                     
                                        <th scope="col">ติดตาม</th>
                              
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                   
					
					$query = sqlsrv_query($conn, "SELECT * FROM bed ") or die(sqlsrv_error());
					while($fetch = sqlsrv_fetch_array($query))
						{
						$id = $fetch['bed_id']; 												
                                                $pdeid = $fetch['patient_id']; 
						//$idcard = $fetch['id_card'];
                                                
                                                $Date = $fetch['bed_date']->format('d/m/Y');
						$bed_stat = $fetch['bed_status'];
                                              // $bed_date = $fetch['bed_date'];
                                                
                                                $query1 = sqlsrv_query($conn, "SELECT * FROM patient_details WHERE patient_id = '$pdeid'") or die(sqlsrv_error());
                                                $rows = sqlsrv_fetch_array($query1);
                                                
                                                $details = $rows['patient_de_details'];
                                                $con = $rows['patient_de_con'];
						
						//$name = $fetch['firstname'].' '.$fetch['lastname'];
				?>
				<tr>
					<td><?php echo $id; ?></td>                         
                                        <td><?php echo $con; ?></td>
                                        <td><?php echo $details; ?></td>
					<td><?php echo $Date; ?></td>
                                        <!-- <td><a class="genric-btn primary-border" href="receipt.php?tid=<?php echo $id; ?>">ใบเสร็จ</a> -->
                                        
                                        <?php 
					if($bed_stat == 'red'){	
                                            echo ' <td><a href="patient_details.php?id='.$fetch['bed_id'].'" class="genric-btn success">ข้อมูลเพิ่มเติม</a></td>';
                                        }elseif($bed_stat == 'green'){	
                                            echo ' <td><a href="patient_details.php?id='.$fetch['bed_id'].'" class="btn-card">ข้อมูลเพิ่มเติม</a></td>';
                                        }elseif($bed_stat == 'black'){	
                                            echo ' <td><a href="patient_details.php?id='.$fetch['bed_id'].'" class="btn-card">ข้อมูลเพิ่มเติม</a></td>';
                                        }
                                        if($bed_stat == 'orange'){	
                                            echo ' <td><a href="patient_details.php?id='.$fetch['bed_id'].'" class="btn-card">ข้อมูลเพิ่มเติม</a></td>';
                                        }
                                        	
                                        ?>
 
                                       
                                        
       
                                        
                                        
                               <?php
                                      	} //while
				?>          
                                
                                
                                
                                </tbody>
                           <!--     <tfoot>
                                    <tr>
                                        <th scope="col">ไอดีคำสั่งซื้อ</th>                                  
                                        <th scope="col">จำนวนเงินที่ต้องชำระ</th>
                                        <th scope="col">สถานะออเดอร์</th>
                                        <th scope="col">เวลาที่สั่ง</th>
                   
                                        <th scope="col">ติดตามออเดอร์</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            
                             
                        </div>
                        
                        
           
     
     
</main>







        <style type="text/css">
            body{
                background:#f9f9fb;    
            }
            .view-account{
                background:#FFFFFF; 
                margin-top:20px;
            }
            .view-account .pro-label {
                font-size: 13px;
                padding: 4px 5px;
                position: relative;
                top: -5px;
                margin-left: 10px;
                display: inline-block
            }

            .view-account .side-bar {
                padding-bottom: 30px
            }

            .view-account .side-bar .user-info {
                text-align: center;
                margin-bottom: 15px;
                padding: 30px;
                color: #616670;
                border-bottom: 1px solid #f3f3f3
            }

            .view-account .side-bar .user-info .img-profile {
                width: 120px;
                height: 120px;
                margin-bottom: 15px
            }

            .view-account .side-bar .user-info .meta li {
                margin-bottom: 10px
            }

            .view-account .side-bar .user-info .meta li span {
                display: inline-block;
                width: 100px;
                margin-right: 5px;
                text-align: right
            }

            .view-account .side-bar .user-info .meta li a {
                color: #616670
            }

            .view-account .side-bar .user-info .meta li.activity {
                color: #a2a6af
            }

            .view-account .side-bar .side-menu {
                text-align: center
            }

            .view-account .side-bar .side-menu .nav {
                display: inline-block;
                margin: 0 auto
            }

            .view-account .side-bar .side-menu .nav>li {
                font-size: 14px;
                margin-bottom: 0;
                border-bottom: none;
                display: inline-block;
                float: left;
                margin-right: 15px;
                margin-bottom: 15px
            }

            .view-account .side-bar .side-menu .nav>li:last-child {
                margin-right: 0
            }

            .view-account .side-bar .side-menu .nav>li>a {
                display: inline-block;
                color: #9499a3;
                padding: 5px;
                border-bottom: 2px solid transparent
            }

            .view-account .side-bar .side-menu .nav>li>a:hover {
                color: #616670;
                background: none
            }

            .view-account .side-bar .side-menu .nav>li.active a {
                color: #40babd;
                border-bottom: 2px solid #40babd;
                background: none;
                border-right: none
            }

            .theme-2 .view-account .side-bar .side-menu .nav>li.active a {
                color: #6dbd63;
                border-bottom-color: #6dbd63
            }

            .theme-3 .view-account .side-bar .side-menu .nav>li.active a {
                color: #497cb1;
                border-bottom-color: #497cb1
            }

            .theme-4 .view-account .side-bar .side-menu .nav>li.active a {
                color: #ec6952;
                border-bottom-color: #ec6952
            }

            .view-account .side-bar .side-menu .nav>li .icon {
                display: block;
                font-size: 24px;
                margin-bottom: 5px
            }

            .view-account .content-panel {
                padding: 30px
            }

            .view-account .content-panel .title {
                margin-bottom: 15px;
                margin-top: 0;
                font-size: 18px
            }

            .view-account .content-panel .fieldset-title {
                padding-bottom: 15px;
                border-bottom: 1px solid #eaeaf1;
                margin-bottom: 30px;
                color: #616670;
                font-size: 16px
            }

            .view-account .content-panel .avatar .figure img {
                float: right;
                width: 64px
            }

            .view-account .content-panel .content-header-wrapper {
                position: relative;
                margin-bottom: 30px
            }

            .view-account .content-panel .content-header-wrapper .actions {
                position: absolute;
                right: 0;
                top: 0
            }

            .view-account .content-panel .content-utilities {
                position: relative;
                margin-bottom: 30px
            }

            .view-account .content-panel .content-utilities .btn-group {
                margin-right: 5px;
                margin-bottom: 15px
            }

            .view-account .content-panel .content-utilities .fa {
                font-size: 16px;
                margin-right: 0
            }

            .view-account .content-panel .content-utilities .page-nav {
                position: absolute;
                right: 0;
                top: 0
            }

            .view-account .content-panel .content-utilities .page-nav .btn-group {
                margin-bottom: 0
            }

            .view-account .content-panel .content-utilities .page-nav .indicator {
                color: #a2a6af;
                margin-right: 5px;
                display: inline-block
            }

            .view-account .content-panel .mails-wrapper .mail-item {
                position: relative;
                padding: 10px;
                border-bottom: 1px solid #f3f3f3;
                color: #616670;
                overflow: hidden
            }

            .view-account .content-panel .mails-wrapper .mail-item>div {
                float: left
            }

            .view-account .content-panel .mails-wrapper .mail-item .icheck {
                background-color: #fff
            }

            .view-account .content-panel .mails-wrapper .mail-item:hover {
                background: #f9f9fb
            }

            .view-account .content-panel .mails-wrapper .mail-item:nth-child(even) {
                background: #fcfcfd
            }

            .view-account .content-panel .mails-wrapper .mail-item:nth-child(even):hover {
                background: #f9f9fb
            }

            .view-account .content-panel .mails-wrapper .mail-item a {
                color: #616670
            }

            .view-account .content-panel .mails-wrapper .mail-item a:hover {
                color: #494d55;
                text-decoration: none
            }

            .view-account .content-panel .mails-wrapper .mail-item .checkbox-container,
            .view-account .content-panel .mails-wrapper .mail-item .star-container {
                display: inline-block;
                margin-right: 5px
            }

            .view-account .content-panel .mails-wrapper .mail-item .star-container .fa {
                color: #a2a6af;
                font-size: 16px;
                vertical-align: middle
            }

            .view-account .content-panel .mails-wrapper .mail-item .star-container .fa.fa-star {
                color: #f2b542
            }

            .view-account .content-panel .mails-wrapper .mail-item .star-container .fa:hover {
                color: #868c97
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-to {
                display: inline-block;
                margin-right: 5px;
                min-width: 120px
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject {
                display: inline-block;
                margin-right: 5px
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label {
                margin-right: 5px
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label:last-child {
                margin-right: 10px
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a,
            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a:hover {
                color: #fff
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-1 {
                background: #f77b6b
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-2 {
                background: #58bbee
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-3 {
                background: #f8a13f
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-4 {
                background: #ea5395
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-5 {
                background: #8a40a7
            }

            .view-account .content-panel .mails-wrapper .mail-item .time-container {
                display: inline-block;
                position: absolute;
                right: 10px;
                top: 10px;
                color: #a2a6af;
                text-align: left
            }

            .view-account .content-panel .mails-wrapper .mail-item .time-container .attachment-container {
                display: inline-block;
                color: #a2a6af;
                margin-right: 5px
            }

            .view-account .content-panel .mails-wrapper .mail-item .time-container .time {
                display: inline-block;
                text-align: right
            }

            .view-account .content-panel .mails-wrapper .mail-item .time-container .time.today {
                font-weight: 700;
                color: #494d55
            }

            .drive-wrapper {
                padding: 15px;
                background: #f5f5f5;
                overflow: hidden
            }

            .drive-wrapper .drive-item {
                width: 130px;
                margin-right: 15px;
                display: inline-block;
                float: left
            }

            .drive-wrapper .drive-item:hover {
                box-shadow: 0 1px 5px rgba(0, 0, 0, .1);
                z-index: 1
            }

            .drive-wrapper .drive-item-inner {
                padding: 15px
            }

            .drive-wrapper .drive-item-title {
                margin-bottom: 15px;
                max-width: 100px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis
            }

            .drive-wrapper .drive-item-title a {
                color: #494d55
            }

            .drive-wrapper .drive-item-title a:hover {
                color: #40babd
            }

            .theme-2 .drive-wrapper .drive-item-title a:hover {
                color: #6dbd63
            }

            .theme-3 .drive-wrapper .drive-item-title a:hover {
                color: #497cb1
            }

            .theme-4 .drive-wrapper .drive-item-title a:hover {
                color: #ec6952
            }

            .drive-wrapper .drive-item-thumb {
                width: 100px;
                height: 80px;
                margin: 0 auto;
                color: #616670
            }

            .drive-wrapper .drive-item-thumb a {
                -webkit-opacity: .8;
                -moz-opacity: .8;
                opacity: .8
            }

            .drive-wrapper .drive-item-thumb a:hover {
                -webkit-opacity: 1;
                -moz-opacity: 1;
                opacity: 1
            }

            .drive-wrapper .drive-item-thumb .fa {
                display: inline-block;
                font-size: 36px;
                margin: 0 auto;
                margin-top: 20px
            }

            .drive-wrapper .drive-item-footer .utilities {
                margin-bottom: 0
            }

            .drive-wrapper .drive-item-footer .utilities li:last-child {
                padding-right: 0
            }

            .drive-list-view .name {
                width: 60%
            }

            .drive-list-view .name.truncate {
                max-width: 100px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis
            }

            .drive-list-view .type {
                width: 15px
            }

            .drive-list-view .date,
            .drive-list-view .size {
                max-width: 60px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis
            }

            .drive-list-view a {
                color: #494d55
            }

            .drive-list-view a:hover {
                color: #40babd
            }

            .theme-2 .drive-list-view a:hover {
                color: #6dbd63
            }

            .theme-3 .drive-list-view a:hover {
                color: #497cb1
            }

            .theme-4 .drive-list-view a:hover {
                color: #ec6952
            }

            .drive-list-view td.date,
            .drive-list-view td.size {
                color: #a2a6af
            }

            @media (max-width:767px) {
                .view-account .content-panel .title {
                    text-align: center
                }
                .view-account .side-bar .user-info {
                    padding: 0
                }
                .view-account .side-bar .user-info .img-profile {
                    width: 60px;
                    height: 60px
                }
                .view-account .side-bar .user-info .meta li {
                    margin-bottom: 5px
                }
                .view-account .content-panel .content-header-wrapper .actions {
                    position: static;
                    margin-bottom: 30px
                }
                .view-account .content-panel {
                    padding: 0
                }
                .view-account .content-panel .content-utilities .page-nav {
                    position: static;
                    margin-bottom: 15px
                }
                .drive-wrapper .drive-item {
                    width: 100px;
                    margin-right: 5px;
                    float: none
                }
                .drive-wrapper .drive-item-thumb {
                    width: auto;
                    height: 54px
                }
                .drive-wrapper .drive-item-thumb .fa {
                    font-size: 24px;
                    padding-top: 0
                }
                .view-account .content-panel .avatar .figure img {
                    float: none;
                    margin-bottom: 15px
                }
                .view-account .file-uploader {
                    margin-bottom: 15px
                }
                .view-account .mail-subject {
                    max-width: 100px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis
                }
                .view-account .content-panel .mails-wrapper .mail-item .time-container {
                    position: static
                }
                .view-account .content-panel .mails-wrapper .mail-item .time-container .time {
                    width: auto;
                    text-align: left
                }
            }

            @media (min-width:768px) {
                .view-account .side-bar .user-info {
                    padding: 0;
                    padding-bottom: 15px
                }
                .view-account .mail-subject .subject {
                    max-width: 200px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis
                }
            }

            @media (min-width:992px) {
                .view-account .content-panel {
                    min-height: 800px;
                    border-left: 1px solid #f3f3f7;
                    margin-left: 200px
                }
                .view-account .mail-subject .subject {
                    max-width: 280px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis
                }
                .view-account .side-bar {
                    position: absolute;
                    width: 200px;
                    min-height: 600px
                }
                .view-account .side-bar .user-info {
                    margin-bottom: 0;
                    border-bottom: none;
                    padding: 30px
                }
                .view-account .side-bar .user-info .img-profile {
                    width: 120px;
                    height: 120px
                }
                .view-account .side-bar .side-menu {
                    text-align: left
                }
                .view-account .side-bar .side-menu .nav {
                    display: block
                }
                .view-account .side-bar .side-menu .nav>li {
                    display: block;
                    float: none;
                    font-size: 14px;
                    border-bottom: 1px solid #f3f3f7;
                    margin-right: 0;
                    margin-bottom: 0
                }
                .view-account .side-bar .side-menu .nav>li>a {
                    display: block;
                    color: #9499a3;
                    padding: 10px 15px;
                    padding-left: 30px
                }
                .view-account .side-bar .side-menu .nav>li>a:hover {
                    background: #f9f9fb
                }
                .view-account .side-bar .side-menu .nav>li.active a {
                    background: #f9f9fb;
                    border-right: 4px solid #40babd;
                    border-bottom: none
                }
                .theme-2 .view-account .side-bar .side-menu .nav>li.active a {
                    border-right-color: #6dbd63
                }
                .theme-3 .view-account .side-bar .side-menu .nav>li.active a {
                    border-right-color: #497cb1
                }
                .theme-4 .view-account .side-bar .side-menu .nav>li.active a {
                    border-right-color: #ec6952
                }
                .view-account .side-bar .side-menu .nav>li .icon {
                    font-size: 24px;
                    vertical-align: middle;
                    text-align: center;
                    width: 40px;
                    display: inline-block
                }
            }
        </style>

        <script type="text/javascript">

        </script>
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
			url: "Project/function/remove.php",
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


<style>
    /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
    
</style>
    </body>
</html>