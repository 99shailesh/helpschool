<?php
  session_start();
  if($_SESSION['type']=='Student')
  {
   header('location:student.php');
   exit();
  }
  else
  {
    header('location:newtrust.php');
    exit();
  } 
?>