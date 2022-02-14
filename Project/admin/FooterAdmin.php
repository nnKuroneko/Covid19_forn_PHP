<?php

//$mysqli = new mysqli("localhost", "root", "", "covid_db");
?>
<html lang="en">

     <?php
		//		$id = (int) $_SESSION['id'];
		//	
		//			$query = mysqli_query ($mysqli, "SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
		//			$fetch = mysqli_fetch_array ($query);
					
     ?>
    
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Baby Store - Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

 
    <div id="main-wrapper">
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>

        <div class="header">    
            <div class="header-content clearfix">
   
                
                <div class="header-right">
                    <ul class="clearfix">
                        
                    
                 
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                      <!--  <li>
                                            <a href="Project/myaccount.php"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li> -->
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="/Project/home.php"><i class="icon-lock"></i> <span>หน้าร้าน</span></a>
                                        </li>
                                        <li><a href="/Project/admin/admin_code/logout.php"><i class="icon-key"></i> <span>ออกจากระบบ</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
 
     <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">เมนูการจัดการ</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">หน้าแรก</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./index.php">หน้าแอดมิน</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                   <ul aria-expanded="false">
                        
                        
                          
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">ผู้ป่วยในระบบ</a>
                                <ul aria-expanded="false">
                                    <li><a href="./patient_list.php">ข้อมูลผู้ป่วยในระบบ</a></li>
                                     <li><a href="./addtype.php"></a></li>   
                                 
                                </ul>
                            </li>
   
                        </ul>
                    <!--
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                             <i class="icon-graph menu-icon"></i><span class="nav-text">เช็คออเดอร์ลูกค้า</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./transaction.php">รายการสั่งซื้อ</a></li>
                            <li><a href="./settingtran.php">จัดการ</a></li>
                            
                         <!--   <li><a href="./layout-compact-nav.html">55555</a></li>
                            <li><a href="./layout-vertical.html">Vertical</a></li>
                            <li><a href="./layout-horizontal.html">Horizontal</a></li>
                            <li><a href="./layout-boxed.html">Boxed</a></li>
                            <li><a href="./layout-wide.html">Wide</a></li>
                            
                            
                            <li><a href="./layout-fixed-header.html">Fixed Header</a></li>
                            <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li> 
                        </ul>
                    </li>
                    -->
                    <li class="nav-label">การจัดการ</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">เกี่ยวกับผู้ป่วย</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./patient_setting.php">รับเรื่องผู้ป่วยขอความช่วยเหลือ</a></li>
                             <li><a href="./patient_bedandstatus.php">ดูข้อมูลเตียงและปรับสถานะ</a></li>
                        </ul>
                    </li>
                    <!--
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">ยูสเซอร์และสมาชิก</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./userlist.php">ยูสเซอร์ทั้งหมด</a></li>   
                           
                        </ul>
                    </li>
                   
                   
                    <li class="nav-label">DATA</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">ข้อมูลและสถิติ</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./piebrand.php">แบรนด์สินค้าในปี 2021 (Chart)</a></li>   
                           <li><a href="./piebank.php">การเลือกใช้ช่องทางการโอนของลูกค้าในปี 2021 (Chart)</a></li>  
                           <li><a href="./pieproduct.php">สินค้าแต่ละหมวดหมู่ในปี 2021 (Chart)</a></li>  

                        </ul>
                    </li>
                    -->
                </ul>
            </div>
        </div>
   