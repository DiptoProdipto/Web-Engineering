<?php
include("session.php");
error_reporting(0);
if($_GET['search'])
{
    $bloodgroup = mysqli_real_escape_string($conn,$_GET['bloodtypeselect']);
	$location= $_GET['address'];
	$area= $_GET['area'];
	$query= "SELECT * FROM donor WHERE bloodgroup='$bloodgroup' and (district='$location' or area='$area')";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if(data)
	{
		//echo "search result show below";
	}
	else
	{
		echo("no doner available");
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<html lang="en">
	<title>Search</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
  <div style="height: 50px;width:100% ; background-color:red;">
        <button type="button" style="margin-left: 80%; margin-top: 10px;" class="btn btn-light"><a href="profile.php" style="text-decoration: none; color:black;">Back to Profile</a></button>
        <button type="button" style="margin-left: 10px; margin-top: 10px;"class="btn btn-light"><a href="logout.php" style="text-decoration: none; color:black;">logout</a></button>
    </div>

  <div class="container">
      <h2 class="ltext">Search Donar</h2>
      <form  action="search.php" method='GET'>
        <div class="form-group">
        <label for="fname">Address</label>
        <input class="form-control" type="text" name="address" placeholder="District">
		</div>
		<div class="form-group">
		<label for="frame">Area</label>
		<input class="form-control" type="text" name="area" placeholder="Area">
         </div>
        <div class="form-group">
    <label for="exampleFormControlSelect1">Blood type select</label>
    <form ction="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
        <select class="form-control" id="exampleFormControlSelect1" name="bloodtypeselect">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select>
    <br>
    <input type='submit' name='search' value='SEARCH'/>
    </form>
  </div>
  
        
        <br>
        <br>
      </form>
	  </div>
		<div class="container">
		<form  action="search.php" method='GET'>
	  <table class="table table-striped">
		<tr>
			<th>Name</th>
			<th>Blood Group</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Status</th>
			
		</tr>
		
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{?>
		    <tr>
				<td ><?php echo $result['name']?></td>
				<td><?php echo $result['bloodgroup']?></td>
				<td ><?php echo $result['phone']?></td>
				<td><?php echo $result['email']?></td>
				<td><?php echo $result['status']?></td>
				
				
				
			</tr>
		<?php
	}
?>

  </table>
</form>  
    </div>
</body>
</html>



