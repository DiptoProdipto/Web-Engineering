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
    $sql = "select * from donor";
   $result = mysqli_query($conn,$sql);

if(isset($_POST['delete'])){
    
/*$key = $_POST['id1'];
echo "$key";
$queryDelete = mysqli_query($conn,"delete from donor where username='$key'");*/
    $un = $_POST['delete'];

    $q = " DELETE FROM donor WHERE username = '$un'";

    mysqli_query($conn, $q);
    header('Location: admin.php');

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
    <button type="button" class="btn btn-primary"><a href="campadd.php" style="text-decoration: none; color: white;">Add camp data</a></button>
    <button type="button" class="btn btn-primary"><a href="bankadd.php" style="text-decoration: none;color: white;">Add Blood Bank Data</a></button>
</div>
    <div class="container">
        <h3>All User's Data</h3>
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Name </th>
        <th>Phone</th>
        <th>action</th>

      </tr>
    </thead>
    <tbody>
        <?php
   while($row = mysqli_fetch_assoc($result)) 
   {
    ?>

        <tr class="table-success">
            <form method="post">
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['name']; ?> </td>
        <td><?php echo $row['phone']; ?></td>
       <!-- <td><input type="checkbox" name="id1" value="" required> </td>-->
        <td><button type="submit" name="delete" value="<?php echo $row['username']; ?>" class="btn btn-danger">Delete</button></td>
        
        </form>
      </tr>
 <?php 
}
?>
      </tbody>
  </table>
</div>

</body>
</html>