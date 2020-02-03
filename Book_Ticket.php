<!DOCTYPE html>
<html>
<head>
	<title>Flights</title>
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
<p><marquee>Total price includes taxes + fees for 1 adult. Additional bag fees and other fees may apply.</marquee></p>
<?php

include_once 'flight_schedule.php';
echo "<style>
.flight_table tr td{
margin:auto;
padding:auto;
text-align:center;
border:3px solid red;}
</style>";
echo "<table class=\"flight_table\">";
echo "<thead><tr><td>Departure</td><td>Arrival</td><td>Flight No</td><td>Date</td><td>Boarding Time</td><td>Arrival Time</td><td>Price</td><td>Action</td></tr></thead>";
		while($row=mysqli_fetch_assoc($flight_data))
		{
			$xc=$row['Flight_no'];
			echo "<tr>"."<td>".$row['Departure']."</td>"."<td>".$row['Arrival']."</td>"."<td>".$row['Flight_no']."</td>"."<td>$date_travel</td>"."<td>".$row['Boarding_Time']."</td>"."<td>".$row['Arrival_Time']."</td>"."<td>".$row['Price']."₹"."</td>"."<td><form action=\"click.php\" method=\"get\"><input type=\"hidden\" name=\"flight_sql\" value=\"$xc\"><button>Book Now</button></form></td>"."</tr>";
		}
echo "</table>";
?>
<p id="footer">Ⓒ Copyright 2020 Younis Airlines. All rights reserved.
</p>
</body>
</html>