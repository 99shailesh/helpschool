<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6" >
  <div class="div1">
    <form action="login.php" method="post" style="background-color:white; width:60%">
        <div class="imgcontainer"  style="background-color:white; margin-top:20px"><img src="login.png" alt="Avatar" class="avatar"></div>
     

      
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" style="width:100%;" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" style="width:100%;" required>

            <button type="submit" style="width:100%">Login</button>

           <br>
           <br>
           <br>
      
           <button type="button" class="cancelbtn">RESET</button>
           <span class="psw">Not registerd <a href="reg_h.php">SIGN_UP?</a></span>
    </form>
           
    
 </div>
 </div>
 <div class="col-3"></div>
 </div>  
</div>
</body>
</html>
