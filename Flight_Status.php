<!DOCTYPE html>
<html>
<head>
	<title>Flight Status</title>
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
<div class="PNR_status">
	<form action="" method="get">
	PNR::<input type="text" name="PNR"><br>
	<button class="button3">Get Status</button>
</form>

</div>
<p>
	
</p><p id="footer">Ⓒ Copyright 2020 Younis Airlines. All rights reserved.
</p>
</body>
</html>
<?php 
if(isset($_GET['PNR']) && !empty($_GET['PNR'])){
$input=$_GET['PNR'];
$num=rand(0,9);
if($num%2==0)
echo "<p>Your Flight ".$input." is on time.</p>";
else if($num%3==0)
echo "<p>Your Flight ".$input." is delayed</p>";
else 
echo "<p>Your Flight ".$input." has been cancelled. Sorry!</p>";
echo "<p>Check-in counters closes 45 minutes prior to scheduled departure time.</p><p>Boarding gates close 25 minutes prior to departure at all airports. Passengers must be present at the boarding gate no later than the time specified by Younis Airlines when they check in or any subsequent announcements made at the airport.</p>"; 
}
?>