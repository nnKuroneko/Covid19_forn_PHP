<?php
//	$mysqil=mysqli_connect("localhost","root","", "storebaby_db") or die(mysql_error());
?>

<?php
$serverName = "localhost"; //serverName\instanceName ถ้าฐานข้อมูลอยู่ในเครื่องเราใช้ localhost

$connectionInfo = array(
    "Database" => "covid_db",
    "UID" => "sa",
    "PWD" => "08924155za"
);

$conn = sqlsrv_connect( $serverName, $connectionInfo);

?>