<?php
session_start();
$con=mysqli_connect("localhost","root","","helpschool");
if($con==false)
{
	echo "couldnot connect";
}
$fname=$_POST["fname"];
$tcontact=$_POST["tcontact"];
$tgmail=$_POST["tgmail"];
$amount=$_POST["amount"];
$t_type=$_POST["t_type"];
$description=$_POST["description"];
$t_add=$_POST["t_add"];
$query="insert into t_profile_action values('$fname',$tcontact,'$tgmail',$amount,'$t_type','$description','$t_add')";
$result=mysqli_query($con,$query);
header('location:trust.php');
exit();
?>