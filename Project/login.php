
<!DOCTYPE html>


<?php
        include("function/alert.php");
        include("db/connect.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
  

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        
                        <figure><img src="images/logologin.png" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">สมั�?รสมา�?ิ�?</a>
                        
                         <a href="index.php" class="signup-image-link">�?ลั�?ห�?�?า�?ร�?</a>
                  
                       
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">เ�?�?าสู�?ระ�?�?</h2>  
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="id_card"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="patient_idcard" id="your_name" placeholder="รหัส�?ัตร�?ระ�?า�?�?"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="�?าสเวิร�?�?"/>
                            </div>
                         <!--   <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="ยื�?ยั�?"/>                                                    
                            </div>
                        </form>
                        
                            <?php
                       
              if (isset($_POST['signin'])) {
                            


		$id_card=$_POST['patient_idcard'];
		$password=$_POST['password'];
                
                $password1=md5($password);

                       
                         $queryAdmin = "SELECT * FROM [dbo].[patient] WHERE patient_idcard='{$id_card}' AND password='{$password1}'";
$resultAdmin = sqlsrv_query($conn, $queryAdmin);
$resultAdmin1 = sqlsrv_fetch_array($resultAdmin, SQLSRV_FETCH_ASSOC); 
                         
                         //$row=sqlsrv_fetch_array  ($conn,$conCheck);
			 //$run_num_rows = sqlsrv_num_rows($conn,$conCheck);
                         
                          if(sqlsrv_has_rows($resultAdmin) > 0)
							
					
						{
							session_start();
                                                        session_regenerate_id();
                                                       
							$_SESSION['id'] = $resultAdmin1['patient_id'];
                                                        $_SESSION['role'] = $resultAdmin1['role'];
                                                     
							//header( "refresh: 2; url=/NewProject_3/home.php" );
                                                        
                                              
                                                         echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร�?�?สิ�?�?",
            text: "เ�?�?าสู�?ระ�?�?เรีย�?ร�?อย�?ล�?ว",
            type: "success"
        }, function() {
            window.location = "/Project/home.php"; //ห�?�?าที�?ต�?อ�?�?าร�?ห�?�?ระ�?ดด�?�?
        });
    }, 1000);
</script>';
                                                         
                                                //        $t_sql = "UPDATE useracc SET date=CURRENT_TIMESTAMP WHERE username = '$username'";
                                                  //      $t_result = mysqli_query($mysqli,$t_sql); 
						}
						
						else
						{
							 echo '      <script>
       setTimeout(function() {
        swal({
            title: "�?ิด�?ลาด",
            text: "ยูสเ�?อร�?หรือรหัส�?ิด�?ลาด �?�?รดลอ�?�?หม�?อี�?�?รั�?�?",
            type: "error"
        }, function() {
            window.location = "/Project/login.php"; //ห�?�?าที�?ต�?อ�?�?าร�?ห�?�?ระ�?ดด�?�?
        });
    }, 1000);
</script>';
						}
	

                                                }

?>
                     
                        
                        
                     <!--   <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                        
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>