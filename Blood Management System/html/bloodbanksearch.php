<?php
include 'session.php';
error_reporting(0);
if($_GET['search'])
{
	
	$city= $_GET['city'];
	$query= "SELECT * FROM bank WHERE city='$city' ";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
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
  <div style="height: 75px;width:100% ; background-color:red;">
  	<button type="button" style="margin-left: 80%; margin-top: 10px;" class="btn btn-light"><a href="profile.php" style="text-decoration: none; color:black;">Back to Profile</a></button>
        <button type="button" style="margin-left: 10px; margin-top: 10px;"class="btn btn-light"><a href="../index.php" style="text-decoration: none; color:black;">logout</a></button>
    </div>

  <div class="container" >
      <h2 class="ltext">Search Blood Bank</h2>
      <form  action="bloodbanksearch.php" method='GET'>
        </div>
		<div class="form-group" >
		<label for="frame">City</label>
		<input class="form-control" type="text" name="city" placeholder="city">
         </div>
  </div>
  
        <input type='submit' name='search' value='SEARCH'/>
      </form>
	  </div>
		<div class="container">
		<form  action="bloodbanksearch.php" method='GET'>
	  <table class="table table-striped">
		<tr>
			<th>Name</th>
			<th>City</th>
			<th>Area</th>
			<th>Contact</th>
			<th colspan="3">ACTIONS</th>
			
		</tr>
		
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{?>
		    <tr>
				<td ><?php echo $result['name']?></td>
				<td><?php echo $result['city']?></td>
				<td ><?php echo $result['area']?></td>
				<td><?php echo $result['contact']?></td>
				<td><a href='profile.php'>Available</a></td>
	
			</tr>
		<?php
	}
?>

  </table>
</form>  
    </div>
</body>
</html>



