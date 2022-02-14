
<!DOCTYPE html>

<?php
        include("function/alert.php");
        include("db/connect.php");
?>
<html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>FormDen Example</title>

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

        <!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
        <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

        <!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
        <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

        <!--Font Awesome (added because you use icons in your prepend/append)-->
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

        <!-- Inline CSS based on choices in "Settings" tab -->
        <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

        <div class="main">
            <section class="signup">
                <div class="container">
                 

                    
                    <!-- Sign up form -->
                    <div class="bootstrap-iso">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <form class="form-horizontal" method="post">
                                        
                                           <div class="signup-content">
                    <div class="signup-form">
                            <h2 class="form-title">สมั�?รสมา�?ิ�?</h2>
                        
                                        <div class="form-group">
                                            &emsp;&emsp;&emsp; <label for="id_card"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="patient_idcard" id="id_card" placeholder="รหัส�?ัตร�?ระ�?า�?�?" maxlength="13" required/>
                                        </div>

                                        <div class="form-group">
                                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="password" name="password" id="password" placeholder="�?าสเวิร�?�?" maxlength="50" required/>

                                        </div>
                            
                                         <div class="form-group">
                                            <label for="patient_name"><i class=""></i></label>
                                            <input type="text" name="patient_name" id="age" placeholder="�?ื�?อ�?ริ�?..." required/>
                                        </div>
                            
                                         <div class="form-group">
                                            <label for="patient_lastname"><i class=""></i></label>
                                            <input type="text" name="patient_lastname" id="age" placeholder="�?ามส�?ุล...." required/>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone"><i class="zmdi zmdi-email"></i></label>
                                            <input type="text" name="patient_phone" id="phone" placeholder="เ�?อร�?�?ทรศั�?ท�?" maxlength="10" required/>
                                        </div>
            
                              <br>
                               <div class="form-group">
                                  
       <div class="col-sm-11">
       <div class="input-group">
          
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        <label for="date"></label>
        <input class="form-control" id="date" name="patient_birthday" placeholder="" type="text"/>
       </div>
      </div>
                                   </div>
                   <br>           
                                         <div class="form-group">
                                            <label for="age"><i class=""></i></label>
                                            <input type="text" name="patient_age" id="age" placeholder="อายุ" maxlength="3" required/>
                                        </div>
                            
                                         <div class="form-group">
                                            <label for="sex"><i class="fas fa-venus-mars"></i></label>
                                 
                                            <input type="text" name="patient_sex" id="sex" placeholder="เ�?ศ" maxlength="50" required/>
                                        </div>
                            
                                         <div class="form-group">
                                            <label for="address"><i class=""></i></label>
                                            <input type="text" name="patient_address" id="address" placeholder="ที�?อยู�?" maxlength="500" required/>
                                        </div>

                          

                                       <!-- <div class="form-group">
                                            <input type="checkbox" name="agree" id="agree-term" class="agree-term" required/>
                                            <label for="agree-term" class="label-agree-term"><span><span></span></span>ยื�?ยั�?�?ารสมั�?ร</label>
                                        </div> -->
                            
                                        <div class="form-group form-button">
                                            <input type="submit" name="signup" id="signup" class="form-submit" value="ยื�?ยั�?"/>
                                        </div>

                                  </div>
                                               
                                                </div>
                                    </form>
                                    
                                    <?php

if (isset($_POST['signup'])) {
   
$conn = sqlsrv_connect( $serverName, $connectionInfo);

        $idcard=$_POST['patient_idcard'];
        $password=$_POST['password'];
        $name=$_POST['patient_name'];
        $lastname=$_POST['patient_lastname'];
	$phone=$_POST['patient_phone'];
        $birthday=$_POST['patient_birthday'];
        $age=$_POST['patient_age'];
        $sex=$_POST['patient_sex'];
        $address=$_POST['patient_address'];
        
        $password1= md5($password);
        
        
         $conCheck = "SELECT * FROM [dbo].[patient] WHERE patient_idcard='$idcard'";

                                $check=sqlsrv_query($conn,$conCheck);   
        
       if(sqlsrv_has_rows($check) >= 1)
                                
			{
                                 echo '      <script>
       setTimeout(function() {
        swal({
            title: "�?ิด�?ลาด",
            text: "เล�?�?ัตร�?ระ�?า�?�? �?ี�?มี�?�?�?�?�?�?ล�?ว�?�?รดลอ�?�?หม�?อี�?�?รั�?�?",
            type: "error"
        }, function() {
            window.location = "/Project/register.php"; //ห�?�?าที�?ต�?อ�?�?าร�?ห�?�?ระ�?ดด�?�?
        });
    }, 1000);
</script>';
			}
			
			else
				{
                                   
                                 
					sqlsrv_query ($conn, "INSERT INTO [dbo].[patient] (patient_idcard, password, patient_phone, patient_birthday, patient_age, patient_sex, patient_address , patient_lastname , patient_name)
					VALUES ('$idcard', '$password1', '$phone', '$birthday', '$age', '$sex', '$address' , '$lastname', '$name' )");
						
                                        
                                          echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร�?�?สิ�?�?",
            text: "สมั�?รสมา�?ิ�?เรีย�?ร�?อย�?ล�?ว �?ุณสามารถทำ�?ารเ�?�?าสู�?ระ�?�?�?ด�?�?ล�?ว",
            type: "success"
        }, function() {
            window.location = "/Project/login.php"; //ห�?�?าที�?ต�?อ�?�?าร�?ห�?�?ระ�?ดด�?�?
        });
    }, 1000);
</script>';

}
        
        
        
        
        
        
}
?>
                                    
                                    
                                </div>
                                <div class="signup-image">
                                    <figure><img src="images/logoreg.png" alt="" width="350" hight="500"></figure>
                                    <br>
                                    <br>
                                    <center>
                                    <b> &emsp; <a href="login.php" class="signup-image-link">�?ั�?เ�?�?�?สมา�?ิ�?อยู�?�?ล�?ว</a> </b>
                       &emsp; <a href="index.php" class="signup-image-link">�?ลั�?ห�?�?า�?ร�?</a>
                       </center>
                    </div>
                            </div>
                            
                        </div>
                        
                    </div>

 
                </div>
            </section>
        </div>

        <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
        <!-- Include jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

        <script>
            $(document).ready(function () {
                var date_input = $('input[name="patient_birthday"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>

    </body>

</html>