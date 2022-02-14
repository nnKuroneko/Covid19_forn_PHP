<?php
$mysqli = new mysqli("localhost", "root", "", "covid_db");

$id = $_POST['id'];

 mysqli_query($mysqli, "DELETE FROM bed WHERE bed_id = '$id'") or die(mysqli_error());

?>