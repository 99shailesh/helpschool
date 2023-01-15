<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}
body
{
  font-family: Arial, Helvetica, sans-serif;
  padding:0px;
  margin:0px;
  background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(img/notes.jpeg);
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=date] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=submit]{
  width: 50%;
  padding: 12px;
  margin-top:50px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
  width: 100%;
}

input[type=submit],input[type=file]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-top:5px; 
}

.box
{
  border:solid #00ffd8 1px;
  border-radius: 5px;
  background-color: #778899;
  width:80%;
  text-align: center;
  margin-left: 10%; 
  margin-top:5px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
	margin-left:40%;
	background-color: #4CAF50;
	
}





.site-footer
  {
	background-color:#26272b;
	padding:45px 0 20px;
	font-size:15px;
	line-height:24px;
	color:#737373;
	margin-top: 30px;
  }
  .site-footer hr
  {
	border-top-color:#bbb;
	opacity:0.5
  }
  .site-footer hr.small
  {
	margin:20px 0
  }
  .site-footer h5
  {
	color:#fff;
	font-size:25px;
	text-transform:uppercase;
	margin-top:5px;
	letter-spacing:2px
  }
  .site-footer a
  {
	color:#737373;
	font-size: 20px;
	margin-right:25px;
  }
  .site-footer a:hover
  {
	color:#3366cc;
	text-decoration:none;
  }
 
  .site-footer .social-icons
  {
	text-align:right
  }
  .site-footer .social-icons a
  {
	width:40px;
	height:40px;
	line-height:40px;
	margin-left:6px;
	margin-right:0;
	border-radius:100%;
	background-color:#33353d
  }
  .copyright-text
  {
	margin:0
  }
  @media (max-width:991px)
  {
	.site-footer [class^=col-]
	{
	  margin-bottom:30px
	}
  }
  @media (max-width:767px)
  {
	.site-footer
	{
	  padding-bottom:0
	}
	.site-footer .copyright-text,.site-footer .social-icons
	{
	  text-align:center
	}
  }
  .social-icons
  {
	padding-left:0;
  margin-right: 20%;
	list-style:none
  }
  .social-icons li
  {
	display:inline-block;
	margin-bottom:4px
  }
  .social-icons li.title
  {
	margin-right:15px;
	text-transform:uppercase;
	color:#96a2b2;
	font-weight:700;
	font-size:13px
  }
  .social-icons a{
	background-color:#eceeef;
	color:#818a91;
	font-size:16px;
	display:inline-block;
	line-height:44px;
	width:44px;
	height:44px;
	text-align:center;
	margin-right:8px;
	border-radius:100%;
	-webkit-transition:all .2s linear;
	-o-transition:all .2s linear;
	transition:all .2s linear
  }
  .social-icons i{
	margin-top:25%;
  }
  .footer_add,.copyright-text{
	margin-left:21%;
  }

  .social-icons a:active,.social-icons a:focus,.social-icons a:hover
  {
	color:#fff;
	background-color:#29aafe
  }
  .social-icons.size-sm a
  {
	line-height:34px;
	height:34px;
	width:34px;
	font-size:14px
  }
  .social-icons a.facebook:hover
  {
	background-color:#3b5998;
	
  }
  .social-icons a.twitter:hover
  {
	background-color:#00aced
  }
  .social-icons a.linkedin:hover
  {
	background-color:#007bb6
  }
  .social-icons a.dribbble:hover
  {
	background-color:#ea4c89
  }
  @media (max-width:767px)
  {
	.social-icons li.title
	{
	  display:block;
	  margin-right:0;
	  font-weight:600
	}
  }
  a{
    text-decoration:none;
  }
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  <br>
  <br>
  <br>
  <br>
  <div class="box">
