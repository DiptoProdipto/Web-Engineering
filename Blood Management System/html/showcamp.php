<?php
    include ("session.php");
     $sql = "select * from camp";
   
   $result = mysqli_query($conn,$sql);

if (isset($_POST['submit'])) {
  # code...
   echo "Donate Succesful";
   header('location: profile.php');

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Become a donor</title>
    <meta charset="UTF-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div style="height: 50px;width:100% ; background-color:red;">
        <button type="button" style="margin-left: 80%; margin-top: 10px;" class="btn btn-light"><a href="profile.php" style="text-decoration: none; color:black;">Back to Profile</a></button>
        <button type="button" style="margin-left: 10px; margin-top: 10px;"class="btn btn-light"><a href="../index.php" style="text-decoration: none; color:black;">logout</a></button> 
    </div>
    <div class="container">
        <h3>All Camp's Data</h3>
          
  <table class="table">
    <thead>
      <tr>
        <th>Camp name</th>
        <th>City </th>
        <th>Area</th>
        <th>Organizer</th>
        <th>Date</th>

      </tr>
    </thead>
    <tbody>
        <?php
   while($row = mysqli_fetch_array($result)) 
   {
    ?>

        <tr class="table-success">
          <form method="post" action="showcamp.php">
        <td><?php echo $row['cname']; ?></td>
        <td><?php echo $row['ccity']; ?> </td>
        <td><?php echo $row['carea']; ?></td>
        <td><?php echo $row['org']; ?></td>
        <td><?php echo $row['date']; ?></td>
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