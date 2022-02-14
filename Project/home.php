
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
    
    
    
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
    
       <?php
				$id = (int) $_SESSION['id'];
			
					$query = sqlsrv_query ($conn, "SELECT * FROM patient WHERE patient_id = '$id' ") or die (sqlsrv_error($conn));
					$fetch = sqlsrv_fetch_array ($query);
    ?>

<?php
        include("header_home.php");
?>

    <section class="services_area">
        <div class="container">
            <div class="services_row">
                
                <center>
            <h1>ข้อมูลและสถิติ</h1>
            <h2><b>ตัวเลขของสถานะต่างๆ</b></h2>
            <br>
            <br>
            </center>
          
                 <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-30">
                    <div class="single_service wow fadeInUp text-center "  data-wow-delay=".2s">
            

                        <div class="d-flex flex-row bd-highlight ">
                              <div class="p-2 bd-highlight">
                                <span class="icon">
                                    <img src="assets/images/icons/Virus0.png" class="img-fluid">
                                </span>

                              </div>
                              <div class="p-2 bd-highlight">
                                <div class="icon_info">
                                    <h5 class="title"><span class="counter">
                                        <?php

        $sql=sqlsrv_query($conn,"SELECT * FROM [dbo].[bed] WHERE bed_status='orange' " , array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));                               
    
        echo sqlsrv_num_rows($sql) ;
    
        ?>
  
                                        </span></h5>
                                 <p>กำลังรักษาอยู่</p>
                                </div>

                              </div>
            
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mt-30">
                    <div class="single_service wow fadeInUp text-center " data-wow-delay=".4s">
                        <div class="d-flex flex-row bd-highlight ">
                              <div class="p-2 bd-highlight">
                                <span class="icon">
                                    <img src="assets/images/icons/Virus01.png" class="img-fluid">
                                </span>

                              </div>
                              <div class="p-2 bd-highlight">
                                <div class="icon_info">
                                    <h5 class="title"><span class="counter">
                                        
                                                     <?php

        $sql=sqlsrv_query($conn,"SELECT * FROM [dbo].[bed] WHERE bed_status='green' " , array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));                               
    
        echo sqlsrv_num_rows($sql) ;
    
        ?>
                                            
                                        </span></h5>
                                 <p>รักษาหายแล้ว</p>
                                </div>

                              </div>
            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mt-30">
                    <div class="single_service wow fadeInUp text-center " data-wow-delay=".8s">
                        <div class="d-flex flex-row bd-highlight ">
                              <div class="p-2 bd-highlight">
                                <span class="icon">
                                    <img src="assets/images/icons/Virus03.png" class="img-fluid">
                                </span>

                              </div>
                              <div class="p-2 bd-highlight">
                                <div class="icon_info">
                                    <h5 class="title"><span class="counter">
                                        
                                    <?php

        $sql=sqlsrv_query($conn,"SELECT * FROM [dbo].[bed] WHERE bed_status='black' " , array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));                               
    
        echo sqlsrv_num_rows($sql) ;
    
        ?>
                                            
                                        </span></h5>
                                 <p>เสียชีวิต</p>
                                </div>

                              </div>
            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mt-30">
                    <div class="single_service wow fadeInUp text-center" data-wow-delay=".8s">
                        <div class="d-flex flex-row bd-highlight ">
                              <div class="p-2 bd-highlight">
                                <span class="icon">
                                    <img src="assets/images/icons/Virus04.png" class="img-fluid">
                                </span>

                              </div>
                              <div class="p-2 bd-highlight">
                                <div class="icon_info">
                                    <h5 class="title"><span class="counter">
                                        
                                                    <?php

        $sql=sqlsrv_query($conn,"SELECT * FROM [dbo].[bed] WHERE bed_status='red' ", array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));                               
    
        echo sqlsrv_num_rows($sql) ;
    
        ?>
                                            
                                        </span></h5>
                                 <p>อาการรุนแรง</p>
                                </div>

                              </div>
            
                        </div>
                    </div>
                </div>

            </div> <!-- row -->
      
              </div>
            
            <div>
                
            </div>    

        </div> <!-- container -->
        <center>
            <button type="button" class="btn btn-danger"><img src="images/emergency2.png" alt="" width="50" hight="50"><a href="help_form_home.php"><i class="text-white"> ขอความช่วยเหลือ</i></a></button>
            <!--<button type="button" class="btn btn-success"><img src="images/support.png" alt="" width="33" hight="33"> เส�?อ�?วาม�?�?วยเหลือ</button>
