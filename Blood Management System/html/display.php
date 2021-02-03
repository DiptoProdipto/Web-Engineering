<style>
th {
  background-color: #4CAF50;
  color: white;
  
}
table, td, th {
  border: 1px solid black;
}
table{
  width:100%
}
tr:hover {background-color: #f5f5f5;}

</style>

<html>
<head>
<html lang="en">
	<title>Emergency Blood Help</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" type="text/css" href="../css/style.css"> 
<link rel="stylesheet" type="text/css" href="../css/emergency.css"> --> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div style="height: 50px;width:100% ; background-color:red;">
        <button type="button" style="margin-left: 80%; margin-top: 10px;" class="btn btn-light"><a href="profile.php" style="text-decoration: none; color:black;">Back to Profile</a></button>
        <button type="button" style="margin-left: 10px; margin-top: 10px;"class="btn btn-light"><a href="../index.php" style="text-decoration: none; color:black;">logout</a></button>
    </div>
</body>
</html>

<?php
include 'session.php';
error_reporting(0);
$query="SELECT * FROM search";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total != 0)
{
	?>
	<table class="table table-striped" >
		<tr>
			<br><br>
			<th>Blood Type</th>
			<th>Location</th>
			<th>Contact</th>
			<th>email</th>
			<th>Date</th>
			<th colspan="3">ACTIONS</th>
		</tr>
		
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td >".$result['bloodtype']."</td>
				<td>".$result['location']."</td>
				<td>".$result['contact']."</td>
				<td>".$result['email']."</td>
				<td>".$result['date']."</td>
				
				<td><a href='profile.php'>Accept</a></td>
			</tr>";
		
	}
	
}
else
{
	echo "table has no record";
}
?>
</table>
