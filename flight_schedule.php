<?php
$dbServerName ='localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbDatabase ='younis_airlines';
$flight_data_query="select * from flight_schedule;";
$clear="delete from flight_schedule;";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbDatabase);
for($p=0;$p<10;$p++){
$depart= $_GET['departure'];
$arrival=$_GET['arrival'];
$date_travel=$_GET['date'];
$flight_no="YA".rand(1000,1500);
$boarding_time=rand(0,24).":".rand(0,60);
$arrival_time=rand(0,24).":".rand(0,60);
$price=rand(1000,10000);
$sql_query = "insert into flight_schedule values('$depart','$arrival','$flight_no','$boarding_time','$arrival_time',$price);";
$results=mysqli_query($conn,$sql_query);
}
$flight_data=mysqli_query($conn,$flight_data_query);
$pass_no=$_GET['total'];
$pass_date=$_GET['date'];
$sql_travel_data_query="insert into TRAVEL_DATA values('$pass_no','$pass_date');";
$sql_travel_data=mysqli_query($conn,$sql_travel_data_query);
?>