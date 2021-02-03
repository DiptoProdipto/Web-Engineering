<!DOCTYPE html>
<html lang="en">
<head>
	<title>Help Desk</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/help.css">
</head>
<body>
	<!-- Navbar -->
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
    <a href="signUp.php" class="w3-bar-item w3-button w3-padding-large">Become a Donor</a>
  </div>
</div>

		<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../img/slo1.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../img/slo2.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../img/slo3.jpg" style="width:100%;">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

		<h2 style="text-align: center; margin-top: 40px;color: red;font-weight: bold;margin-left: 50px;">Contact With Us</h2>

				<h2 style="text-align: center;margin-top: 40px;color: blue;font-weight: bold;">Our Team</h2>

			<div class="hteam">
				<div class="team" style="background-color: #EBEDEF;cursor: pointer;">
					<img src="../img/sazith1.jpg" style="height: 300px;width: 405px;border-radius: 10%;">
					<h2 style="text-align: center;">Md. Sazith Shyonton</h2>
					<h3 style="text-align: center;">B.Sc in CSE</h3>
					<h3 style="text-align: center;">Daffodil International University</h3>
				</div>
				<div class="team"style="background-color: #EBEDEF;cursor: pointer;">
					<img src="../img/dipto.jpg" style="height: 300px;width: 405px;border-radius: 10%;">
					<h2 style="text-align: center;">Prodipto Roy Dipto</h2>
					<h3 style="text-align: center;">B.Sc in CSE</h3>
					<h3 style="text-align: center;">Daffodil International University</h3>
				</div>

				<div class="team" style="background-color: #EBEDEF;cursor: pointer;">
					<img src="../img/pappu.jpg" style="height: 300px;width: 405px;border-radius: 10%;">
					<h2 style="text-align: center;">Sadiqul Islam Pappu</h2>
					<h3 style="text-align: center;">B.Sc in CSE</h3>
					<h3 style="text-align: center;">Daffodil International University</h3>
				
				</div>
				<div class="team"style="background-color: #EBEDEF;cursor: pointer;">
					<img src="../img/faruk.jpg" style="height: 300px;width: 405px;border-radius: 10%;">
					<h2 style="text-align: center;">Mohammad FaRuk</h2>
					<h3 style="text-align: center;">B.Sc in CSE</h3>
					<h3 style="text-align: center;">Daffodil International University</h3>
				</div>
				<div class="team" style="background-color: #EBEDEF;cursor: pointer;">
					<img src="../img/kismet.jpg" style="height: 300px;width: 405px;border-radius: 10%;">
					<h2 style="text-align: center;">Kismet Roy</h2>
					<h3 style="text-align: center;">B.Sc in CSE</h3>
					<h3 style="text-align: center;">Daffodil International University</h3>
				</div>
			</div>

			<script type="text/javascript" src="../js/contact.js"></script>


</body>
</html>