<div class="container">
  <form action="s_action_profile.php" method="post" >
  
  <div class="row">
    <div class="col-25">
     
    </div>  
  </div>
 
  <div class="row">
    <h3>Personal Info:</h3>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Full Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="fname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="contact">Contact</label>
    </div>
    <div class="col-75">
      <input type="text" id="contact" name="contact" placeholder="eg:9146464647">
    </div>
  </div>
  <div class="row">
    
    <div class="col-25"><label for="add">Adsress:</label></div>
    <div class="col-75">
    <textarea id="add" name="add"></textarea>
    </div>
  </div>


  <div class="row">
    <h3>Education:</h3>
  </div>



  <div class="row">
  </div>
  <div class="row">
    <div class="col-25">
      <label for="contact">Institue name 10th</label>
    </div>
    <div class="col-75">
      <input type="text" id="school1" name="school1" placeholder="eg:cambridge school">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="contact">from</label>
    </div>
    <div class="col-25">
      <input type="date" id="s1d1" name="s1d1" placeholder="eg:12/05/2009">
    </div>
    <div class="col-25">
      <label for="contact">Up-To</label>
    </div>
    <div class="col-25">
      <input type="date" id="s1d2" name="s1d2" placeholder="eg:05/12/2009">
    </div>
  </div>

  
  
  <div class="row">
    <div class="col-25">
      <label for="contact">Institue name 12th</label>
    </div>
    <div class="col-75">
      <input type="text" id="school2" name="school2" placeholder="eg:cambridge school">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="contact">from</label>
    </div>
    <div class="col-25">
      <input type="date" id="s2d1" name="s2d1" placeholder="eg:12/05/2009">
    </div>
    <div class="col-25">
      <label for="contact">Up-To</label>
    </div>
    <div class="col-25">
      <input type="date" id="s2d2" name="s2d2" placeholder="eg:05/12/2009">
    </div>
  </div>

  
  
  <div class="row">
    <div class="col-25">
      <label for="contact">Institue name UG</label>
    </div>
    <div class="col-75">
      <input type="text" id="school3" name="school3" placeholder="eg:cambridge school">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="contact">from</label>
    </div>
    <div class="col-25">
      <input type="date" id="s3d1" name="s3d1" placeholder="eg:12/05/2009">
    </div>
    <div class="col-25">
      <label for="contact">Up-To</label>
    </div>
    <div class="col-25">
      <input type="date" id="s3d2" name="s3d2" placeholder="eg:05/12/2009">
    </div>
  </div>


  
  <div class="row">
    <div class="col-25">
      <label for="contact">Institue name PG</label>
    </div>
    <div class="col-75">
      <input type="text" id="school4" name="school4" placeholder="eg:cambridge school">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="contact">from</label>
    </div>
    <div class="col-25">
      <input type="date" id="s4d1" name="s4d1" placeholder="eg:12/05/2009">
    </div>
    <div class="col-25">
      <label for="contact">Up-To</label>
    </div>
    <div class="col-25">
      <input type="date" id="s4d2" name="s4d2" placeholder="eg:05/12/2009">
    </div>
  </div>


  <div class="row">
    <h3>Exams:</h3>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="contact">10th score:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc1d1" name="sc1d1" placeholder="75">
    </div>
    <div class="col-25">
      <label for="contact">Out-of:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc1d2" name="sc1d2" placeholder="100">
    </div>
  </div>

  
  <div class="row">
    <div class="col-25">
      <label for="contact">12th score:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc2d1" name="sc2d1" placeholder="75">
    </div>
    <div class="col-25">
      <label for="contact">Out-of:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc2d2" name="sc2d2" placeholder="100">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="contact">UG score:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc3d1" name="sc3d1" placeholder="75">
    </div>
    <div class="col-25">
      <label for="contact">Out-of:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc3d2" name="sc3d2" placeholder="100">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="contact">PG score:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc4d1" name="sc4d1" placeholder="75">
    </div>
    <div class="col-25">
      <label for="contact">Out-of:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc4d2" name="sc4d2" placeholder="100">
    </div>
  </div>



   <div class="row">
    <div class="col-25"><label for="discription">description:</label></div>
    <div class="col-75">
    <textarea id="description" name="description" placeholder="About Yourself....."></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" >
  </div>
  </form>
</div>
</div>



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
</footer>

</body>
</html>
