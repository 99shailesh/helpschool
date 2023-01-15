<?php
  session_start();
  $_SESSION["search"]=$_POST["search"];
  echo $_SESSION["search"];
  header('location:trust3.php');
?>