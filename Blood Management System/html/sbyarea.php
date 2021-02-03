<html>
<head>
	<html lang="en">
	<title>Search</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
  <div style="height: 75px;width:100% ; background-color:red;">
        <button type="button" style="margin-left: 85%; margin-top: 10px;" class="btn btn-light">Edit profile</button>
        <button type="button" style="margin-left: 10px; margin-top: 10px;"class="btn btn-light"><a href="../index.php" style="text-decoration: none; color:black;">logout</a></button>
    </div>

  <div class="container">
      <h2 class="ltext">Search Donar</h2>
      <form>
        
        <div class="form-group">
    <label for="exampleFormControlSelect1">Blood type select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option value="a+">A RhD positive (A+)</option>
        <option value="a-">A RhD negative (A-)</option>
        <option value="b+">B RhD positive (B+)</option>
        <option value="b-">B RhD negative (B-)</option>
        <option value="oPositive">O RhD positive (O+)</option>
        <option value="oNegative">O RhD negative (O-)</option>
        <option value="abPositive">AB RhD positive (AB+)</option>
        <option value="abNegative">AB RhD negative (AB-)</option>
    </select>
  </div>
        <button type="button" class="btn btn-primary">Search</button>

      </form>
      
    </div>
</body>
</html>