<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css"/>
<style>
    body
        { 
          font-family: Arial, Helvetica, sans-serif;
            padding:0px;
            margin:0px;
            background-image:url("img/banner14.jpg");
        }
    
</style>    
</head>
<body>

  <div class="div1">
<form action="t_profile_action.php" method="post" style="width:60%; background-color:white;">
  <div class="container">
    
    <input type="text" placeholder="Enter Fullname" name="fname" style="width:100%"><br>

    
   <input type="text" placeholder="PHONE-NO:eg. 9594145019" name="tcontact" style="width:100%"><br>

    
    <input type="text" placeholder="GMAIL:eg. abc123@gmail.com" name="tgmail" style="width:100%"><br>

    
    <input type="text" placeholder="AMOUNT:eg: 30000Rs" name="amount" style="width:100%"><br>

    
    <input type="text" placeholder="TYPE:eg. Only for jains" name="t_type"style="width:100%"><br>

    <br>
    <br>
    <textarea type="text" placeholder="DESCRIPTION:About organisation.." name="description" style="border: 1px solid #ccc;; width:100%"></textarea>
        
    <button type="submit">Update Profile</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>
</div>
</body>
</html>
