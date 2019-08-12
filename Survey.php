
<!DOCTYPE html>
<html>
<body>

<?php
require_once('PHPMailer/src/PHPMailer.php');
require_once('PHPMailer/src/SMTP.php');
//function sendEmail(){
	//echo "Hello";
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->SMPTAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465';z
	$mail->Username = 'rowanreader1025@gmail.com';
	$mail->Password = 'my pass here';
	$mail->isHTML();
	$mail->Subject = 'Hello World';
	$mail->Body = 'test email';
	$mail->AddAddress('jacquelineh@live.ca');
	$mail->Send();
	/* 
	ini_set('SMTP','smtpout.secureserver.net');
	ini_set('smtp_port',587);
	$msg = "Hello world. This is a test.";
	$msg = wordwrap($msg, 70);

	mail("rowanreader1025@gmail.com","Test",$msg); */
//}
//sendEmail();

?>


<h2> Survey Test </h2>

<script>
// POSSIBLE ISSUE IF USING CSS, HIDDEN="HIDDEN" MUST BE REPLACED BY STLYE=NONE
var backBtn = [0,1]; // keep track of questions
question = 1;
var prev;
function goBack(){
	if (backBtn.length != 1){	
		prev = backBtn.pop();
		question = prev;
	}
	allQuestions();
}


