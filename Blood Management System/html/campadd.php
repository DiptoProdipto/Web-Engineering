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
$org = $_POST['corg'];
$name = $_POST['cname'];
$city = $_POST['ccity'];
$area = $_POST['carea'];
$date = $_POST['cdate'];
if(!empty($org) || !empty($name) || !empty($city) || !empty($area) || !empty($cdate)) {
   $SELECT = "SELECT cname From camp Where cname = ? Limit 1";
     $INSERT = "INSERT INTO camp(cname,ccity,carea,org,date) values(?, ?, ?, ?,?)";

     $stmt = $conn->prepare($SELECT);
     $stmt->bind_result($name);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss",$name,$city,$area,$org,$date);
      $stmt->execute();
    echo "New blood camp record inserted sucessfully!";
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
              <label for="name">Camp Name</label>
               <input type="text" class="form-control" id="" name="cname">
           </div>
           <div class="form-group">
              <label for="name">Address City</label>
               <input type="text" class="form-control" id="" name="ccity">
           </div>
           <div class="form-group">
              <label for="name">Area</label>
               <input type="text" class="form-control" id="" name="carea">
           </div>
           <div class="form-group">
              <label for="name">Organizer</label>
               <input type="text" class="form-control" id="" name="corg">
           </div>
           <div class="form-group">
              <label for="name">date</label>
               <input type="text" class="form-control" id="" name="cdate">
           </div>

           <button type="submit=" name="submit" class="btn btn-primary">Add Camp</button>
    	</form>
    </div>
</body>
</html>