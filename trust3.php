<!DOCTYPE html>
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
  background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(img/notes.jpeg);
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
  background-color: #008CBA;
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
  background-color: #008CBA;
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

<?php
session_start();
$con=mysqli_connect("localhost","root","","helpschool");
if($con==false)
{
  echo "couldnot connect";
}
$query='select * from t_profile_action where fname="'.$_SESSION['search'].'"';
unset($_SESSION['search']);

$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$fname='';
$tcontact='';
$tgmail='';
$amount='';
$t_type='';
$t_add='';
$description='';
if($row!=NULL)
{
$fname=$row['fname'];
$tcontact=$row['tcontact'];
$tgmail=$row['tgmail'];
$amount=$row['amount'];
$t_type=$row['t_type'];
$t_add=$row['t_add'];
$description=$row['description'];
}
?>

<section id="nav">
		<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#" style="text-decoration:none"><img style="border-radius:50%;  margin-top:4px;" src="img/index.png">HelpScholar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
</section>

<div class="row">
    <div class="card">
      <ul class="list">
                <li><a href="index.php" class="button" style="margin:2px;">BACK</a></li>
      </ul>
      <br>
      <br>
    </div>  
     
</div>    

<div class="row">
    <div class="w3-col w3-container m4">
        
            <div class="card">
                 <div class="w3-display-container">
                    <img src="img1.png" style="width:45%" alt="Avatar">
                    <div class="w3-display-bottomleft w3-container w3-text-black">  
                    </div>
                    <h2 style="margin-left:20px">
                      <?php
                         if($fname=="")
                         {
                           echo 'eg: Jane Doe';
                         }
                         else
                         {
                           echo $fname;
                         }                    
                      ?>
                    </h2>
                </div>
                <hr>
                    <p><i class="fa fa-handshake-o fa-fw w3-margin-right w3-large w3-text-teal" style="float:left; padding-right:5px"></i>
                    <?php
                      if($t_type=="")
                      {
                        echo 'eg.Jain';
                      }
                      else
                      {
                        echo $t_type;
                      }
                      ?>
                    </p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal" style="float:left; padding-right:5px"></i>
                    <?php
                      if($t_add=="")
                      {
                        echo 'eg.London, UK';
                      }
                      else
                      {
                        echo $t_add;
                      }
                      ?>
                    </p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal" style="float:left; padding-right:5px"></i>
                    <?php
                      if($tgmail=="")
                      {
                        echo 'eg.ex@mail.com';
                      }
                      else
                      {
                        echo $tgmail;
                      }
                      ?>
                    </p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal" style="float:left; padding-right:5px"></i>
                    <?php
                      if($tcontact=="")
                      {
                        echo 'eg.1224435534';
                      }
                      else
                      {
                        echo $tcontact;
                      }
                      ?>
                    </p>
            <hr>

            </div>
            
            <style>
               .w3-display-container img
                {
                    border:solid #4caf50 2px;
                    border-radius:50%;
                    margin-left:5px;
                }
                .w3-display-container
                {

                }

            </style>    
        
    </div>




    <div class="w3-col w3-container m8"> 
            <div class="card">
            <p><i class="fa fa-money fa-fw w3-margin-right w3-large w3-text-teal" style="float:left; padding-right:5px"></i>
            <?php
                      if($amount=="")
                      {
                        echo 'eg.50000';
                      }
                      else
                      {
                        echo $amount;
                      }
                      ?>
          </p>
            <hr>
            <h5 class="w3-opacity" style=""><b><u>About US:</u></b></h5><hr>
            <h6 class="w3-text-teal"><i class="fa fa-thumb-tack fa-fw w3-margin-right" style="float:left; padding-right:5px"></i></h6>
            <p>
              <?php
                      if($description=="")
                      {
                        echo 'we provide funds to womens only';
                      }
                      else
                      {
                        echo $description;
                      }
                      ?>
            </p>

            </div>
        
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
