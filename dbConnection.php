<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<p>Query:: </p><textarea name="query"></textarea>
	<button class="button3">Execute</button>
</form>
<?php
$dbServerName = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbDatabase = 'younis_airlines';
$results="";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbDatabase);
if (isset($_POST['query']) && !empty($_POST['query']))
{
$sql_query = $_POST['query'];
$results = mysqli_query($conn,$sql_query);
echo "Executed Sucessfully<br>";
while($row = mysqli_fetch_assoc($results))
{
	echo $row['Name']." ".$row['Email']." ".$row['Age']." ".$row['Flight_id']." ".$row['PNR']."<br>";
}
}

?>
<p id="footer">Ⓒ Copyright 2020 Younis Airlines. All rights reserved.
</p>
</body>
</html>
