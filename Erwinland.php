<?php

$host="localhost";
$user="root";
$password="";
$db="Erwinland";

$con=mysqli_connect("localhost","root","","Erwinland");

if(isset($_POST['username'])){
     $uname=$_POST['username'];
     $password=$_POST['password'];

     $sql="select * from Erwin where user='".$uname."'AND PASS='".$password."'
     limit 1";

     $result=mysqli_query($con,$sql);

     if(mysqli_num_rows($result)==1){
          echo "YOU HAVE SUCESSFULLY LOG IN";
          exit();

     }
     else{
       echo "ACCESS DENIED";
       exit();
     }
}

?>




<!DOCTYPE html>
<html>
<head>
   <title>Login Page</title>
   <link rel="stylesheet" type="text/css" href="Erwin.css">
   <link rel="stylesheet" type="text/css" href="normalize.css">
</head>
<body>
    <div class="main">
      <form method="POST" action="#">
        <img class="mySlides" src="images/erwin.jpg" alt="hisokapamore"/>
        <img class="mySlides" src="images/win.jpg" >
        <img class="mySlides" src="images/e1.jpg">
        <img class="mySlides" src="images/e2.jpg">
        <img class="mySlides" src="images/e3.jpg">
        <img class="mySlides" src="images/e5.jpg">
        <h1>MeycZoo</h1>
        <label for="us" >USERNAME:<br>
          <input type="text" name="username" id="us" placeholder="USERNAME"><br>
        <label for="pa" >PASSWORD:<br>
          <input type="password" name="password" id="pa" placeholder="PASSWORD"><br>
          <input type="submit" onclick="myFunction()" value="Submit">
       </form>
   </div>
<script>
function myFunction() {
  alert("Still under Construction");
}
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds



}

</script>
</body>
<footer>
@MeycZoo inc, LLC.<br>
All rights reserved 2019
</footer>


</html>
