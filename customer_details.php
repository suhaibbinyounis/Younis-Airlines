<!DOCTYPE html>
<html>
<head>
	<title>Customer Details</title>
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
					<button>HOME</button>
				</form>
			</td>
			<td>
				<form method="get" action="Manage_Booking.php">
					<button>Manage Booking</button>
				</form>
				
			</td>
			<td>
				<form method="get" action="Web_Checkin.php">
					<button>Web Checkin</button>
				</form>
				
			</td>
			<td>
				<form method="get" action="Flight_Status.php">
					<button>Flight Status</button>
				</form>
				
			</td>
			<td>
				<form method="get" action="admin.php">
					<button>ADMIN</button>
				</form>
			</td>
		</tr>
	</table>
</div>
<h2 >Customer details</h2>
<?php 
$dbServerName ='localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbDatabase ='younis_airlines';
$flight_data_query="select * from flight_schedule;";
$clear="delete from flight_schedule;";
$clear_travel="delete from TRAVEL_DATA;";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbDatabase);
$flightno=$_GET['flight_sql'];
$book_ticket_query="select * from flight_schedule where Flight_no='$flightno';";
$book_ticket_data=mysqli_query($conn,$book_ticket_query);
$pass_detail_query="select * from TRAVEL_DATA;";
$pass_detail_processed_query=mysqli_query($conn,$pass_detail_query);
$pass_number_row=mysqli_fetch_assoc($pass_detail_processed_query);
$pass_number=$pass_number_row['PASS_NO'];
echo "<form action=\"bottleneck.php\" method=\"get\">";
for($i=1;$i<=$pass_number;$i++)
{
 echo "Enter Passenger $i Name:";
 echo "<input type=\"text\" name=\"cus$i\" required><br>";   
}
echo "<button class=\"button3\">Pay Now</button>";
echo "</form>";
?>
<p id="footer">Ⓒ Copyright 2020 Younis Airlines. All rights reserved.
</p>
</body>
</html>
