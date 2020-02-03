<!DOCTYPE html>
<html>
<head>
	<title>Web Checkin</title>
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

<form>
	<table>
		<tr>
			<td>Your PNR number*</td><td><input type="text" name="PNR" required></td>
		</tr>
		<tr>
			<td>Your seat number</td><td><input type="number" name="seat_no"></td>
		</tr>
		<tr>
			<td>What would you like to eat?</td><td><input type="text" name="food"></td>
		</tr>
	</table>
	<input type="submit" >
</form>
<?php
if(isset($_GET['PNR'])){
$pnr=$_GET['PNR'];
$seat=$_GET['seat_no'];
$food=$_GET['food'];
$conn=mysqli_connect('localhost','root','','younis_airlines');
$webcheckin_query="insert into web_checkin values('$pnr',$seat,'$food');";
$webcheckin_query_processed=mysqli_query($conn,$webcheckin_query);
echo "<p>Checkin Complete. You can check it in Manage Booking</p>";
echo "<p>Thank you for choosing our service</p>";
}
?>
<p id="footer">Ⓒ Copyright 2020 Younis Airlines. All rights reserved.
</p>
</body>
</html>