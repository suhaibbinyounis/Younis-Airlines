<!DOCTYPE html>
<html>
<head>
	<title>Web</title>
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

<div>
	<?php
$dbServerName = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbDatabase = 'younis_airlines';
$results="";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbDatabase);
$ticket_query="select * from customer_ticket where flight_id=(select flight_no from click LIMIT 1);";
$a=mysqli_query($conn,$ticket_query);
echo "<table border=\"1\" style=\"border:3px solid red;margin:auto;text-align:center;\">";
echo "<thead ><tr><td>Customer Name</td><td>Flight No</td><td>Departure</td><td>Arrival</td><td>Date of Travel</td><td>Boarding Time</td><td>Arrival Time</td><td>Price</td><td>PNR</td></tr></thead>";
while($row=mysqli_fetch_assoc($a))
{
   echo "<tr><td>".$row['cus_name']."</td><td>".$row['flight_id']."</td><td>".$row['departure']."</td><td>".$row['arrival']."</td><td>".$row['date']."</td><td>".$row['boarding_time']."</td><td>".$row['arrival_time']."</td><td>".$row['Price']."</td><td>".$row['PNR']."</td></tr>";
}
   echo "</table>";

$clear_query_1="delete from click;";
$clear_query_2="delete from flight_schedule;";
$clear_query_3="delete from TRAVEL_DATA;";
$clear_processed=mysqli_query($conn,$clear_query_1);
$clear_processed=mysqli_query($conn,$clear_query_2);
$clear_processed=mysqli_query($conn,$clear_query_3);

	?>
</div>
<button onclick="myFunction()">Print this Ticket</button>
<script>
function myFunction() {
  window.print();
}
</script>


<p id="footer">Ⓒ Copyright 2020 Younis Airlines. All rights reserved.
</p>

</body>
</html>