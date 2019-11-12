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
  background-image:url("img/banner14.jpg");
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
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
  <form action="action_profile.php" method="post" >
  
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
    <label for="add">Adsress:</label>
    <textarea id="add" name="add"></textarea>
  </div>


  <div class="row">
    <h3>Education:</h3>
  </div>



  <div class="row">
  <h4>10th</h4>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="contact">Institue name</label>
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

  <h4>12th</h4>
  
  <div class="row">
    <div class="col-25">
      <label for="contact">Institue name</label>
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

  <h4>UG</h4>
  
  <div class="row">
    <div class="col-25">
      <label for="contact">Institue name</label>
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

  <h4>PG</h4>
  
  <div class="row">
    <div class="col-25">
      <label for="contact">Institue name</label>
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
      <input type="text" id="sc1d1" name="sc1d1" >
    </div>
    <div class="col-25">
      <label for="contact">Out-of:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc1d2" name="sc1d2">
    </div>
  </div>

  
  <div class="row">
    <div class="col-25">
      <label for="contact">12th score:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc2d1" name="sc2d1" >
    </div>
    <div class="col-25">
      <label for="contact">Out-of:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc2d2" name="sc2d2">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="contact">UG score:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc3d1" name="sc3d1" >
    </div>
    <div class="col-25">
      <label for="contact">Out-of:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc3d2" name="sc3d2">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="contact">PG score:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc4d1" name="sc4d1" >
    </div>
    <div class="col-25">
      <label for="contact">Out-of:</label>
    </div>
    <div class="col-25">
      <input type="text" id="sc4d2" name="sc4d2">
    </div>
  </div>



   <div class="row">
    <label for="discription">description:</label>
    <textarea id="description" name="description" placeholder="About Yourself....."></textarea>
  </div>

  <div class="row">
    <input type="submit" value="Submit" >
  </div>
  </form>
</div>
</div>

</body>
</html>
