<!DOCTYPE html>
<html>
<body>

<h2> Check In </h2>
<p><font color='red'> Check In </font></p>
<p><font color='gray'> Main Section </font></p>
<p><font color='gray'> Planning </font></p>

<script>
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


function nextQuestion(){
	backBtn.push(question)
	switch (question) {
	case 1:{ // technical difficulties
		document.getElementById("backButton").hidden="hidden";
		if (document.getElementById('a1').checked){ // yes
			question = 2;
		}
		else if (document.getElementById('a2').checked){ // no
			question = 3;		
		}		
		document.getElementById("backButton").hidden="";
		break;
	}
	case 2:
	case 3:{
		if (document.getElementById('a1').checked){
			question = 4;
		}
		else if (document.getElementById('a2').checked){
			question = 5;
		}
		break;
	}
	
	case 4:
	case 5:{
		if (document.getElementById('a1').checked){
			question = 6;
		}
		else if (document.getElementById('a2').checked){
			question = 7;
		}
		break;
	}
	case 6:
	case 7:{ // both have same answer
		question = 8;
		break;
	}
	case 8:{ // switch pages
		question = 9;
		break;
	}
	case 9:{
		question = 10;
		if (document.getElementById('a1').checked){
			document.getElementById('ques').innerHTML = "Please inform your therapist";
		}
		break;
	}
	
	} // end switch
	document.getElementById('a1').checked = true;
	allQuestions();
} // end function nextQuestion


function allQuestions(){
	if (question == 1){
		document.getElementById("a1label").innerHTML = "Yes"
		document.getElementById("a2label").innerHTML = "No"
		document.getElementById("ques").innerHTML = "Did you encounter any technical issues when trying to access the module? ";
		document.getElementById("backButton").hidden="hidden";
	}
	else if (question == 2 || question == 3){
		document.getElementById("a1label").innerHTML = "Yes"
		document.getElementById("a2label").innerHTML = "No"
		if (question == 2){
			document.getElementById("ques").innerHTML = "Please contact your therapist. </br>Are you comfortable with the digital tools recommended in Module 2 (i.e. Distractibility Delay)?";
		}
		else{
			document.getElementById("ques").innerHTML = "Are you comfortable with the digital tools recommended in Module 3 (i.e. Distractibility Delay)?";
		
		}
	}
	else if (question == 4 || question == 5){
		if (question == 4){
				document.getElementById("ques").innerHTML = "Did you have the Summary Sheets from Modules 3, 4, 5, and 6 readily available? ";
		}
		else if (question == 5){
				document.getElementById("ques").innerHTML = "Please see Module 3 on how to minimize distractions and maintain focus. </br> Did you have the Summary Sheets from Modules 3, 4, 5, and 6 readily available? ";	
		}
	}
	else if (question == 6 || question == 7){
		if (question == 6){
				document.getElementById("ques").innerHTML = "Please have this accessible for reference during today's session. </br> Did you have any administrative issues such as: </br>Taking your medication regularly?</br>Taking your medication at the scheduled time? ";
		}
		else if (question == 7){
				document.getElementById("ques").innerHTML = "Please retrieve the Summary Sheets from your email.</br>If you do not have the Summary Sheets, please inform your therapist  </br>Did you have any administrative issues such as: </br>Taking your medication regularly?</br>Taking your medication at the scheduled time?";	
		}
	}
	else if (question == 8){
		document.getElementById("ques").innerHTML = "Be sure to adhere to your prescribed medication regimen. You are more likely to achieve success with this program if you commit to the medical and behavioural components.</br>Do you feel that your medication is not working despite following the regimen?";
	}
	else if (question == 9){
		document.getElementById("ques").innerHTML = "Do you feel that your medication is not working despite following the regimen? ";
		// unhide next section button
		
		document.getElementById("a1").hidden="";
		document.getElementById("a2").hidden="";
		
		document.getElementById("a1label").hidden="";
		document.getElementById("a2label").hidden="";
		
		document.getElementById("nextButton").hidden="hidden";
		document.getElementById("submitButton").hidden="";
	}
	else if (question == 10){
		// unhide next section button
		document.getElementById("nextButton").hidden="";
		document.getElementById("submitButton").hidden="hidden";
		
		document.getElementById("a1").hidden="hidden";
		document.getElementById("a2").hidden="hidden";
		
		document.getElementById("a1label").hidden="hidden";
		document.getElementById("a2label").hidden="hidden";
	}
}
</script>

<form method="POST" action="Review7.php">
<p id="opening">Welcome to today's session!  
You have now completed all of the modules on behavioural change! 
Over the next couple weeks we will be focussing on piecing these habits together and identify areas for improvement to maintain and further the success you have achieved so far. 
As per usual, we will start with a Check-in, we will then identify areas of improvement through a series of questions pertaining to the skill learned in each module, and finally, we will conclude by planning for next week to address these areas.  </p>
<p id="ques"> Did you encounter any technical issues when trying to access the module? </p>
	
	<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
	<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>

</br>

<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>
	
<button id="nextButton" hidden="hidden"> Next Section
</button>
</form>

</body>
</html>