-->
        </center>
       
        
    </section>

  
        <section id="corona" class="about_corona pt-100">
            
    <div class="container">
        <div class="row">
             
     
            <center>
                <h1><b>หาเตียงโควิต</b></h1>
            <h2><b>รอหาเตียง<i class="text-success">ปลอดภัย</i>พวกเราจะช่วยคุณ</b></h2>
            <br>
            <br>
            </center>
             <?php
  

         $sql=sqlsrv_query($conn,"SELECT * FROM [dbo].[bed]",  array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET )); 
         
        

         echo '<h3><br><br>จำนวน <i class="text-success">' . sqlsrv_num_rows($sql) . '</i> รายการ<br>
            <br></h3>
            ';

      
 
        
        ?>
           
                  
            
       
                    
                    <!-- =============================================== -->
                  
                  
                     <?php
                                    $query = sqlsrv_query($conn, "SELECT TOP 15*FROM bed ORDER BY bed_id DESC") or die(sqlsrv_error());

                                    while ($fetch = sqlsrv_fetch_array($query)) {

                                        $bedid = $fetch['bed_id'];
                                        $bedpid = $fetch['patient_id'];
                                      
                                        $query2 = sqlsrv_query($conn, "SELECT * FROM patient_details WHERE patient_id='$bedpid'   ") or die(sqlsrv_error());
                                        $fetch2 = sqlsrv_fetch_array($query2);
                                        
                                        $age = $fetch2['patient_de_age'];
                                        $addess = $fetch2['patient_de_address'];
                                        $con = $fetch2['patient_de_con'];
                                        $details = $fetch2['patient_de_details'];
                                        //$pdedate = $fetch2['patient_de_date'];
                                        $Date = $fetch2['patient_de_date']->format('d/m/Y');
                                        
                                        $query1 = sqlsrv_query($conn, "SELECT * FROM bed WHERE bed_id = '$bedid'") or die(sqlsrv_error());
                                        $rows = sqlsrv_fetch_array($query1);
                                        
                                        

                                        $b_stat = $rows['bed_status'];
                                        if ($b_stat == 'green') {
                                            
                                             echo '
              <div class="col-md-4">        
                <div class="card-content">
                 <div class="alert alert-success">
                    <strong>ID : </strong> '.$fetch['bed_id'].'
                    </div>
                  <!--  <div class="card-img">
                        <img src="https://placeimg.com/380/230/nature" alt="">
                        <span><h4>heading</h4></span>
                    </div> -->
                    
                   <div class="card-desc">

                        <p>อายุ :  '.$fetch2['patient_de_age'].'</p>
                        <p>ที่อยู่ : '.$fetch2['patient_de_address'].'</p>
                        <p>โรคประจำตัว : '.$fetch2['patient_de_con'].'</p>
                        <p>รายละเอียด : '.$fetch2['patient_de_details'].'</p>
                        <p>วัน/เดือน/ปี : '.$Date.'</p>
                        <a href="patient_details.php?id='.$fetch['bed_id'].'" class="btn-card">ดูข้อมูลผู้ป่วย</a>   
                    </div>
                    
</div>
<br>
<br>
</div>
<br>
<br>
                           ';
                                            
                                        } 
                                        elseif ($b_stat == 'red') {
                                            
                                            echo '
              <div class="col-md-4">        
                <div class="card-content">
                 <div class="alert alert-danger">
                    <strong>ID : </strong> '.$fetch['bed_id'].'
                    </div>
                  <!--  <div class="card-img">
                        <img src="https://placeimg.com/380/230/nature" alt="">
                        <span><h4>heading</h4></span>
                    </div> -->
                    
                   <div class="card-desc">

                        <p>อายุ :  '.$fetch2['patient_de_age'].'</p>
                        <p>ที่อยู่ : '.$fetch2['patient_de_address'].'</p>
                        <p>โรคประจำตัว : '.$fetch2['patient_de_con'].'</p>
                        <p>รายละเอียด : '.$fetch2['patient_de_details'].'</p>
                        <p>วัน/เดือน/ปี : '.$Date.'</p>
                        <a href="patient_details.php?id='.$fetch['bed_id'].'" class="btn-card">ดูข้อมูลผู้ป่วย</a>   
                    </div>
                    

                    
</div>
<br>
<br>
</div>
<br>
<br>
                           ';
                                            
                                            
                                        } 
                                        elseif ($b_stat == 'orange') {
                                            
                                           echo '
              <div class="col-md-4">        
                <div class="card-content">
                 <div class="alert alert-warning">
                    <strong>ID : </strong> '.$fetch['bed_id'].'
                    </div>
                  <!--  <div class="card-img">
                        <img src="https://placeimg.com/380/230/nature" alt="">
                        <span><h4>heading</h4></span>
                    </div> -->
                    
                    <div class="card-desc">

                        <p>อายุ :  '.$fetch2['patient_de_age'].'</p>
                        <p>ที่อยู่ : '.$fetch2['patient_de_address'].'</p>
                        <p>โรคประจำตัว : '.$fetch2['patient_de_con'].'</p>
                        <p>รายละเอียด : '.$fetch2['patient_de_details'].'</p>
                        <p>วัน/เดือน/ปี : '.$Date.'</p>
                        <a href="patient_details.php?id='.$fetch['bed_id'].'" class="btn-card">ดูข้อมูลผู้ป่วย</a>   
                    </div>
                    
</div>
<br>
<br>
</div>
<br>
<br>
                           ';
                                            
                                        } elseif ($b_stat == 'black') {
                                            
                                           echo '
              <div class="col-md-4">        
                <div class="card-content">
                 <div class="alert alert-dark">
                    <strong>ID : </strong> '.$fetch['bed_id'].'
                    </div>
                  <!--  <div class="card-img">
                        <img src="https://placeimg.com/380/230/nature" alt="">
                        <span><h4>heading</h4></span>
                    </div> -->
                    
                    <div class="card-desc">

                        <p>อายุ :  '.$fetch2['patient_de_age'].'</p>
                        <p>ที่อยู่ : '.$fetch2['patient_de_address'].'</p>
                        <p>โรคประจำตัว : '.$fetch2['patient_de_con'].'</p>
                        <p>รายละเอียด : '.$fetch2['patient_de_details'].'</p>
                        <p>วัน/เดือน/ปี : '.$Date.'</p>
                        <a href="patient_details.php?id='.$fetch['bed_id'].'" class="btn-card">ดูข้อมูลผู้ป่วย</a>    
                    </div>
                    
</div>
<br>
<br>
</div>
<br>
<br>
                           ';
                                            
                                        }  
                                        else {
                                      
                                        }
                                    }
                                    ?>
                    
                    
                    
                    
                  
                  
                  
                  
                  
                  
                  
                  
                  
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
