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
<p>Choose your Payment Mode</p>
<form action="" method="get">
	<input type="radio" name="payment" value="true">Net Banking<br>
	<input type="radio" name="payment" value="true">Debit Card<br>
	<input type="radio" name="payment" value="true">Google Pay<br>
	<button>Pay</button>
</form>
<?php
if (isset($_GET['payment']))
{
	echo "<p>Payment Sucessfull</p>";
	echo "<p>Your Ticket has been booked</p>";
	echo "<form action=\"print.php\" method=\"get\"><table><tr><td></td><td><button>Show Itenary</button></td></tr></table></form>";

$pass_detail_query="select * from TRAVEL_DATA;";
$dbServerName ='localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbDatabase ='younis_airlines';
$clear2="delete from TRAVEL_DATA;";
$clear1="delete from flight_schedule;";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbDatabase);
/*$end1=mysqli_query($conn,$clear1);
$end2=mysqli_query($conn,$clear2);*/
}
?>
<p id="footer">Ⓒ Copyright 2020 Younis Airlines. All rights reserved.
</p>
</body>
</html>
