<?php
session_start();
require_once("database_connection.php");

if(isset($_POST['submit'])>0){

$radio1=$_POST['radio1'];
$comment=$_POST['comment'];
$number=$_POST['number'];
$partner=$_POST['partner'];
$risk=$_POST['risk'];

$sql="insert into question(qn_id,qn_radio1,qn_select1,qn_select2,qn_number,qn_comment)values";
$sql.="(null,'$radio1','$partner','$risk','$number','$comment')";
$sql=rtrim($sql,",");
$query=mysqli_query($conn,$sql);

if(mysqli_query($conn,$sql)==TRUE){
	
  echo"<script>alert('Congratulations!! we finish');window.location='conclusion.php'</script>";
 
  }
   
else{
  echo mysqli_error($conn);

}   

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Partner Conclusion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="rajabu/w3.css">
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.min.css">
   <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
   </head>
    <style type="text/css">
   .w3-tangerine {
  font-family:century gothic;
}	
input[type="text"]{
	outline:none;
	height:40px;
	width:60px;
	font-weight:bold;
	padding-left:15px;
}

input[type="file"]{
outline:none;
	width:50%;	
}
textarea{
	outline:none;
	padding:2px 10px;

}

button{
	outline:none;
}


select{
	outline:none;
}
</style>
<body class="w3-tangerine">
	<div class="w3-container">
		<div class="w3-section w3-padding w3-round-large w3-card-4">
	    
	<form name="quiz-form" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
		<input type="hidden" name="number" value='27'>
		<p><badge  class="w3-badge w3-teal"><b>27</b></badge></p>
		<div class="w3-tag w3-teal w3-margin" style="padding:3px">
		<container class="w3-tag w3-round w3-white" style="border:2px solid white"><b>Conclusion</b></container>
	</div>
		
		<div class="w3-tag w3-teal w3-round" style="padding:3px;width:70%">
<div class="w3-tag w3-round w3-teal" style="border:1px solid white;width:100%"><label><b>Partner Conclusion</b></label>
</div>
</div>


           <div class="w3-container">

			<div class="w3-container" style="margin-left:110px">
			<p><b>Partner</b></p>
			<select class='w3-select w3-border w3-round' name="partner" style="width:50%">
				<option value="partner" disabled selected>select partner</option>
				<option value="partner1">first-partner</option>
				<option value="partner2">second-partner2</option>
				<option value="partner3">third-partner3</option>
			</select><br/>
			<label id="partner_error"></label>

      <div class="w3-section" style="margin-left:-1px">
	<label><b>comment:</b></label><br/>
	<textarea rows="5" cols="40" class="w3-round w3-border" placeholder="comment is optional" name="comment"></textarea>
	<br/>
    <label id="comment_error"></label>
</div>


		
   <p><b>Based on my preliminary knowledge of the prospective client and any factors outlined above.</b></p>
     <p><b>prospective client should be rated as:</b></p>
            <select class='w3-select w3-border w3-round' name="risk" style="width:50%">
            	<option value="risk" disabled selected>please rate risk level</option>
				<option value="High risk">High risk</option>
				<option value="Moderate risk">Moderate risk</option>
				<option value="Low risk">Low risk</option>
			</select><br/>
			<label id="risk_error"></label>

			<p>1. Iam satisfied there are no prohibitions that would prevent the firm or any member</p>
			<p>of the engagement team from performing this assignment.</p>
				<p>2. Where significant threats  to our independence have been identified,existing,safeguards</p>
				<p>are in the place to eliminate or reduce such threats to an acceptance level</p>
				<p>3. I am not aware of any factors that would impair our independence or appearance of</p>
				<p>independence</p>
				<p>4. I am satisfied that we have obtained sufficient information to assess whether or not to</p>
				<p>accept this engagement.</p>
<p>
<b>In my opinion, we should &nbsp <b>accept</b><input class="w3-radio" type="radio" name="radio1" value="accept" id="checked">  or &nbsp <b>decline</b><input class="w3-radio" type="radio" name="radio1" value="decline" id="checked1"> this engagement
		</b></p>
		<label id="radio1_error"></label>
			</div>
		</div>



<div class="w3-section" style="margin-left:135px">
	<label><b>Date</b></label>
<input class="w3-input w3-border w3-round" type="date" name="date" id="datepicker1" style="width:50%">
<label id="date_error"></label>

</div>

    


		<button class="w3-button w3-round w3-teal" style="margin-left:600px" name="submit"><b>submit</b></button>
		<br/>
		<br>
		<br/>
	</div>
</div>
</div>
</form>
</body>
</html>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script>
	//************collect data from the form*****************//
var radio1 = document.forms['quiz-form']['radio1'];
var partner = document.forms['quiz-form']['partner'];
var risk = document.forms['quiz-form']['risk'];
var date = document.forms['quiz-form']['date'];

//***id for error message********//
var radio1_error=document.getElementById("radio1_error");
var partner_error=document.getElementById("partner_error");
var risk_error=document.getElementById("risk_error");
var date_error=document.getElementById("date_error");


//*****add event listener for the value that is not empty*****//
partner.addEventListener("blur",verifyPartner,true);
risk.addEventListener("blur",verifyRisk,true);
date.addEventListener("blur",verifyDate,true);

function validate(){

if(partner.value == "partner"){
   partner_error.textContent="please choose your partner";
    
     partner_error.style.color="red";
      
  return false;

}
if(risk.value == "risk"){
   risk_error.textContent="please identify risk level";
    
     risk_error.style.color="red";
      
  return false;

}
if(radio1.value == ""){
   radio1_error.textContent="please choose your answer";
    
     radio1_error.style.color="red";
      
  return false;

}

if(date.value == ""){
   date_error.textContent="please allocate date";
    
     date_error.style.color="red";
      
  return false;

}

} 

function verifyPartner(){
if(partner.value != "partner"){
	partner_error.innerHTML="";
	return true;

}
} 

function verifyRisk(){
	if(risk.value != "risk"){
		risk_error.innerHTML="";
		return true;
	}
}

function verifyDate(){
 if(date.value != ""){
 	date_error.innerHTML="";
 	return true;
 }



}

$(document).ready(function(){
$("#checked").click(function(){

	$("#radio1_error").hide();
});


});

$(document).ready(function(){
$("#checked1").click(function(){

	$("#radio1_error").hide();
});


});



$(document).ready(function(){
$("#checked2").click(function(){

	$("#radio1_error").hide();
});


});




</script>



