function nextQues(){
	backBtn.push(question)
	switch (question) {
	case 1:{ // question 1 do you regularly use...
		if (document.getElementById('a1').checked){ // yes
			question = 2;
		}
		else if (document.getElementById('a2').checked){ // no
			question = 3;		
		}
		break;
	}

	case 2:{ // well done! ... !!! semiterminal

		if (document.getElementById('a1').checked){ // yes
			question = 4;

		}
		else if (document.getElementById('a2').checked){ // no
			question = 5;
		
		}
	
		break;
	}

	case 3:{ // why? !!! terminal question
		// MUST CLEAR ALL, JUST DISPLAY PARAGRAPH
		if (document.getElementById('a1').checked){
			question = 6;

		}
		else if (document.getElementById('a2').checked){
			question = 7;
		
		}
		else if (document.getElementById('a3').checked){
			question = 8;
		
		}
		break;
	}

	case 4: { // did you recorded time closely resemble your planned time? !!! semi terminal

		if (document.getElementById('a1').checked){ // yes
			question = 9;

		}
		else if (document.getElementById('a2').checked){ // no
			question = 10;
		
		}
		break;
	}
	case 9: { // were you efficient during your time spent

		if (document.getElementById('a1').checked){ // no
			question = 12;

		}
		else if (document.getElementById('a2').checked){ // yes
			question = 11;
		
		}
		document.getElementById("open").hidden = ""
		break;
	}
	case 10: { // why not

		if (document.getElementById('a1').checked){ // within control
			question = 13;

		}
		else if (document.getElementById('a2').checked){ // beyond control
			question = 14;
		
		}
		break;
	}
	case 12:{ // satisfied with work break ratio? !!! Terminal
		if (document.getElementById('a1').checked){ // yes
			question = 15;

		}
		else if (document.getElementById('a2').checked){ // no
			question = 16;
		
		}
		break;
	
	}
	case 13:{ // how can you improve
		if (document.getElementById('a1').checked || document.getElementById('a2').checked){ // module 3
			question = 17;

		}
		else if (document.getElementById('a3').checked){ // all modules, forum
			question = 18;
		}
		else if (document.getElementById('a4').checked){ // module 4
			question = 19;
		}
		else if (document.getElementById('a5').checked || document.getElementById('a6').checked){ // module 2
			question = 20;
		}
		break;
	
	}
	
	
	
} // switch
// reset checked to only a1
document.getElementById('a1').checked = true;
allQuestions();
/*
if (question == 1){
	<p id="ques"> What is your gender? </p>
	
	<input type="radio" id="a1" name="answers" value=0 checked> Male <br>
	<input type="radio" id="a2" name="answers" value=1> Female <br>
	<input type="radio" id="a3" name="answers" value=2> Other <br>
	<br>

}
*/
}
function allQuestions(){

if (question == 2){
	document.getElementById("ques").innerHTML = "Well done! Did you record how you spent your time to be compared with what you planned in your calander? (see Module 2)"
	document.getElementById("a1label").innerHTML = "Yes"
	document.getElementById("a2label").innerHTML = "No"
}
<!-- changed the question from "Please answer the following questions to help us understand... -->
else if (question == 3){
	document.getElementById("ques").innerHTML = "Why?"
	document.getElementById("a1label").innerHTML = "I do not like using a schedule"
	document.getElementById("a2label").innerHTML = "I forgot to use the calendar, or used it for a few days and fell out of the routine"
	var xL = document.getElementById("a3label");
	xL.hidden = "";
	var x = document.getElementById("a3");
	x.hidden = "";
}

else if (question == 4){
	document.getElementById("ques").innerHTML = "Did your recorded time closely resemble your planned time?"
	document.getElementById("a1label").innerHTML = "Yes"
	document.getElementById("a2label").innerHTML = "No"
	
}

else if (question == 9){
	document.getElementById("ques").innerHTML = "Were you efficient during your time spent? (i.e. did you accomplish as much work as you had expected?) Explain"
	document.getElementById("a1label").innerHTML = "Yes"
	document.getElementById("a2label").innerHTML = "No"
	document.getElementById("open").hidden = ""

}
else if (question == 10){
	document.getElementById("ques").innerHTML = "Why not?"
	document.getElementById("a1label").innerHTML = "Circumstances within your control"
	document.getElementById("a2label").innerHTML = "Circumstances beyond your control"
}
else if (question == 12){
	document.getElementById("ques").innerHTML = "Are you satisfied with your work:break ratio? Why or why not?"
	document.getElementById("a1label").innerHTML = "Yes"
	document.getElementById("a2label").innerHTML = "No"
	document.getElementById("open").hidden = ""
}
else if (question == 13){ // how can you improve?
	document.getElementById("ques").innerHTML = "How can you improve?"
	
	document.getElementById("a3").hidden = ""
	document.getElementById("a3label").hidden = ""
	
	document.getElementById("a4").hidden = ""
	document.getElementById("a4label").hidden = ""
	
	document.getElementById("a5").hidden = ""
	document.getElementById("a5label").hidden = ""
	
	document.getElementById("a6").hidden = ""
	document.getElementById("a6label").hidden = ""
	
	document.getElementById("a1label").innerHTML = "Do you have a poor work environment?"
	document.getElementById("a2label").innerHTML = "Do you find yourself becoming regularly distracted?"
	document.getElementById("a3label").innerHTML = "Did you find it too challenging to meet your goals?"
	document.getElementById("a4label").innerHTML = "Do you find that you are too tired to accomplish your goals?"
	document.getElementById("a5label").innerHTML = "Do you think that your planned schedule may have been unrealistic to accomplish?"
	document.getElementById("a6label").innerHTML = "Are you overwhelmed/unsure of how to arrange items in your calender?"
	
	

}
// terminal questions 
else if (question == 6 || question == 7 || question == 8 || question == 5 || question == 11 || question >  13){

	var w = document.getElementById("open")
	w.hidden = "hidden";
	
	var xL = document.getElementById("a1label");
	xL.hidden = "hidden";
	var x = document.getElementById("a1");
	x.hidden = "hidden";
	
	var yL = document.getElementById("a2label");
	yL.hidden = "hidden";
	var y = document.getElementById("a2");
	y.hidden = "hidden";
	
	var zL = document.getElementById("a3label");
	zL.hidden = "hidden";
	var z = document.getElementById("a3");
	z.hidden = "hidden";
	
	
	document.getElementById("a4").hidden="hidden"
	document.getElementById("a4label").hidden="hidden"
	
	
	document.getElementById("a5").hidden="hidden"
	document.getElementById("a5label").hidden="hidden"
	
	document.getElementById("a6").hidden="hidden"
	document.getElementById("a6label").hidden="hidden"
	
	if (question == 6){
		document.getElementById("ques").innerHTML = "Please review Module 2. Items presented here highlight methods to make the use of a calendar simple and effective"
		document.getElementById("submitButton").hidden="hidden"
	}
	else if (question == 7){
		document.getElementById("ques").innerHTML = "As is the case when forming any habit, setbacks occur. It is important to try again to build this habit. Please review the module, create realistic goals for yourself, and attempt to follow the calendar next week."
		document.getElementById("submitButton").hidden="hidden"
	}
	else if (question == 8){ // doesn't hide submit button
		document.getElementById("ques").innerHTML = "Please explain what you think may have hindered your ability to follow a calendar in the space betow. It is helpful to bring up these challenges as discussion points at the open forum."
		document.getElementById("open").hidden = ""
	}
	else if (question == 5){
		document.getElementById("ques").innerHTML = "Keep up the good work. Continue to use the calendar/weekly planner, now please try to record how you spend your time next week."
		document.getElementById("submitButton").hidden="hidden"
	}
	else if (question == 14 || question == 11 || question == 16 || question == 20){
		document.getElementById("ques").innerHTML = "See module 2."
		document.getElementById("submitButton").hidden="hidden"
		
	}
	else if (question == 15){
	// NOT SURE, DIDN'T GIVE ME ANYTHING
		document.getElementById("ques").innerHTML = "Congrats I guess?"
		document.getElementById("submitButton").hidden="hidden"
	
	}
	else if (question == 17){
		document.getElementById("ques").innerHTML = "See module 3."
		document.getElementById("submitButton").hidden="hidden"
	}
	else if (question == 19){
		document.getElementById("ques").innerHTML = "Please refer to strategies described in module 4."
		document.getElementById("submitButton").hidden="hidden"
	}
	else if (question == 18){
		document.getElementById("ques").innerHTML = "Please review the modules and discuss your challenges at the open forum"
		document.getElementById("submitButton").hidden="hidden"
	}
	// all call send
	//sendEmail();
}

} // function

</script>

	<p id="ques"> Do you regularly use a calendar/weekly schedule as outlined in Module 2? </p>
	
	<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
	<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>
	
	<input type="radio" hidden="hidden" id="a3" name="answers" value=2><label for="a3" hidden="hidden" id="a3label">Other</label><br> 
	<input type="radio" hidden="hidden" id="a4" name="answers" value=2><label for="a4" hidden="hidden" id="a4label">Other</label><br> 
	<input type="radio" hidden="hidden" id="a5" name="answers" value=2><label for="a5" hidden="hidden" id="a5label">Other</label><br> 
	<input type="radio" hidden="hidden" id="a6" name="answers" value=2><label for="a6" hidden="hidden" id="a6label">Other</label><br> 
	
	<textarea hidden="hidden" id="open" name="answers" rows="6" cols="60"> </textarea>
	<br>
<button type="button" id="backButton" onclick="goBack()"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQues()"> Submit
</button>


</body>
</html>
