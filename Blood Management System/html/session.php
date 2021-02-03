<?php
    session_start();
    include ("conn.php");
    $userprofile = $_SESSION['username'];
    
    if($userprofile==true && $userprofile!='admin')
    {
        
    }
    else
    {
        //session_unset();
        header("location: login.php");
    }

    $q = "SELECT * FROM donor WHERE username='$userprofile'";
    $data = mysqli_query($conn,$q);
    $result = mysqli_fetch_assoc($data);
?>