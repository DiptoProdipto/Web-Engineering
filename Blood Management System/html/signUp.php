<?php

    include 'conn.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Become a donor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
            <a href="help.php" class="w3-bar-item w3-button w3-padding-large">help Desk</a>
            <a href="signUp.php" class="w3-bar-item w3-button w3-padding-large">Become a Donar</a>
        </div>
    </div>


    <h2 style="font-size: 30px;font-weight: bold;color: #44B2EF;">Spare only 15 minutes and save one life</h2>
    <p style="font-size: 20px;color:#46A049;">Welcome , Sign Up here and become a member of our blood donation community.Sometimes we tend to forget how easy can be to help another human being , but Anybody can save lives.Donate your blood for a reason, let the reason to be life</p>

    <div class="container">

        <form action="register.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="name">Your Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Enter your name.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Enter your email address.." required style="width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;resize: vertical;">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="phone">Phone Number</label>
                </div>
                <div class="col-75">
                    <input type="text" id="phone" name="phone" placeholder="Enter your phone Number.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="username">User Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="username" name="username" placeholder="Enter your user name (eg. user123).." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="district">District</label>
                </div>
                <div class="col-75">
                    <select id="district" name="district">
                        <option value="Select your district">Select your district</option>
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
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="area">Area</label>
                </div>
                <div class="col-75">
                    <input type="text" id="area" name="area" placeholder="Enter your area.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="blood">Blood Group</label>
                </div>
                <div class="col-75">
                    <select id="blood" name="blood">
                        <option value="Select your blood group">Select your blood group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                    <span id='selectblood'></span>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">Password</label>
                </div>
                <div class="col-75">
                    <input type="password" id="password" name="password" placeholder="Enter your password..." required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">Confirm Password</label>
                </div>
                <div class="col-75">
                    <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password..." required>
                    <span id='message'></span>
                </div>

            </div>
            <div class="row">
                <input id="sub" type="submit" name="submit" value="CONFIRM" class="w3-button w3-black w3-padding-large w3-large w3-margin-top" style="border-radius: 15%;">
            </div>
        </form>
    </div>
</body>

</html>


<script>
    $('#cpassword').keyup(function() {
        var pass = $('#password').val();
        var cpass = $('#cpassword').val();
        if (pass != cpass) {
            $('#message').html('Password did not match').css('color', 'red');
            $('#sub').attr({
                disabled: true
            });
        } else {
            $('#message').html('Password matched').css('color', 'green');
            $('#sub').attr({
                disabled: false
            });
        }
    });
    
    

</script>

