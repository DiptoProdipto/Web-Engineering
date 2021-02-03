<?php

    include 'session.php';

    if(isset($_POST['submit'])){
      $b=$_POST['status'];    
           $q="update donor set status='$b' where username = '$userprofile'";
             $query = mysqli_query($conn,$q);
           header('location: profile.php');
    }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Become a donor</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div style="height: 85px;width:100% ; background-color:red;">
       <div style="width:50%; float:left; ">
           <div style="width:15%;height:100%;float:left; overflow:hidden;padding:5px;"><p style="font-size:20px;margin-top:20px;border:2px white solid;text-align:center;background:white;"><a href="../index.php" class="w3-bar-item w3-button w3-padding-large w3-white" style="color:black;">Home</a></p></div>
            <div style="width:35%; float:left;overflow:hidden;"><h4 style="color:white; text-align:center; margin-top:20px;padding:5px;"><?php echo "Welcome, ".$result['name'] ?></h4></div>
       </div>
       <div style="width:50%; float:right;">
           <button type="button" style="margin-left: 500px;margin-top:20px;overflow:hidden;" class="btn btn-light"><a href="logout.php" style="color:black;text-decoration:none;">Logout</a></button>
       </div>   
    </div>

    <div class="container">
        <div class="row profile" >
            <div class="col-md-3" style="border: 2px black solid;">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <?php

                $image = $result['image'];
                $image_src = "images/".$image;
                ?>
                    <div class="profile-userpic">
                        <img src='<?php echo $image_src; ?>' class="img-responsive" alt="" style="height:200px;width:200px;">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                        <?php 
    
                        echo $result['name'] 
                        ?>
                        </div>
                        <div class="profile-usertitle-job">
                            <?php 
                        
                        echo $result['status'] 
                        ?>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-success btn-sm"><a href="editprofile.php?username=<?php echo $result['username']; ?>" style="color:white;">Edit Profile</a></button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">

                        <h4><?php echo "Name: ".$result['name'] ; ?></h4>
                        <h4><?php echo "City: ".$result['district'] ; ?></h4>
                        <h4><?php echo "Area: ".$result['area'] ; ?></h4>
                        <h4><?php echo "Contact: ".$result['phone'] ; ?></h4>
                    </div>
                    <hr>
                    <form method="post">
                       <tr>
                        <td>
                            <h4><input type="radio" name="status" value="Available" />Available</h4>
                        </td>
                        
                        </tr>
                        <tr>
                        <td>
                            <h4><input type="radio" name="status" value="Unavailable" />Unavailable</h4>
                        </td>
                        
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Save" class="btn btn-success" /></td>
                        </tr>
                    </form>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-3" >
               <br>
                <img class="card-img-top" src="../img/emer1.png" alt="Card image cap" width="200px" height="200px">
                <div class="card-body">
                    <h5 class="card-title">Emergency Blood Help</h5>
                    <p class="card-text">Across Bangladesh, every day there remains an urgent need for all types of blood groups.</p>
                    <a href="emergency.php" class="btn btn-primary">Emergency Blood Request</a>
                </div>
                <br>
            </div>
            <div class="col-md-3">
               <br>
                <img class="card-img-top" src="../img/donor.png" alt="Card image cap" width="200px" height="200px">
                <div class="card-body">
                    <h5 class="card-title">Search Donor</h5>
                    <p class="card-text">This is an automated free blood service that connects blood searchers with voluntary blood donors in Bangladesh.</p>
                    <a href="search.php" class="btn btn-primary">Search Donor</a>

                </div>
                <br>
            </div>
            <div class="col-md-3">
               <br>
                <img class="card-img-top" src="../img/search3.png" alt="Card image cap" width="200px" height="200px">
                <div class="card-body">
                    <h5 class="card-title">Search emergency blood post</h5>
                    <p class="card-text">Find out more about local blood drives and BDRCS campaigns near you. Donate blood, save lives.</p>
                    <a href="display.php" class="btn btn-primary">Search emergency Blood post</a>

                </div>
                <br>
            </div>

           <div class="col-md-9">
                <div class="card-body" style="height:40px;">
                    <hr style="height:2px;background:black;">
                </div>
            </div>
            <div class="col-md-3">
                <img class="card-img-top" src="../img/bloodbank.png" alt="Card image cap" width="200px" height="200px">
                <div class="card-body">
                    <h5 class="card-title">Blood Bank</h5>
                    <p class="card-text">Especially donors with rare blood groups such as O Negative, B Negative and A Negative are in high demand.</p>
                    <a href="bloodbanksearch.php" class="btn btn-primary">Blood Bank</a>


                </div>
            </div>

            <div class="col-md-3">
                <img class="card-img-top" src="../img/blood4.png" alt="Card image cap" height="200px" width="200px">
                <div class="card-body">
                    <h5 class="card-title">Donate Blood</h5>
                    <p class="card-text">Eligible healthy donors (age 18 to 60 years, having Hb >12gm/dl and weight >45) male can donate blood every 4 months interval.</p>
                    <a href="donate.php" class="btn btn-primary">Donate</a>


                </div>
            </div>



        </div>
    </div>
    <br>
    <br>
    <center>
        <strong>Powered by <a href="help.php" target="_blank">Qubit</a></strong>
    </center>
    <br>


</body>

</html>
