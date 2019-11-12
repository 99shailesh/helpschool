<?php
  session_start();
  $con=mysqli_connect("localhost","root","","helpschool");
  if($con==false)
  {
    echo "couldnot connect";
  }
  $id=$_GET['id'];
  $query='select * from  application where id = '.$_GET['id'];
  $result=mysqli_query($con,$query);
  $row = mysqli_fetch_array($result);
  $_SESSION['t_usr']=$row['uname'];
  header('location:student2.php');
?>