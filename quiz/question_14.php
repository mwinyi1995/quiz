<?php
session_start();
require_once("database_connection.php");
$_SESSION['message']="";

if(isset($_POST['submit'])>0){
$dir="document/";
//radio1=$_POST['radio1'];
$radio2=$_POST['radio2'];
$radio3=$_POST['radio3'];
$radio4=$_POST['radio4'];
$radio5=$_POST['radio5'];
$radio6=$_POST['radio6'];
$radio7=$_POST['radio7'];
$radio8=$_POST['radio8'];
$radio9=$_POST['radio9'];
$radio10=$_POST['radio10'];
$radio11=$_POST['radio11'];
$radio12=$_POST['radio12'];
$comment=$_POST['comment'];
$number=$_POST['number'];

$count=count($_FILES['file']['name']);
$sql="insert into question(qn_id,qn_radio2,qn_radio3,qn_radio4,qn_radio5,qn_radio6,qn_radio7,qn_radio8,qn_radio9,qn_radio10,qn_radio11,qn_radio12,qn_number,qn_comment)values";
$sql.="(null,'$radio2','$radio3' ,'$radio4','$radio5','$radio6','$radio7','$radio8','$radio9','$radio10','$radio11','$radio12','$number','$comment')";

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
	
  echo"<script>alert('Thank you for your time to complete question_14');window.location='question_15.php'</script>";
 
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
	<title>Question_14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="rajabu/w3.css">
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.min.css">
      <link rel="stylesheet" href="quiz.css">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
</head>

<body class="w3-tangerine">	
	<div class="w3-container">
		<div class="w3-section w3-padding w3-round-large w3-card-4">

		<form name="quiz-form" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
		<input type="hidden" name="number" value='14'>
		<p><badge  class="w3-badge w3-teal"><b>14</b></badge></p>



		<!--div for introduction-->
		<div class="w3-row w3-padding w3-animate-zoom">
			<div class="w3-col s2 m2 l2"><b>&nbsp</b></div>
			<div class="w3-col s10 m10 l10 w3-badge w3-round w3-teal" style="padding:3px;width:60%">
				<div class="w3-container " style="border:1px solid white"><label><b>Experties</b></label>

				</div>
				</div>
             </div>
             <br/>
             <br/>
             <!--end div for introduction-->


<!--div for question-->
<div class="w3-row w3-padding-16">

<div class="w3-col s12 m12 l12  w3-round" style="padding-left:15px">
  <p><b>Identify and document any existing prohibitions(those threats to independence for which there are no adequate safeguard,such as):</b>
        </p>
                
                  
<p>        
            <b>(a)</b>Acceptance of significant gifts or hospitality from the
			client;
	        <input class="w3-radio" type="radio" name="radio2" value="yes" id="checked3">yes
			<input class="w3-radio" type="radio" name="radio2" value="no" id="checked4">No
			<input class="w3-radio" type="radio" name="radio2" value="na" id="checked5">NA
            <label id="radio2_error" class="w3-animate-zoom"></label>
</p>

<p>         <b>(b)</b>Close business relationship with client;
            <input class="w3-radio" type="radio" name="radio3" value="yes" id="checked6">yes
			<input class="w3-radio" type="radio" name="radio3" value="no" id="checked7">No
			<input class="w3-radio" type="radio" name="radio3" value="na" id="checked8">NA
            <label id="radio3_error" class="w3-animate-zoom"></label>
</p>

<p>         <b>(c)</b>Family and personal relationship with client;
            <input class="w3-radio" type="radio" name="radio4" value="yes" id="checked9">yes
			<input class="w3-radio" type="radio" name="radio4" value="no" id="checked10">No
			<input class="w3-radio" type="radio" name="radio4" value="na" id="checked11">NA
            <label id="radio4_error" class="w3-animate-zoom"></label>
</p>

<p>         <b>(d)</b>Fee quote considerably less than market price (unless
			documentation will provide evidence that all applicable
		    standards have been met);<br/>
	        <input class="w3-radio" type="radio" name="radio5" value="yes" id="checked12">yes
			<input class="w3-radio" type="radio" name="radio5" value="no" id="checked13">No
			<input class="w3-radio" type="radio" name="radio5" value="na" id="checked14">NA
            <label id="radio5_error" class="w3-animate-zoom"></label>

</p>
                
 <p>        <b>(e)</b>Financial interest in the client;
            <input class="w3-radio" type="radio" name="radio6" value="yes" id="checked15">yes
			<input class="w3-radio" type="radio" name="radio6" value="no" id="checked16">No
			<input class="w3-radio" type="radio" name="radio6" value="na" id="checked17">NA
            <label id="radio6_error" class="w3-animate-zoom"></label>,and
 </p>


 <p>        <b>(f)</b>Recent employment within the prescribed period(or
			 anticipated future employment)with the client,serving as
			 officer, director or employee with significant influence;
<br/>
            <input class="w3-radio" type="radio" name="radio7" value="yes" id="checked18">yes
			<input class="w3-radio" type="radio" name="radio7" value="no" id="checked19">No
			<input class="w3-radio" type="radio" name="radio7" value="na" id="checked20">NA
		    <label id="radio7_error" class="w3-animate-zoom"></label>

</p>

 <p>        <b>(g)</b>Loans and guarantees to/from the client;
            <input class="w3-radio" type="radio" name="radio8" value="yes" id="checked21">yes
			<input class="w3-radio" type="radio" name="radio8" value="no" id="checked22">No
			<input class="w3-radio" type="radio" name="radio8" value="na" id="checked23">NA
            <label id="radio8_error" class="w3-animate-zoom"></label>
 </p>

 <p>        <b>(h)</b>Making journal entries or accounting classifications
			   without first obtaining the approval of management;
            <input class="w3-radio" type="radio" name="radio9" value="yes" id="checked24">yes
			<input class="w3-radio" type="radio" name="radio9" value="no" id="checked25">No
			<input class="w3-radio" type="radio" name="radio9" value="na" id="checked26">NA
            <label id="radio9_error" class="w3-animate-zoom"></label>
 </p>

     <p>        <b>(i)</b>Performance of management functions for the client;
            <input class="w3-radio" type="radio" name="radio10" value="yes" id="checked27">yes
			<input class="w3-radio" type="radio" name="radio10" value="no" id="checked28">No
			<input class="w3-radio" type="radio" name="radio10" value="na" id="checked29">NA
            <label id="radio10_error" class="w3-animate-zoom"></label>,and
 </p>

         <p>       <b>(j)</b>Provision of non-assurance services such as corporate
			        finace, legal services that involve dispute resolution,or
			         valuation services involving the valuation of matters
                    material to the financial statement
            <input class="w3-radio" type="radio" name="radio11" value="yes" id="checked30">yes
			<input class="w3-radio" type="radio" name="radio11" value="no" id="checked31">No
			<input class="w3-radio" type="radio" name="radio11" value="na" id="checked32">NA
            <label id="radio11_error" class="w3-animate-zoom"></label>
 </p>

<br/>

<!---comment & file------>
<p><b>Are you satisfied that there are no existing prohibitions that
would preclude the firm or any staff member from performing the engagement?</b><br/>
			<input class="w3-radio" type="radio" name="radio12" value="yes" id="checked33">yes
			<input class="w3-radio" type="radio" name="radio12" value="no" id="checked34">No
			<input class="w3-radio" type="radio" name="radio12" value="na" id="checked35">NA
            <label id="radio12_error" class="w3-animate-zoom"></label></p>




<div class="w3-section">
	<label><b>comment:</b></label><br/>
	<textarea rows="5" cols="40" class="w3-round w3-border" placeholder="comment is optional" name="comment"></textarea>


</div>

<br/>
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
//var radio1 = document.forms['quiz-form']['radio1'];
var radio2=document.forms['quiz-form']['radio2'];
var radio3=document.forms['quiz-form']['radio3'];
var radio4=document.forms['quiz-form']['radio4'];
var radio5=document.forms['quiz-form']['radio5'];
var radio6=document.forms['quiz-form']['radio6'];
var radio7=document.forms['quiz-form']['radio7'];
var radio8=document.forms['quiz-form']['radio8'];
var radio9=document.forms['quiz-form']['radio9'];
var radio10=document.forms['quiz-form']['radio10'];
var radio11=document.forms['quiz-form']['radio11'];
var radio12=document.forms['quiz-form']['radio12'];
//************collect all id for errors message*********************//
//var radio1_error=document.getElementById("radio1_error");
var radio2_error=document.getElementById("radio2_error");
var radio3_error=document.getElementById("radio3_error");
var radio4_error=document.getElementById("radio4_error");
var radio5_error=document.getElementById("radio5_error");
var radio6_error=document.getElementById("radio6_error");
var radio7_error=document.getElementById("radio7_error");
var radio8_error=document.getElementById("radio8_error");
var radio9_error=document.getElementById("radio9_error");
var radio10_error=document.getElementById("radio10_error");
var radio11_error=document.getElementById("radio11_error");
var radio12_error=document.getElementById("radio12_error");


function validate(){

if(radio2.value == ""){
   radio2_error.textContent="please choose your answer";
    
     radio2_error.style.color="red";
      
  return false;

}


if(radio3.value == ""){
   radio3_error.textContent="please choose your answer";
    
     radio3_error.style.color="red";
      
  return false;

}

if(radio4.value == ""){
   radio4_error.textContent="please choose your answer";
    
     radio4_error.style.color="red";
      
  return false;

}

if(radio5.value == ""){
   radio5_error.textContent="please choose your answer";
    
     radio5_error.style.color="red";
      
  return false;

}


if(radio6.value == ""){
   radio6_error.textContent="please choose your answer";
    
     radio6_error.style.color="red";
      
  return false;

}

if(radio7.value == ""){
   radio7_error.textContent="please choose your answer";
    
     radio7_error.style.color="red";
      
  return false;

}

if(radio8.value == ""){
   radio8_error.textContent="please choose your answer";
    
     radio8_error.style.color="red";
      
  return false;

}
if(radio9.value == ""){
   radio9_error.textContent="please choose your answer";
    
     radio9_error.style.color="red";
      
  return false;

}
if(radio10.value == ""){
   radio10_error.textContent="please choose your answer";
    
     radio10_error.style.color="red";
      
  return false;

}
if(radio11.value == ""){
   radio11_error.textContent="please choose your answer";
    
     radio11_error.style.color="red";
      
  return false;

}
if(radio12.value == ""){
   radio12_error.textContent="please choose your answer";
    
     radio12_error.style.color="red";
      
  return false;

}

}  


//**********for radio2*********//
$(document).ready(function(){
 	$("#checked3").click(function(){
 		$("#radio2_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked4").click(function(){
 		$("#radio2_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked5").click(function(){
 		$("#radio2_error").hide();
 	});
 });

//*****for radio3*************//

$(document).ready(function(){
 	$("#checked6").click(function(){
 		$("#radio3_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked7").click(function(){
 		$("#radio3_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked8").click(function(){
 		$("#radio3_error").hide();
 	});
 });

//****for radio4******//
$(document).ready(function(){
 	$("#checked9").click(function(){
 		$("#radio4_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked10").click(function(){
 		$("#radio4_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked11").click(function(){
 		$("#radio4_error").hide();
 	});
 });
//***for radio5******//
$(document).ready(function(){
 	$("#checked12").click(function(){
 		$("#radio5_error").hide();
 	});
 });


  $(document).ready(function(){
 	$("#checked13").click(function(){
 		$("#radio5_error").hide();
 	});
 });


   $(document).ready(function(){
 	$("#checked14").click(function(){
 		$("#radio5_error").hide();
 	});
 });

//*********for radio 6******//

$(document).ready(function(){
 	$("#checked15").click(function(){
 		$("#radio6_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked16").click(function(){
 		$("#radio6_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked17").click(function(){
 		$("#radio6_error").hide();
 	});
 });

//******for radio 7***************//
$(document).ready(function(){
 	$("#checked18").click(function(){
 		$("#radio7_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked19").click(function(){
 		$("#radio7_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked20").click(function(){
 		$("#radio7_error").hide();
 	});
 });

//**********for radio 8*****************//

$(document).ready(function(){
 	$("#checked21").click(function(){
 		$("#radio8_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked22").click(function(){
 		$("#radio8_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked23").click(function(){
 		$("#radio8_error").hide();
 	});
 });

//*******for radio 9*********//
$(document).ready(function(){
 	$("#checked24").click(function(){
 		$("#radio9_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked25").click(function(){
 		$("#radio9_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked26").click(function(){
 		$("#radio9_error").hide();
 	});
 });

//********for radio 10*************8//

$(document).ready(function(){
 	$("#checked27").click(function(){
 		$("#radio10_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked28").click(function(){
 		$("#radio10_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked29").click(function(){
 		$("#radio10_error").hide();
 	});
 });

//********for radio 11**************//

$(document).ready(function(){
 	$("#checked30").click(function(){
 		$("#radio11_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked31").click(function(){
 		$("#radio11_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked32").click(function(){
 		$("#radio11_error").hide();
 	});
 });

//**********for radio12************//
$(document).ready(function(){
 	$("#checked33").click(function(){
 		$("#radio12_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked34").click(function(){
 		$("#radio12_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked35").click(function(){
 		$("#radio12_error").hide();
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
