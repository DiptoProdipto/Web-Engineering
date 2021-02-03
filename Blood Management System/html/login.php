<?php
session_start();

include 'conn.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

$sql1="select * from admin where username='$username'";
$result2=mysqli_query($conn,$sql1);

$count1=mysqli_num_rows($result2);

if($count1==1){
    $row = mysqli_fetch_assoc($result2);
    if ($row['password'] == $password ){
        $_SESSION['username']=$username;
        header("location:admin.php");
        }
    else {
        echo "<script>alert('Wrong Username or Password!')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=https://localhost/blood/html/login.php">
        <?php
    }
}

$sql="select * from donor where username='$username'";

$result=mysqli_query($conn,$sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1){
    $row = mysqli_fetch_assoc($result);
    if ($row['password'] == $password ){
        $_SESSION['username']=$username;
        header("location: profile.php");
        }
    else {
        echo "<script>alert('Wrong Username or Password!')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=https://localhost/blood/html/login.php">
        <?php
    }
}
else{
    echo "<script>alert('Wrong Username or Password!')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=https://localhost/blood/html/login.php">
    <?php
}
}
?>
<!DOCTYPE html>
<html>

<head>

    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <div class="w3-top">
        <div class="w3-bar w3-red w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="../index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
            <a href="signUp.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Become a Donor</a>
            <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a>
            <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
            <a href="help.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Help Desk</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="search.php" class="w3-bar-item w3-button w3-padding-large">Search Donar</a>
            <a href="emergency.php" class="w3-bar-item w3-button w3-padding-large">Emergency Blood Request</a>
            <a href="help.php" class="w3-bar-item w3-button w3-padding-large">Help Desk</a>
            <a href="signUp.php" class="w3-bar-item w3-button w3-padding-large">Become a Donar</a>
        </div>


        <!-- Login Start -->
        <div class="lcontainer">
            <h2 class="ltext">Login</h2>
            <form form action="login.php" method="POST">
                <input class="em" type="text" id="username" name="username" placeholder="Enter your username">
                <input type="password" id="password" name="password" placeholder="Enter your password">
                <button type="submit" name="submit" class="btn2">Login</button>
            </form>
            <h3 class="h3text">Don’t have an account?</h3>
            <button class="btn3"><a href="signUp.php">SIGN UP NOW</a></button>

        </div>
</body>

</html>