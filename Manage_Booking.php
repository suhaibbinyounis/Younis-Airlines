<!DOCTYPE html>
<html>
<head>
	<title>Manage Booking</title>
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Younis Airlines</h1>
<hr>
<div class="header">
	<table>
		<tr>
			<td>
				<form method="get" action="index.php">
					<button class="button3">HOME</button>
				</form>
			</td>
			<td>
				<form method="get" action="Manage_Booking.php">
					<button class="button3">Manage Booking</button>
				</form>
				
			</td>
			<td>
				<form method="get" action="Web_Checkin.php">
					<button class="button3">Web Checkin</button>
				</form>
				
			</td>
			<td>
				<form method="get" action="Flight_Status.php">
					<button class="button3">Flight Status</button>
				</form>
				
			</td>
			<td>
				<form method="get" action="admin.php">
					<button class="button3">ADMIN</button>
				</form>
			</td>
		</tr>
	</table>
</div>
<form action="" method="get">
<table>
	<tr><td>PNR</td><td><input type="text" name="PNR"></td></tr>
	<tr><td></td><td><input type="submit"></td></tr>
</table>
</form>


<?php
$dbServerName = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbDatabase = 'younis_airlines';
$results="";
if(isset($_GET['PNR']))
$results=$_GET['PNR'];
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbDatabase);
$ticket_query="select * from customer_ticket where PNR='$results';";
$a=mysqli_query($conn,$ticket_query);
if(isset($results) && !empty($results)){
echo "<p><h2>Your Booking Details<h2></p>";

echo "<table border=\"1\" style=\"border:3px solid red;margin:auto;text-align:center;\">";
echo "<thead ><tr><td>Customer Name</td><td>Flight No</td><td>Departure</td><td>Arrival</td><td>Date of Travel</td><td>Boarding Time</td><td>Arrival Time</td><td>Price</td><td>PNR</td></tr></thead>";
while($row=mysqli_fetch_assoc($a))
{
   echo "<tr><td>".$row['cus_name']."</td><td>".$row['flight_id']."</td><td>".$row['departure']."</td><td>".$row['arrival']."</td><td>".$row['date']."</td><td>".$row['boarding_time']."</td><td>".$row['arrival_time']."</td><td>".$row['Price']."</td><td>".$row['PNR']."</td></tr>";
}
   echo "</table>";

   echo "<p>Your Checkin Details</p>";

   $webcheckin_query="select * from web_checkin where PNR='$results';";
   $webcheckin_query_processed=mysqli_query($conn,$webcheckin_query);
   echo "<table border=\"1\" style=\"border:3px solid red;margin:auto;text-align:center;\">";
   echo "<thead ><tr><td>Seat No</td><td>Food</td></thead>";
   while($row=mysqli_fetch_assoc($webcheckin_query_processed)){
    echo "<tr><td>".$row['seat']."</td><td>".$row['food']."</td></tr>";
   }
   echo "</table>";
echo "<button onclick= \" myFunction()\">Print this Ticket</button>
<script>
function myFunction() {
  window.print();
}
</script>";
}
?>
<p id="footer">Ⓒ Copyright 2020 Younis Airlines. All rights reserved.
</p>
</body>
</html>