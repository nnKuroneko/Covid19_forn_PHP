
<!doctype html>
<?php
        include("function/alert.php");
        include("db/connect.php");
        include("function/session.php");
?>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="GridTemplate">
    <!--====== Title ======-->
    <title>Covid-19 - Free Corona virus Medical Prevention Template</title>
    
    <meta name="description" content="">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/normal/favicon.png" type="image/png">
        
    <!--====== animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">

    <!--====== icofont.min CSS ======-->
    <link rel="stylesheet" href="assets/fonts/icofont.min.css">
 
    <!--====== Slick slider CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>

    <?php
        include("header_home.php");
?>

    

  
        <section id="corona" class="about_corona pt-100">
            
    <div class="container">
        <div class="row">
            <center>
            <h1>หาเตียงโควิด</h1>
            <h2><b>รอหาเตียงอย่างปลอดภัยกับไทยแคร์</b></h2>
            <br>
            <br>
            </center>
           
           
             <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <br>
                    <h2 class="title"><center><i class="text-success"> กรอกแบบฟอร์มขอความช่วยเหลือ</i></center></h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">ชื่อ</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="patient_de_name" placeholder="ชื่อผู้ป่วย..." required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">นามสกุล</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="patient_de_lastname" placeholder="นามสกุลผู้ป่วย..." required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">อายุ</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="patient_de_age" placeholder="อายุผู้ป่วย...." required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">โรคประจำตัว</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="patient_de_con" placeholder="โรคประจำตัวผู้ป่วย" required>
                                </div>
                            </div>
                        </div>
            
                        
                        <div class="form-row">
                            <div class="name">รายละเอียด</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="patient_de_details" placeholder="ช่วยบอกอาการเกี่ยวกับผู้ป่วย...." required></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">ที่อยู่</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="patient_de_address" placeholder="ที่อยู่อาศัยผู้ป่วย...." required></textarea>
                                </div>
                            </div>
                        </div>
                        
                         <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit" name="send" >ยืนยัน</button>
                </div>
                      
                    </form>
                    
                      <?php
			if (isset($_POST['send']))
				{
                            //$mysqli = new mysqli("localhost", "root", "", "covid_db");
                            
                                        $pid = $_SESSION['id'];
					$name = $_POST['patient_de_name'];
					$lastname = $_POST['patient_de_lastname'];
					$age = $_POST['patient_de_age'];
					$con = $_POST['patient_de_con'];
                                        $details = $_POST['patient_de_details'];
                                        $address = $_POST['patient_de_address'];
                                        $date = date("Y-m-d");

				sqlsrv_query($conn, "INSERT INTO [dbo].[patient_details] ( patient_id,patient_de_name, patient_de_lastname, patient_de_age, patient_de_con, patient_de_details,  patient_de_address , patient_de_status , patient_de_date )
				VALUES ('$pid','$name','$lastname','$age','$con', '$details','$address' , 'Process' , '$date' )");
                         
                                $t_sql = "UPDATE patient_details SET patient_de_date='$date' WHERE patient_id= '$pid'";

                                // $t_sql = "UPDATE patient_details SET patient_de_date=date WHERE patient_id = '$pid'";
                                // $t_result = sqlsrv_query($conn,$t_sql); 
				
				//exit(header( "refresh: 1; url=/NewProject_3/admin/listitem.php" ));
				
                                  echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "คุณได้ขอความช่วยเหลือเรียบร้อยแล้ว โปรดรอการช่วยเหลือ",
            type: "success"
        }, function() {
            window.location = "/Project/help_form_home.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
                                
			
                        
		}else

				?>
                    
                </div>
               
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>
                    
                    
                  
                  
                  
                  
                  
                  
                  
                  
                  
                </div>
            </div>
        </div>
    </div>
</section>



   

    <a href="#" class="back-to-top"><i class="icofont-rounded-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->
    
  <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    
    <!--====== count-up.min js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!--====== wow.min js ======-->
    <script src="assets/js/wow.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    
    
    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
			url: "/Project/function/remove.php",
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

/* card details start  */

section{
    padding: 100px 0;
}
.details-card {
	background: #ecf0f1;
}

.card-content {
	background: #ffffff;
	border: 4px;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
}

.card-img {
	position: relative;
	overflow: hidden;
	border-radius: 0;
	z-index: 1;
}

.card-img img {
	width: 100%;
	height: auto;
	display: block;
}

.card-img span {
	position: absolute;
    top: 15%;
    left: 12%;
    background: #1ABC9C;
    padding: 6px;
    color: #fff;
    font-size: 12px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    transform: translate(-50%,-50%);
}
.card-img span h4{
        font-size: 12px;
        margin:0;
        padding:10px 5px;
         line-height: 0;
}
.card-desc {
	padding: 1.25rem;
}

.card-desc h3 {
	color: #000000;
    font-weight: 600;
    font-size: 1.5em;
    line-height: 1.3em;
    margin-top: 0;
    margin-bottom: 5px;
    padding: 0;
}

.card-desc p {
	color: #747373;
    font-size: 14px;
	font-weight: 400;
	font-size: 1em;
	line-height: 1.5;
	margin: 0px;
	margin-bottom: 20px;
	padding: 0;
	font-family: 'Raleway', sans-serif;
}
.btn-card{
	background-color: #1ABC9C;
	color: #fff;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: 0;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff;
}
.btn-card:hover {
    background: orange;
}
a.btn-card {
    text-decoration: none;
    color: #fff;
}
/* End card section */
        
    </style>
</body>

</html>


