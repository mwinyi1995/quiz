<?php
session_start();
require_once("database_connection.php");
$_SESSION['message']="";

if(isset($_POST['submit'])>0){
$dir="document/";
$radio1=$_POST['radio1'];
$radio2=$_POST['radio2'];
$radio3=$_POST['radio3'];
$radio4=$_POST['radio4'];
$radio5=$_POST['radio5'];
//$radio6=$_POST['radio6'];
//$radio7=$_POST['radio7'];
$comment=$_POST['comment'];
$number=$_POST['number'];

$count=count($_FILES['file']['name']);
$sql="insert into question(qn_id,qn_radio1,qn_radio2,qn_radio3,qn_radio4,qn_radio5,qn_number,qn_comment)values";
$sql.="(null,'$radio1','$radio2','$radio3','$radio4','$radio5','$number','$comment')";

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
	
  echo"<script>alert('Thank you for your time to complete question_5');window.location='question_6.php'</script>";
 
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
	<title>Question_5</title>
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
		<input type="hidden" name="number" value='5'>
		<p><badge  class="w3-badge w3-teal"><b>5</b></badge></p>



		<!--div for introduction-->
		<div class="w3-row w3-padding w3-animate-zoom">
			<div class="w3-col s2 m2 l2"><b>&nbsp</b></div>
			<div class="w3-col s10 m10 l10 w3-badge w3-round w3-teal" style="padding:3px;width:60%">
				<div class="w3-container " style="border:1px solid white"><label><b>Predecessor Auditor/Accountant</b></label>

				</div>
				</div>
             </div>
             <br/>
             <br/>
             <!--end div for introduction-->

<!--div for question-->
<div class="w3-row w3-padding-16">

<div class="w3-col s12 m12 l12  w3-round" style="padding-left:15px">
 <p><b>Have you obtained permission from the predecessor firm to
	review prior-year working papers(if permitted)?
 </p>
                 <input class="w3-radio" type="radio" name="radio1" value="yes" id="checked">yes
			     <input class="w3-radio" type="radio" name="radio1" value="no" id="checked1">No
			     <input class="w3-radio" type="radio" name="radio1" value="na" id="checked2">NA</b>&nbsp
		     <label id="radio1_error" class="w3-animate-zoom"></label>


</div>
</div>


<!--end div for question--->

<!--div for question-->
<div class="w3-row w3-padding-16">

<div class="w3-col s12 m12 l12  w3-round" style="padding-left:15px">
 <p><b>If so,have
	you reviewed prior-period planning documentation
	prepared by the previous firm,and determined whether the
	previous firm:</b></p>
                  
<p>         <b>(a)</b>Confirmed independence from the clients; 
	        <input class="w3-radio" type="radio" name="radio2" value="yes" id="checked3">yes
			<input class="w3-radio" type="radio" name="radio2" value="no" id="checked4">No
			<input class="w3-radio" type="radio" name="radio2" value="na" id="checked5">NA
            <label id="radio2_error" class="w3-animate-zoom"></label>
</p>

<p>         <b>(b)</b>In instance of an audit,whether it was performed,in accordance with ISAs;
            <input class="w3-radio" type="radio" name="radio3" value="yes" id="checked6">yes
			<input class="w3-radio" type="radio" name="radio3" value="no" id="checked7">No
			<input class="w3-radio" type="radio" name="radio3" value="na" id="checked8">NA
            <label id="radio3_error" class="w3-animate-zoom"></label>
</p>

<p>         <b>(c)</b>Had adequate resources and proficiency; 
            <input class="w3-radio" type="radio" name="radio4" value="yes" id="checked9">yes
			<input class="w3-radio" type="radio" name="radio4" value="no" id="checked10">No
			<input class="w3-radio" type="radio" name="radio4" value="na" id="checked11">NA
            <label id="radio4_error" class="w3-animate-zoom"></label>and
</p>

<p>         <b>(d)</b> Had an understanding of the entity and its
                       environment?
	        <input class="w3-radio" type="radio" name="radio5" value="yes" id="checked12">yes
			<input class="w3-radio" type="radio" name="radio5" value="no" id="checked13">No
			<input class="w3-radio" type="radio" name="radio5" value="na" id="checked14">NA
            <label id="radio5_error" class="w3-animate-zoom"></label>

</p>
                


<!---comment & file------>
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
var radio1 = document.forms['quiz-form']['radio1'];
var radio2=document.forms['quiz-form']['radio2'];
var radio3=document.forms['quiz-form']['radio3'];
var radio4=document.forms['quiz-form']['radio4'];
var radio5=document.forms['quiz-form']['radio5'];
//var radio6=document.forms['quiz-form']['radio6'];
//var radio7=document.forms['quiz-form']['radio7'];

//************collect all id for errors message*********************//
var radio1_error=document.getElementById("radio1_error");
var radio2_error=document.getElementById("radio2_error");
var radio3_error=document.getElementById("radio3_error");
var radio4_error=document.getElementById("radio4_error");
var radio5_error=document.getElementById("radio5_error");
//var radio6_error=document.getElementById("radio6_error");
//var radio7_error=document.getElementById("radio7_error");



function validate(){
if(radio1.value == ""){
   radio1_error.textContent="please choose your answer";
    
     radio1_error.style.color="red";
      
  return false;

}


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


/*if(radio6.value == ""){
   radio6_error.textContent="please choose your answer";
    
     radio6_error.style.color="red";
      
  return false;

}

if(radio7.value == ""){
   radio7_error.textContent="please choose your answer";
    
     radio7_error.style.color="red";
      
  return false;

} */

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
 		$("#radio5_error").hide();
 	});
 });

  $(document).ready(function(){
 	$("#checked16").click(function(){
 		$("#radio5_error").hide();
 	});
 });

   $(document).ready(function(){
 	$("#checked17").click(function(){
 		$("#radio5_error").hide();
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










































			
