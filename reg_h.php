<!DOCTYPE html>
<html>
<head>
	<title>reg form</title>
  
  
</head>
<script type="text/javascript" src="action.js"></script> 

<link rel="stylesheet" type="text/css" href="reg.css" />
<link rel="stylesheet" type="text/css" href="login.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
  body {
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("cup-of-coffee-1280537_1920.jpg");
}
</style>

<body>
    
  
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8" ">
      
<div class="div1">
<form onsubmit="return validate()" action="reg.php" method="post" style="background-color:white; width:60%;>
  
    <hr>
    <label for="uname"><b>User name</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname">

    <label for="email" ><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">

    <label  for="phone"><b>Phone No</b></label>
    <input type="text" placeholder="Enter phone" name="phone" id="phone">

    <label for="psw" ><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw">

    <label for="psw_r"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_r" id="psw_r">
    
    <label for="User Type"><b>User Type</b></label>
    <select name="type" id="type" required>
    	<option vlaue="student" selected><b>Student</b></option>
    	<option value="trust"><b>Trust</b></option>
    </select>

   <div class="cheak">
   <label class="radio">
    <input type="radio" name="radio"> <div class="text"></div> 
    <span class="checkradio"></span>
   </label>
   </div>
   <hr>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
     
      <button type="submit" class="signupbtn">Sign Up</button>
      <br>
      <br>
      <button type="button" class="cancelbtn">Reset</button>
    </div>
  
</form>
</div>
</div>
<div class="col-2"></div>
</div>
</body>
<script type="text/javascript" src="action.js"></script>
</html>