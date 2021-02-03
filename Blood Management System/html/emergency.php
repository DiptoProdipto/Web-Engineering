<?php
include("session.php");
error_reporting(0);
$query= "SELECT * FROM search";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($_GET['primary'])
{
	$blood= $_GET['bloodtype'];
	$loc= $_GET['location'];
	$con= $_GET['contact'];
	$email= $_GET['email'];
	$dat= $_GET['date'];
	
	if($blood!="" && $loc && $con && $email && $dat)
	{
		$query= "INSERT INTO search VALUES('$blood','$loc','$con','$email','$dat' )";
		$data=mysqli_query($conn,$query);
		if($data)
		{
			echo "<font color='green'>Post updated. <a href='display.php'> updated post list";
		}


	}
	else
	{
		echo "Please fill up all fields";
	}
}


?>


<!DOCTYPE html>
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

  <div class="container"> 
    <form action="emergency.php" method='GET' >
  <h2 class="ltext">Emergency Blood Needed From</h2>
      <p style="margin-left: 5%;">Please Noted that, only application through this form for an energency situation.</p>

  <div class="form-group" >
    <label for="exampleFormControlSelect1">Blood type select</label>
    <select class="form-control" name="bloodtype" id="exampleFormControlSelect1">
      <option value="A+">A RhD positive (A+)</option>
        <option value="A-">A RhD negative (A-)</option>
        <option value="B+">B RhD positive (B+)</option>
        <option value="B-">B RhD negative (B-)</option>
        <option value="O+">O RhD positive (O+)</option>
        <option value="O-">O RhD negative (O-)</option>
        <option value="AB+">AB RhD positive (AB+)</option>
        <option value="AB-">AB RhD negative (AB-)</option>
    </select>
  </div>
  <div class="form-group">
   <label for="exampleFormControlInput1">location</label>
    <input type="text" name="location" class="form-control" id="exampleFormControlInput1" placeholder="Example - Dhaka">
  </div>

  <div class="form-group">
   <label for="exampleFormControlInput1">Contact Number</label>
    <input type="text" name="contact" class="form-control" id="exampleFormControlInput1" placeholder="Example +8801....">
  </div>
 
 <div class="form-group">
   <label for="exampleFormControlInput1">Email</label>
    <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email....">
  </div>
  <div class="form-group">
   <label for="exampleFormControlInput1">Date</label>
    <input type="text" name="date" class="form-control" id="exampleFormControlInput1" placeholder="Date(YYYY-MM-DD)">
  </div>
	<input type='submit' name='primary' value='Post'/>
</form>
</div>


</body>
</html>