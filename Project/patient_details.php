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


        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = sqlsrv_query($conn, "SELECT * FROM bed WHERE bed_id = '$id' ");
            $fetch = sqlsrv_fetch_array($query);
            
            $bedid = $fetch['bed_id'];
            $bedpid = $fetch['patient_id'];
            $bedstatus = $fetch['bed_status'];
            $bed_patient_name = $fetch['bed_patient_name'];
            $aid = $fetch['admin_id'];
            $Date = $fetch['bed_date']->format('d/m/Y');
            $bed_hospital = $fetch['bed_hospital'];

            $query2 = sqlsrv_query($conn, "SELECT * FROM patient_details WHERE patient_id='$bedpid'   ") or die(sqlsrv_error());
            $fetch2 = sqlsrv_fetch_array($query2);

            $age = $fetch2['patient_de_age'];
            $address = $fetch2['patient_de_address'];
            $con = $fetch2['patient_de_con'];
            $details = $fetch2['patient_de_details'];
            //$pdedate = $fetch2['patient_de_date'];
            $Date2 = $fetch2['patient_de_date']->format('d/m/Y');
           
            ?>


        <center>
            <h1>ข้อมูลสมาชิก</h1>
            <h2><b>หาเตียงกด <a href="help_form_home.php"><b><i class="text-success">ขอความช่วยเหลือ</i></b></a></b></h2>
        </center>

        <section id="corona" class="about_corona pt-100">

            <div class="container">
                <div class="row">

                 
                    
                  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://www.pngrepo.com/download/284208/patient.png" alt=""/>
                           <!-- <div class="file btn btn-lg btn-primary">
                                 Change Photo 
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       ข้อมูลผู้ป่วยไอดีที่ <?php echo $bedid ?>
                                    </h5>
                                    <h6>
                                       
                                    </h6>
                                    <p class="proile-rating">สถานะผู้ป่วย : <span>
                                            
                                            
                                            <?php 
                                              if ($bedstatus == 'orange') {
                                                  echo 'กำลังรักษา';
                                              }elseif ($bedstatus == 'green') {
                                                  echo 'รักษาหายแล้ว';
                                              }elseif ($bedstatus == 'red') {
                                                  echo 'อาการรุนแรง';
                                              }elseif ($bedstatus == 'black') {
                                                  echo 'เสียชีวิต';
                                              }
                                            ?>
                                        
                                        
                                        
                                        
                                        </span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ข้อมูลส่วนตัวผู้ป่วย</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">รายละเอียด</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   <!-- <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                          <!--  <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/> -->
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ไอดีผู้ป่วย</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $bedpid ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ชื่อผู้ป่วย</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $bed_patient_name ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ไอดีผู้ดูแล</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $aid ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>วัน/เดือน/ปี ที่ได้เตียง</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $Date ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>โรงพยาบาลที่ดูแลอยู่</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $bed_hospital ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>อายุ</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $age ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ที่อยู่</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $address ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>อาการ</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $con ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>รายละเอียดที่พอบอกเราได้</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $details ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>วัน/เดือน/ปี ที่ขอความช่วยเหลือ</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $Date2 ?></p>
                                            </div>
                                        </div>
                                <div class="row">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
               
                    
                    
                    
                    
                    
                    

                <?php } ?> 

                <!--====== โปรไฟล์ ======-->


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
        $(document).ready(function () {

            $('.remove').click(function () {

                var id = $(this).attr("id");


                if (confirm("Are you sure you want to delete this product?")) {


                    $.ajax({
                        type: "POST",
                        url: "/Project/function/remove.php",
                        data: ({id: id}),
                        cache: false,
                        success: function (html) {
                            $(".del" + id).fadeOut(2000, function () {
                                $(this).remove();
                            });
                        }
                    });
                } else {
                    return false;
                }
            });
        });

    </script>

    <style>
        body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
        </style>
    
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


    <style>
        body {
            background: white
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }

    </style>

</body>
</html>