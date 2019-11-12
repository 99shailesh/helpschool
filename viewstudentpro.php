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
$stname=$row['uname'];
$stamt=$row['amount'];
$email=$row['email'];
$stdescription=$row['description'];
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  padding:0px;
  margin:0px;
  background-image:url("geometric-1732847_1920.jpg");
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  margin:20px;
}

.button {
  background-color: #4caf50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 10%;
  padding: 10px;
  background: #4caf50;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  opacity:0.8;
}
 ul .button:hover 
 {
  opacity:0.8;
}
form.example::after {
  content: "";
  clear: both;
  display: table;
}
.list li
{
  list-style-type:none;
  float:right;
}
ul.list button,input,a
{
  display:block;
}

#nav
{
	postion:sticky;
	top:0;
	z-index: 10;	
}
.navbar-brand img
{
	height: 50px;
	width: 50px;
}
.navbar-nav li
{
	padding: 0 10px;
}
.nav li a
{
   float: right;
   text-align:left;
}
#nav ul li a:hover
{
	color: #007bff!important;
}
.navbar
{
	background: #fff;
}
.navbar-toggler
{
	border:none!important;
}
.nav-link
{
	color:#555!important;
	font-weight: 600;
	font-size: 16px;
}
.carousel-item img
{
	width:100%;
}

.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 1px solid #9400ff;
  color: #ffffff;
  background-color: #4caf50;
  padding: 8px 20px;
  font-size: 12px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>
</head>
<body>

<div class="row">
  <div class="card" style="height:600px">
      <div class="w3-col w3-container m2"></div>
      <div class="w3-col w3-container m8">
          <div class="card" style="margin-bottom:5px">
            <h3 id="#application"><u>Applications</u></h3>
              <div class="row">
                  <div class="col-25" style="float:left"><label>Name:</label></div>
                  <div class="col-75"><p id="name"><?php echo $stname;?></p></div>
              </div>     
               <b><hr></b>
              <div class="row">
                  <div class="col-25" style="float:left"><label>Amount:</label></div>
                  <div class="col-75" id="amount"><p><?php echo $stamt;?></p></div>
              </div>
              <b><hr></b>
              <div class="row">
                  <div class="col-25" style="float:left"><label>Description:</label></div>
                  <div class="col-75" id="description"><p><?php echo $stdescription;?></p></div>
              </div>
              
              <b><hr></b>
              <div class="row">
                  <div class="col-25" style="float:left"><label>email:</label></div>
                  <div class="col-75" id="description"><p><?php echo $email;?></p></div>
              </div>
              <b><hr></b>
            <ul style="list-style-type:none">

            <li><a
            <?php 
               echo 'href="grant_action.php?id='.$row['id'].'"';
            ?>
            class="button" style="float:left; padding-bootom:2px">Grant Scholarship</a></li>
            <li><a href="newtrust.php" class="button" style="float:left; padding-bootom:2px">BACK</a></li>
            <li><a
            <?php 
             echo 'href="student2_action.php?id='.$row['id'].'"';;
            ?> 
             class="button" style="float:left; padding-bootom:2px">VIEW PROFILE</a></li>

          </ul>
          <br>
          <br>
          <br>
          </div> 

      </div>
      <div class="w3-col w3-container m2"></div>
      
  </div>
</div>   
 <footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find us on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <p>Powered by @helpschool</a></p>
</footer>

</body>
</html>
