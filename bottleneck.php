<?php
$pass_detail_query="select * from TRAVEL_DATA;";
$dbServerName ='localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbDatabase ='younis_airlines';
$flight_data_query="select * from flight_schedule;";
$clear="delete from flight_schedule;";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbDatabase);
$bring_query="select * from click;";
$ting=mysqli_query($conn,$bring_query);
$ding=mysqli_fetch_assoc($ting);
$val=$ding['flight_no'];
$w_query="delete from flight_schedule where Flight_no<>'$val';";
$rr=mysqli_query($conn,$w_query);
$pass_detail_processed_query=mysqli_query($conn,$pass_detail_query);
$pass_number_row=mysqli_fetch_assoc($pass_detail_processed_query);
$y=mysqli_query($conn,$flight_data_query);
$c=mysqli_fetch_assoc($y);
$l=mysqli_query($conn,$pass_detail_query);
$k=mysqli_fetch_assoc($l);
$PNR="KASH-".rand(1,9)."-YA-".rand(1,9);
$pass_number=$k['PASS_NO'];
for($u=1;$u<=$pass_number;$u++)
{
	if(isset($_GET['cus'.$u])){
	$aa= $_GET['cus'.$u];
	$ab=$c['Flight_no'];
	$ac=$c['Departure'];
	$ad=$c['Arrival'];
	$ae=$k['PASS_DATE'];
	$af=$c['Boarding_Time'];
	$ag=$c['Arrival_Time'];
	$ah=$c['Price'];
	$ai=$PNR;
	$meow = "insert into customer_ticket values('$aa','$ab','$ac','$ad','$ae','$af','$ag',$ah,'$ai');";
$execute=mysqli_query($conn,$meow);}
}
include_once 'Final_execution.php';
?>