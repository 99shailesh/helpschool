<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap v5.2 Design Login Forms</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
<style>
  /*footer*/
  body {
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("cup-of-coffee-1280537_1920.jpg");
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
	letter-spacing:2px;
  text-decoration:none;
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
  margin-left:50%;
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
</head>
<body>


<div class="vh-100 d-flex justify-content-center align-items-center ">
            <div class="col-md-5 p-5 shadow-sm border rounded-5 border-primary bg-white">
                <h2 class="text-center mb-4 text-primary">UPDATE PROFILE</h2>
                <form action="t_profile_action.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" placeholder="Enter Fullname" name="fname" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" placeholder="GMAIL:eg. abc123@gmail.com" name="tgmail" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contact</label>
                        <input type="text" placeholder="PHONE-NO:eg. 9594145019" name="tcontact" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Amount</label>
                        <input type="text" placeholder="AMOUNT:eg: 30000Rs" name="amount" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Type</label>
                        <input type="text" placeholder="TYPE:eg. Only for jains" name="t_type" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <input type="text" placeholder="DESCRIPTION:About organisation.." name="description" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Address</label>
                        <input type="text" placeholder="adress" name="t_add" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">UPDATE</button>
                    </div>
                    <div class="d-grid">
                    <button type="button" class="btn btn-dark" style="margin-top:6px; width:30%; margin-left:40%;">Cancel</button>
                    </div>
                </form>
          
            </div>
        </div>






<!--
  <div class="div1">
<form action="t_profile_action.php" method="post" style="width:60%; background-color:white;">
  <div class="container">
    
    <input type="text" placeholder="Enter Fullname" name="fname" style="width:100%"><br>

    
   <input type="text" placeholder="PHONE-NO:eg. 9594145019" name="tcontact" style="width:100%"><br>

    
    <input type="text" placeholder="GMAIL:eg. abc123@gmail.com" name="tgmail" style="width:100%"><br>

    
    <input type="text" placeholder="AMOUNT:eg: 30000Rs" name="amount" style="width:100%"><br>

    
    <input type="text" placeholder="TYPE:eg. Only for jains" name="t_type"style="width:100%"><br>

    <br>
    <br>
    <textarea type="text" placeholder="DESCRIPTION:About organisation.." name="description" style="border: 1px solid #ccc;; width:100%"></textarea>
        
    <button type="submit">Update Profile</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>
</div>
-->

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

</body>
</html>
