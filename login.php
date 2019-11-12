<?php
session_start();
$con = mysqli_connect("localhost","root","","helpschool");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
 {
 	
 	$uname=$_POST["uname"];
 	$psw=$_POST["psw"];
 	$sql="select * from user where uname='$uname'";
 	$result=mysqli_query($con,$sql);
 	$row = mysqli_fetch_assoc($result);
 	if(mysqli_num_rows($result)>0)
 	{
		
		 $_SESSION["usr"]=$row['uname'];
		 $_SESSION["type"]=$row['type'];
		 
         Header('Location:dashbord.php');
         exit();
    }    
 	else
 	{
 		
 		Header('Location:htext.php');
 		exit();  
 		
 	}	

 }
?>