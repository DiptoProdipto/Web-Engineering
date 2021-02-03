<?php
    include 'session.php';
    

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $district = $_POST['district'];
        $area = $_POST['area'];
        $password = $_POST['password'];
        
         $image = $_FILES['image']['name'];
         // Get text

      // image file directory
       $target = "images/".basename($image);
        
        $q="update donor set name='$name', email='$email', image='$image',phone='$phone',district='$district',area='$area',password='$password' where username = '$userprofile'";

        $query = mysqli_query($conn,$q);
        header('location: profile.php');

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
       header('location: profile.php');
    }
       
    }

?>


<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="../css/updateStyle.css?v=<?php echo time(); ?>">   
</head>
    <body>
    <div class="update">
            <br>
            <br>
            <form method="post" enctype="multipart/form-data">
        
            <br>
            <input type="text" name="name" placeholder="Name" value="<?php echo $result['name'];?>" required>
            <br>
            <br>
            <input type="email" name="email" placeholder="Email" value="<?php echo $result['email'];?>" required>
            <br>
            <br>
            <input type="text" name="phone" placeholder="Phone" value="<?php echo $result['phone'];?>" required>
            <br>
            <br>
            <select id="district" name="district">
                        <option value="<?php echo $result['district'];?>"><?php echo $result['district'];?></option>
                        <option value="Barguna">Barguna</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Bhola">Bhola</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Noakhali ">Noakhali </option>
                        <option value="Faridpur ">Faridpur </option>
                        <option value="Gazipur">Gazipur</option>
                        <option value="Tangail ">Tangail </option>
                        <option value="Jessore">Jessore</option>
                        <option value="Khulna ">Khulna </option>
                        <option value="Joypurhat">Joypurhat </option>
                        <option value="Bogra  ">Bogra </option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Feni ">Feni </option>
                        <option value="Other">Other</option>
                    </select>
            <br>
            <br>
            <input type="text" name="area" placeholder="Area" value="<?php echo $result['area'];?>" required>
            <br>
            <br>
            <input type="password" name="password" placeholder="New password" value="<?php echo $result['password'];?>" required>
            <br>
            <br>
            <input type="file" name="image">
            <br>
            <br>
            <input type="submit" name="submit" value="Update">  
            <br>
            <a href="profile.php" style="text-decoration:none;color:#fff">Cancel</a> 
            </form> 
       </div>   
    </body>
</html>