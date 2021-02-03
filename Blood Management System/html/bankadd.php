<?php

session_start();
    include ("conn.php");

    $userprofile = $_SESSION['username'];
    
    if($userprofile=='admin')
    {
        
    }
    else
    {
        session_unset();
        header("location: login.php");
    }
if(isset($_POST['submit'])){
$number = $_POST['number'];
$name = $_POST['bname'];
$city = $_POST['bcity'];
$area = $_POST['barea'];
if (!empty($number) || !empty($name) || !empty($city) || !empty($area)) {
   $SELECT = "SELECT name From bank Where name = ? Limit 1";
     $INSERT = "INSERT INTO bank(name,city,area,contact) values(?, ?, ?, ?)";

     $stmt = $conn->prepare($SELECT);
     $stmt->bind_result($name);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss",$name,$city,$area,$number);
      $stmt->execute();
    echo "New blood bank record inserted sucessfully!";
    header('Location:admin.php');
     } else {
      echo "Data not inserted! Please try again.";
     }
     $stmt->close();
     $conn->close();
} else {
 echo "All field are required";
 die();
}
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div style="height: 50px;width:100% ; background-color:green;">
       

        
        <button type="button" style="margin-left: 90%; margin-top: 10px;" class="btn btn-light"><a href="logout.php" style="color:black;text-decoration:none;">Logout</a></button> 

    </div>
    <div class="container">
    	<form method="post" action="">
    		<div class="form-group">
              <label for="name">Blood Bank Name</label>
               <input type="text" class="form-control" id="" name="bname">
           </div>
           <div class="form-group">
              <label for="name">City</label>
               <input type="text" class="form-control" id="" name="bcity">
           </div>
           <div class="form-group">
              <label for="name">Area</label>
               <input type="text" class="form-control" id="" name="barea">
           </div>
           <div class="form-group">
              <label for="name">Contact Number</label>
               <input type="Number" class="form-control" id="" name="number">
           </div>
         

           <button type="submit=" name="submit" class="btn btn-primary">Add Blood bank</button>
    	</form>
    </div>
</body>
</html>
