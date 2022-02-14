
<?php
        include("../function/alert.php");
        include("../db/connect.php");
?>

<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - BabyStore</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">
    
</head>




<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href=""> <h4>BabyStore - Admin</h4></a>
        
                                <form class="mt-5 mb-5 login-input" method="post">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    
                                    <input type="submit" name="adminlogin" value="เข้าสู่ระบบ" class="btn login-form__btn submit w-100" style="width:200px;">
                                </form>
                                   
                               <?php

  //  $mysqli = new mysqli("localhost", "root", "", "covid_db");
    
if (isset($_POST['adminlogin'])){
   
   $username=$_POST['username'];
   $password=$_POST['password'];

		
			    $queryAdmin = "SELECT * FROM [dbo].[admin] WHERE username='{$username}' AND password='{$password}'";
$resultAdmin = sqlsrv_query($conn, $queryAdmin);
$resultAdmin1 = sqlsrv_fetch_array($resultAdmin, SQLSRV_FETCH_ASSOC); 
                         
                         //$row=sqlsrv_fetch_array  ($conn,$conCheck);
			 //$run_num_rows = sqlsrv_num_rows($conn,$conCheck);
                         
                          if(sqlsrv_has_rows($resultAdmin) > 0)
							
					
						{
							session_start();
                                                        session_regenerate_id();
                                                       
							$_SESSION['id'] = $resultAdmin1['admin_id'];
                                                        $_SESSION['role'] = $resultAdmin1['role'];
                                                        
                                                        echo "<script>alert('เข้าสู่ระบบเรียบร้อยแล้ว')</script>";	
							header( "refresh: 2; url=/Project/admin/index.php" );
                                                        
                                                       
						}
						
						else
						{                                                                                            
                                                    echo "<script>alert('ไม่พบบัญชีนี้ในระบบ')</script>";	 
                                                        header( "refresh: 2; url=/Project/admin/admin_login.php" );
                                                        exit(0);
						}
        
          
    
}
?> 
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





