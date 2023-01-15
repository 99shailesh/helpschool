<html>
<head>
	<title>
		helpschool
	</title>	
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
     <?php session_start();?>
     </head>
<body>
	<!--nav bar-->
	<section id="nav">
		<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#"><img style="border-radius:50%;" src="img/index.png">HelpSchool</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="login1.php">LOG-IN</a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          HOMES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#ABOUT-US">about-us</a>
          <a class="dropdown-item" href="#notes">notes-available</a>
          <a class="dropdown-item" href="#contact">contacts</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#start-with">other-links</a>
        </div>
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search2.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Trusts ..." aria-label="Search" name="search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
  </div> 
</section>


<!---->


<!--slider-->
<div id="slider">
<div id="headerslider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerslider" data-slide-to="0" class="active"></li>
    <li data-target="#headerslider" data-slide-to="1"></li>
    <li data-target="#headerslider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.jpg" class="d-block img-fluid">
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" class="d-block img-fluid">
    </div>
    <div class="carousel-item">
      <img src="img/banner3.jpg" class="d-block img-fluid">
  </div>
  <a class="carousel-control-prev" href="#headerslider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerslider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--end-->




<!--about-->
<section id="ABOUT-US">
  <div class="row">
    <div class="col-md-6">
    <div class="row1_about_us">
      <h2>ABOUT-US</h2>
      <div class="content">
      What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?
      </div>
      <button class="btn btn-primary">
        read-more:>>
      </button>
</div>
    </div>

    <div class="col-md-6 study-material">
      <div class="row2_about_us">
      <h2>study material available</h2>
      <p>pdf</p>
      <div class="progress">
        <div class="progress-bar" style="width:75%;">75%</div>
      </div>
      
      <p>refrence-book</p>
      <div class="progress">
        <div class="progress-bar" style="width:95%;">95%</div>
      </div>

      <p>lecture-notes</p>
      <div class="progress">
        <div class="progress-bar" style="width:50%;">50%</div>
      </div>
</div>
    </div>
    
  </div>
</section>
<!--end-->






<!--notes-->
<section id="notes">
  <div class="container1">
    <h3>FUNDS AVAILABLE FOR</h3>
    <div class="row notes">
       <div class="col-md-4 text-center">
          <div class="icon1">
           <i class="fa fa-desktop"></i>
           <h4>engineering</h4>
           <p>
            Dictation kills classroom time, and conceptual discussion is non-existent these days are bigger.
            Teacher shows there notes at LectureNotes teach freely in the classroom and discuss in the concept.
           </p>
         </div>
       </div>

       <div class="col-md-4 text-center">
        <div class="icon1">
          <i class="fa fa-flask"></i>
          <h4>scenince</h4>
          <p>
            On this week's show: why some Ph.D. programs are dropping the General Record Examination requirement for applicants and why DeepMind is teaching artificial agents to play a video game from 
            
          </p>
        </div>
       </div>

       <div class="col-md-4 text-center">
        <div class="icon1">
          <i class="fa fa-bar-chart"></i>
          <h4>economics</h4>
          <p>
            community of authors, who provide cutting-edge research, incisive scientific commentary, and insights on what's important to the scientific world. To learn more about how to get published in any of our journals 
          </p>
        </div>
       </div>
   </div>
  </div>
</section>

<!--end-->




















<!--contact-->

<!--
<section id="contact">
  <div class="container">
  <div class="row">
 <div class="col-md-3"></div>


    <div class="col-md-6">
       <h1>CONTACT US</h1>
      <form class="bg-light" onsubmit="return validation()" action="contact_action.php" method="POST">
        <div class="form-group">
        <input id="fname" type="text" class="form-control" placeholder="name" name="fname" style="margin-top:5%;" required>
         </br><p id="name"> </p>  
        <input id="femail" type="email" class="form-control" placeholder="email-id" name="femail" required>
        </br><p id="email"> </p>
        <textarea name="comment" placeholder="leave message/advice/complain here..." class="form-control" id="comment"></textarea> 
        <button type="submit" class="btn btn-primary btn1" autocomplete="off" onclick="myfunction()">SUBMIT</button>
        
        <p id="msg"></p> 
        </div>
      </form>
    </div>


    <div class="col-md-3"></div>
  </div>
</div>
<script>
     
        function myfunction()
        {
           <?php
           if(isset($_SESSION['msg']))
           {
              ?>
             var msg= '<?php echo $_SESSION["msg"];?>';
              <?php
           }
          ?>
            alert(msg);
        }      
</script>

</section>
      -->
      
<!--end-->



<!--contact us-->
<div class="container3">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  </div>
  <div class="row">
    <div class="column">
    <form action="contact_action.php" method="POST">
        <h4>First Name</h4>
        <input type="text" id="fname" name="uname" placeholder="Your name..">
        <h4>Email ID</h4>
        <input type="text" id="lname" name="email" placeholder="Your email ID..">
    </div>
    <div class="column">
        <h4>Subject</h4>
        <textarea id="subject" name="comment" placeholder="Write something.." style="height:170px"></textarea>
      
    </div>
    <button type="submit" class="btn btn-primary btn1" autocomplete="off" onclick="myfunction()">SUBMIT</button>
    </form>
  </div>
</div>
<script src="script.js"></script>
<script>
     
        function myfunction()
        {
           <?php
           if(isset($_SESSION['msg']))
           {
              ?>
             var msg= '<?php echo $_SESSION["msg"];?>';
              <?php
           }
          ?>
            alert(msg);
        }      
</script>
<!---->





<!--footer
<section id="start-with">
  <div class=container2>
    <div class="row">

      <div class="col-md-6 st">
        <h3 style="color:aliceblue">FALLOW</h3>
        <div class="icon1">
        <ul style="list-style-type:none">
          <li><i class="fa fa-facebook-square" style="color:aliceblue"></i><p style="color:aliceblue">facebook</p></li>
          <li><i class="fa fa-twitter-square" style="color:aliceblue"></i><p style="color:aliceblue">twitter</p></li>
          <li><i class="fa fa-instagram" style="color:aliceblue"></i><p style="color:aliceblue">instagram</p></li>
        </ul>
      </div>
      </div>

      <div class="col-md-6 nd">
        <h3 href="" style="color:aliceblue">HOME</h3>
        <ul style="list-style-type:none">
          <li><a href="#ABOUT-US" style="text-decoration:none; color:white">about us</a></li></br></br>
          <li><a href="#notes" style="text-decoration:none; color:white">notes-available</a></li></br></br>
          <li><a href="#contact" style="text-decoration:none; color:white">contact</a></li></br></br>

        </ul>
      </div>

     <div class="row"></div><hr style="color: white; border-width: 1px;"></div>
      
    </div>
         <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-4"><p style="color:white; text-align: center;">made by<br> @no-team</p></div>  
        </div>
  </div> 
</section>
--->
<!--end-->



  <!--footer-->
  <footer class="site-footer">
      <div class="container4">
        <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="footer_add">
            <h5>Quick Links</h5>
              <a href="">About Us</a>  &nbsp;
              <a href="">Contact Us</a> &nbsp;
              <a href="">Funds</a> &nbsp;
              <p class="">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Sonam</a>
          </div>

          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
            
          </div>  
        </div>
        <hr>
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            
            </p>
          </div>
        </div>
      </div>
</footer>




<!--smoothscroll-->
<script src="smooth-scroll.js"></script>
<script>
  var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>