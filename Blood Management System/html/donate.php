
<?php
session_start();
?><html lang="en">
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
    <br>
    <br>
     <div class="container">
        <div class="row">
            <div class="card col-3" style="border: 1px;">
                

                </div>
            
            <div class="card col-3" style="width:12rem;">
                <img class="card-img-top" src="../img/bloodcamp.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Doante in Blood Camp</h5>
                    <p class="card-text">doante Blood to save million's of life.One single life can be save by your donation :) </p>
                    <a href="showcamp.php" class="btn btn-primary">Doante in Camp</a>
            </div>
           </div>
            <div class="card col-3"  style="width:12rem;">
                 <img class="card-img-top" src="../img/bloodbank.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Donate in Blood Bank</h5>
                    <p class="card-text">Blood Bank are indeed useful when needed emergency blood so donate timely :) </p>
                    <a href="showbank.php" class="btn btn-primary">Donate in Blood bank</a>
                </div>
            </div>
            <div class="card col-3" style="border: 1px;">
                
            </div>
        </div>
    </div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>