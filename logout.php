<?php
session_start();
unset($_SESSION["usr"]);
unset($_SESSION["type"]);
unset($_SESSION["new_usr"]);
unset($_SESSION["msg"]);
unset($_SESSION["amsg"]);
header('location:htext.php');
?>