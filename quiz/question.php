<?php
session_start();
require_once("database_connection.php");
$_SESSION['message']="";

if(isset($_POST['submit'])>0){

$username=$_POST['username'];

$password=$_POST['password'];


$sql="insert into user(qn_id,username,password)values";
$sql.="(null,'$username','$password')";
$sql=rtrim($sql,",");

if(mysqli_query($conn,$sql)==TRUE){
	
  echo"<script>alert('welcome to the survey:$username');window.location='question_1.php'</script>";
 
  }
   
else{
  echo mysqli_error($conn);

}   

}
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="rajabu/w3.css">
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.min.css">
      <link rel="stylesheet" href="quiz.css">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
</head>

<body class="w3-tangerine">
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
  <div class="container w3-card-4 w3-padding w3-margin w3-round ">
	<div class="w3-section w3-border w3-margin w3-light-grey">

<p class="w3-center w3-text-grey"><b>WELCOME TO MY SHORT SURVEY</b></p>

  </div>
  <div class="w3-container">
    

   
  <form action="" name="quiz-form" method="POST" onsubmit="return validate()">
  <input class="w3-input w3-border" type="text" name="username" placeholder="Enter username"><label id="user_error"></label><br/>
  <input class="w3-input w3-border" type="password" name="password" placeholder="what your favorite game">
  <label id="pass_error"></label> <br/>
  <input class="w3-input w3-border" type="password" name="repassword" placeholder="what your favorite game">
  <label id="repass_error"></label><br/>

  <button class="w3-button w3-grey w3-round w3-opacity" type="submit" name="submit"><b>Enter</b></button>
</form>

</div>
<script>
  /*****collect data from the forms*****/
var username=document.forms['quiz-form']['username'];
var password=document.forms['quiz-form']['password'];
var repassword=document.forms['quiz-form']['repassword'];



var user_error=document.getElementById('user_error');
var pass_error=document.getElementById('pass_error');
var repass_error=document.getElementById('repass_error');



username.addEventListener("blur",verifyUser,true);
password.addEventListener("blur",verifyPass,true);
repassword.addEventListener("blur",verifyRepass,true);
function validate(){
if(username.value == ""){
  user_error.textContent="please add username";
  user_error.style.color="red";
  return false;
}
if(password.value == ""){
  pass_error.textContent="please add password";
  pass_error.style.color="red";
  return false;
}
if(repassword.value == ""){
  repass_error.textContent="please  retype password";
  repass_error.style.color="red";
  return false;
}
if(password.value != repassword.value){
 repass_error.textContent="Two password doesn't match";
  repass_error.style.color="red";
  return false;


}



}
function verifyUser(){
  if(username.value != ""){
    user_error.innerHTML="";
    user_error.style.color="green";
    return true;
  }
}


function verifyPass(){
  if(password.value != ""){
    pass_error.innerHTML="";
    pass_error.style.color="green";
    return true;
  }
}

function verifyRepass(){
  if(repassword.value != ""){
    repass_error.innerHTML="";
    repass_error.style.color="green";
    return true;
  }
}

</script>


