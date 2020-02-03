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

<p id="headline_p"><em><strong>Book your next destination now</strong></em></p>
<div class="younis_form">
<form action="Book_Ticket.php" method="get">
	<table>
		<tr>
			<td>Departure</td>
			<td><input type="text" name="departure" required></td>
		</tr>
		<tr>
			<td>Arrival</td>
			<td><input type="text" name="arrival" required></td>
		</tr>
		<tr>
			<td>Date</td>
			<td><input type="date" name="date" required></td>
		</tr>
		<tr>
			<td>No. of Passengers</td>
			<td><input type="number" name="total" required></td>
		</tr>
	</table>
	<button class="button3">Search me a flight!</button>
</form>
</div>

<div class="footer_class">
<img id="logo_png" src="younis_logo.png" alt="logo">
</div>



<p id="footer">Ⓒ Copyright 2020 Younis Airlines. All rights reserved.
</p>

</body>
</html>