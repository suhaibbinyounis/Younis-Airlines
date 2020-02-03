<?php
$dbServerName ='localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbDatabase ='younis_airlines';
$selection_query=$_GET['flight_sql'];
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbDatabase);
$r="insert into click values('$selection_query')";
$t=mysqli_query($conn,$r);
include_once 'customer_details.php';
?>