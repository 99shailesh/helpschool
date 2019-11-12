<!DOCTYPE html>
<html>
<body>

<h2>Text Input</h2>

<form>
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">
</form>

<p id="car"> </p>
<p id="tot"> </p>
<p id="sold"> </p>
<?php
$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);
echo '<script> var array='.json_encode($cars).';</script>';
?>
<script>
var car = document.getElementById('car');
var tot = document.getElementById('tot');
var sold = document.getElementById('sold');
for (var i = 0; i < 4; i++) {
  (function(i) {
    setTimeout(function() {
      car.innerHTML = array[i][0].toString();
      tot.innerHTML = array[i][1].toString();
      sold.innerHTML = array[i][2].toString();
      console.log(array[i][0]);
      console.log(array[i][1]); 
      console.log(array[i][2]);
       beep();
    }, 10000*i)
  })(i);
  function beep()
  {
    alert("click ok to show next");
  }
}
/*
 (function(10) {
           setTimeout(function() {
           (function(10) {
           setTimeout(function() {
           car.innerHTML = array['name'];
           tot.innerHTML = array['amount'];
           sold.innerHTML = array['description'];
           console.log("cheak");
           beep();
           }, 10000*10)
           }(10);
     function beep()
     {
     alert("click ok to show next");
     }
           console.log("cheak");
           beep();
           }, 10000*10)
           }(10);
     function beep()
     {
     alert("click ok to show next");
     }

*/
</script>
</body>
</html>

