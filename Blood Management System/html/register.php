<?php

    include 'conn.php';

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $district = $_POST['district'];
        $area = $_POST['area'];
        $blood = $_POST['blood'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        $s = "select * from donor where username = '$username'";
        $result = mysqli_query($conn,$s);
        $num = mysqli_num_rows($result);
        
        if($num == 1)
        {
            echo "<script>alert('Username already taken. Choose a different one.')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/blood/html/signUp.php">
            <?php
        }
        else
        {
            if($name!="" && $email!="" && $phone!="" && $username!="" && $district!="Select your district" && $area!="" && $blood!="Select your blood group" && $password!="" && $cpassword!="" && $password==$cpassword)
            {
                $sql = "INSERT INTO donor (username, name, email, phone, district, area, bloodgroup, password) VALUES('$username','$name','$email','$phone','$district','$area','$blood','$password');"; 

                $data = mysqli_query($conn, $sql);
            
                if($data)
                {
                    header("location: login.php");
                }

                else
                {
                    echo "<script>alert('Signing up failed. Try again!')</script>";
                    ?>
                        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/blood/html/signUp.php">
                    <?php
                }
            }
            else if($district=="Select your district" && $blood=="Select your blood group")
            {
                echo "<script>alert('Please select your district and blood group')</script>";
                ?>
                        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/blood/html/signUp.php">
                <?php
            }
            else if($district=="Select your district")
            {
                echo "<script>alert('Please select your district')</script>";
                ?>
                        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/blood/html/signUp.php">
                <?php
            }
            else if($blood=="Select your blood group")
            {
                echo "<script>alert('Please select your blood group')</script>";
                ?>
                        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/blood/html/signUp.php">
                <?php
            }

            else if($password!=$cpassword)
            {
                header ("location: signUp.php");
                
            }
    
            
            
        }    
  
    }
    
?>