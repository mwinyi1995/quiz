<?php
session_start();
require_once("database_connection.php");
$_SESSION['message']="";

if(isset($_POST['submit'])>0){
$dir="document/";
$radio1=$_POST['radio1'];

$comment=$_POST['comment'];
$number=$_POST['number'];

$count=count($_FILES['file']['name']);

$sql="insert into question(qn_id,qn_radio1,qn_number,qn_comment)values";
$sql.="(null,'$radio1','$number','$comment')";
$sql=rtrim($sql,",");
$query=mysqli_query($conn,$sql);

if($query==TRUE){
	$sql="SELECT * from question order by qn_id desc limit 1 OFFSET 0";
	$query=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_assoc($query);
	$id=$rows['qn_id'];

	$sql="insert into files(file_id,qn_id,file_attachment)values";
    for($i=0;$i<$count;$i++){
    $file=$_FILES['file']['name'][$i];	
    @move_uploaded_file($_FILES['file']['tmp_name'][$i],$dir.$file);
 $sql.="(null,'$id','$file'),";
}

$sql=rtrim($sql,",");

if(mysqli_query($conn,$sql)==TRUE){
	
  echo"<script>alert('Thank you for your time to complete question_24');window.location='question_25.php'</script>";
 
  }
   
else{
  echo mysqli_error($conn);

}   

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
	<title>Question_24</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="rajabu/w3.css">
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.min.css">
      <link rel="stylesheet" href="quiz.css">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
</head>

<body class="w3-tangerine">
	<div class="w3-container">
		<div class="w3-section w3-padding w3-round-large w3-card-4">
	<div class="w3-section  w3-card-16">
	<form name="quiz-form" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
		<input type="hidden" name="number" value='24'>
		<p><badge  class="w3-badge w3-teal"><b>24</b></badge></p>



		<!--div for introduction-->
		<div class="w3-row w3-padding w3-animate-zoom">
			<div class="w3-col s2 m2 l2"><b>&nbsp</b></div>
			<div class="w3-col s10 m10 l10 w3-badge w3-round w3-teal" style="padding:3px;width:60%">
				<div class="w3-container w3-card-4 " style="border:1px solid white"><label><b>Limitations to Scope</b></label>

				</div>
				</div>
             </div>
         
             <!--end div for introduction-->

<!--div for question-->
<div class="w3-row  w3-padding-16 w3-round-large">

<div id="data" class="w3-col s12 m12 l12 " style="padding-left:15px;">
<p><b>Are the time frames for completion of the work ?

	    <input class="w3-radio" type="radio" name="radio1" value="yes" id="checked" >yes
			<input class="w3-radio" type="radio" name="radio1" value="no" id="checked1" >No
			<input class="w3-radio" type="radio" name="radio1" value="na" id="checked2" >NA</b>
			<label id="radio1_error" class="w3-animate-zoom"></label></p>


<!---comment & file------>
<div class="w3-section">
	<label><b>comment:</b></label><br/>
	<textarea rows="5" cols="40" class="w3-round w3-border" placeholder="comment is optional" name="comment"></textarea>


</div>


<div class="w3-section">
	<label><b>Attachment:</b></label>
<input id="file" class="w3-input w3-border w3-round" type="file" name="file[]"  onchange="myFunction()" multiple>
<br/>
<div  style="width:65%;outline:none" id="demo" ></div>

</div>
<!---end comment & file----->
    


		<button class="w3-button w3-round w3-teal  w3-padding" name="submit"><b>Next</b></button>
		<br/>
		<br>
		<br/>



</div>


</div>

<!--end div for question--->
</div>
</div>
</form>
</body>
</html>
<script>
	//************collect data from the form*****************//
var radio1 = document.forms['quiz-form']['radio1'];

//***id for error message********//
var radio1_error=document.getElementById("radio1_error");

function validate(){
if(radio1.value == ""){
   radio1_error.textContent="please select correct answer";
    
     radio1_error.style.color="red";
      
  return false;

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



function myFunction(){
  var x = document.getElementById("file");
  var txt = "";
  if ('files' in x) {
    if (x.files.length == 0) {
      txt = "Select one or more files.";
    } else {
      for (var i = 0; i < x.files.length; i++) {
       // txt += "<br><strong>" + (i+1) + ". file</strong><br>";
        var file = x.files[i];
        if ('name' in file) {
          txt += "<div class='w3-border w3-teal w3-light-grey w3-round w3-padding' style='outline:none'>" + file.name + "</div><br>";

        }
        if ('size' in file) {
         // txt += "size: " + file.size + " bytes <br>";
        }
      }
    }
  } 
  else {
    if (x.value == "") {
      txt += "Select one or more files.";
    } else {
      txt += "The files property is not supported by your browser!";
      txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
    }
  }
  document.getElementById("demo").innerHTML = txt+'<br/>';
}



</script>























































































