<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
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
\\\\\\\\\\\\
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
  background-color: #f1f1f1;
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

form.example button, .button {
  float: left;
  width: 20%;
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
</style>
</head>
<?php
  session_start();
?>
<?php
$con=mysqli_connect("localhost","root","","helpschool");
if($con==false)
{
  echo "couldnot connect";
}

$query='select * from profile where fname="'.$_SESSION['usr'].'"';


$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$fname=$row['fname'];
$sc1d1=$row['sc1d1'];
$sc1d2=$row['sc1d2'];
$sc2d1=$row['sc2d1'];
$sc2d2=$row['sc2d2'];
$sc3d1=$row['sc3d1'];
$sc3d2=$row['sc3d2'];
$sc4d1=$row['sc4d1'];
$sc4d2=$row['sc4d2'];
$description=$row['description'];

$s1d1=$row['s1d1'];
$s1d2=$row['s1d2'];
$s2d1=$row['s2d1'];
$s2d2=$row['s2d2'];
$s3d1=$row['s3d1'];
$s3d2=$row['s3d2'];
$s4d1=$row['s4d1'];
$s4d2=$row['s4d2'];

$sc1d1=($sc1d1/$sc1d2)*100;
$sc2d1=($sc2d1/$sc2d2)*100;
$sc3d1=($sc3d1/$sc3d2)*100;
$sc4d1=($sc4d1/$sc4d2)*100;
?>
<body>
<section id="nav">
		<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#" style="text-decoration:none"><img style="border-radius:50%;" src="img/index.png">HelpScholar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
</section>



<div class="row">
    <div class="card">
    <ul class="list">
                <li><a href="profile.php" class="button">Profile</a></li>
                <li><a href="#application" class="button">Apply</a></li>
		          <li><form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Search for trust.." name="search2">
		        <button type="submit"><i class="fa fa-search"></i></button>
                </form></li>
      </ul>
      <br>
      <br>
    </div>      
</div>    






 <!--main row-->
<div class="row">
  <!--left small col-->
    <div class="w3-col w3-container m4">
        <div class="card">
            
            <div class="w3-display-container">
              <img src="img.png" style="width:45%" alt="Avatar" class="img">
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
           <br>
           <div class="upload-btn-wrapper">
             <button class="btn"> <i class="fa fa-cloud-upload" aria-hidden="true"></i>  Upload a profile pic</button>
  <input type="file" name="myfile" />
</div>

              <div class="w3-display-bottomleft w3-container w3-text-black"> </div>
              <?php
              if($fname=="")
               {
                 echo '<h2 style="margin-left:20px">eg: Jane Doe</h2>';
               }
              else
              {
                echo '<h2 style="margin-left:20px">'.$fname.'</h2>';  
              }
              ?>
              
             <div class="w3-container">
             <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
             <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
             <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
             <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
            </div>
             <hr>
              
             <p class="w3-large"><b><i class="fa fa-graduation-cap w3-margin-right w3-text-teal"></i>Exams</b></p>
             <p>10th</p>
             <div class="w3-light-grey w3-round-xlarge w3-small">
              <?php
              if(!($sc1d2))
                {
                  echo '<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>';
                }
              else
                {
                  echo '<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:'.$sc1d1.'%">'.$sc1d1.'%</div>';

                }
             ?>
             </div>
              <p>12th</p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <?php
                if(!($sc2d2))
                  {
                    echo '<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                          <div class="w3-center w3-text-white">eg:80%</div>';
                  }
                  else
                  {
                       echo '<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:'.$sc2d2.'%">
                        <div class="w3-center w3-text-white">'.$sc2d2.'%</div>';
            
                  }
                  ?>
              </div>
              <p>UG</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
            <?php
            if(!($sc2d2))
            {
             echo '<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">eg:75%</div>';
            }
            else
            {
              echo '<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:'.$sc3d1.'%">'.$sc3d1.'%</div>';
            }
            ?>
            </div>
          <p>PG</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
           <?php
          if(!($sc4d2))
          {  
           echo '<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">eg:50%</div>';
          }
          else
          {
            echo '<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:'.$sc4d1.'%">'.$sc4d1.'%</div>';
          }
          ?>
          </div>
        </div>
        </div>
            <br>
            <br>       
    </div>

<!--left small col-->










<!--right big col-->
  <div class="w3-col w3-container m8"> 
            <div class="card">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Junior Highschool:10th</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
          <?php 
          if($s1d1=="")
          {
            echo 'eg:Forever';
          }
          else
          {
            echo $s1d1.' to '.$s1d2;   
          }
          ?>
          </h6>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Highscool:12th</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
          <?php 
          if($s2d2=="")
          {
            echo 'eg:01-02-2018 to 01-02-2025';
          }
          else
          {
            echo $s2d1.' to '.$s2d2;   
          }
          ?>
          </h6>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Under Graduate:</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
          <?php 
          if($s3d2=="")
          {
            echo 'eg:01-02-2018 to 01-02-2025';
          }
          else
          {
            echo $s3d1.' to '.$s3d2;   
          }
          ?> 
         </h6>
          <hr>
        </div>
        <hr>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Post Graduate:</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
          <?php 
          if($s4d2=="")
          {
            echo 'eg:01-02-2018 to 01-02-2025';
          }
          else
          {
            echo $s4d1.' to '.$s4d2;   
          }
          ?> 
         </h6>
          <hr>
        </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>About Myself:</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-thumb-tack fa-fw w3-margin-right"></i>
          <?php
          if($s4d2=="")
          {
            echo 'I am student ...';
          }
          else
          {
            echo $description;   
          }
          ?>
          </h6>
        </div>  
               <br>
               <br>        
            </div>    
  </div>

<!--end of right col-->
</div>
 <!--end main row-->




<!--middel card (application)-->
<div class="row">
    <div class="card" style="height:800px; width:100%">
        <div class="w3-col w3-container m2"></div>

            <div class="w3-col w3-container m8">
                <div class="card" style="margin-bottom:5px" class="Application">
                 
                <h3 id="application"><u>Applications</u></h3>
                <br>
                <div class="row">
                    <div class="col-25" style="float:left"><label></label></div>
                    <div class="col-75"><input type="text" name="" id="" placeholder="trust name"></div>
                </div>     
                 <b><hr></b>
                <div class="row">
                    <div class="col-25" style="float:left"><label></label></div>
                    <div class="col-75"><input type="text" name="" id="" placeholder="eg:123abc@gmail.com"></div>
                </div>
                <b><hr></b>

                <div class="row">
                    <div class="col-25" style="float:left"><label</label></div>
                    <div class="col-75"><input type="text" name="" id="" placeholder="eg:10000Rs"></div>
                </div>
                  <hr>
                <div class="row">
                    <div class="col-75">
                        <textarea id="" name="" placeholder="Describe yourself...." rows="6"></textarea> 
                    </div>
                </div>    


                        <b><hr></b>
                <div class="row">
                    <div class="col-100">
                    <a href=" " class="button" style="float:left; padding-bootom:2px">APPLY</a>
                    </div>
                </div> 
                

                </div>
            <div class="w3-col w3-container m2"></div>
            <br>
            <br>
            <br>
            <br>
      </div>
      
      <style>
.w3-col w3-container
{
  margin-top:10%;
  text-align:center;
  margin-bottom:20px;
  margin-left:15%;
}  

.button
{
  border:none;
  padding: 10px;
  background: #4caf50;
  color: white;
  font-size: 17px;
  display:inline-block;
  cursor: pointer;
  width:100%;
  margin-bottom:20px;
  margin-right:30%;
}
.button:hover
{
  opacity:0.8;
}
  
.col-75 input[type=text]
{
  padding: 20px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 100%;
  margin:5px;
  height:30px;
}
.col-100 input[type="text"],
textarea {
    width:100%;
    padding: 0;  
    border: 1px solid #ccc;
    height:30px;
    }
</style>

</div>
<!--end(application)-->




<!--footer-->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find us on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <p>Powered by @helpschool</a></p>
</footer>
<!--footer ends-->
</body>
</html>
