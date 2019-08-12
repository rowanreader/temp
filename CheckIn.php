<!DOCTYPE html>
<html>
<body>

<h2> Check In </h2>

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

function allQuestions(){
	if (question == 2 || question == 3){
		document.getElementById("a1label").innerHTML = "Yes"
		document.getElementById("a2label").innerHTML = "No"
		if (question == 2){
			document.getElementById("ques").innerHTML = "Please contact your therapist. \nAre you comfortable with the digital tools recommended in Module 2 (i.e. Google Calendar)?";
		}
		else{
			document.getElementById("ques").innerHTML = "Are you comfortable with the digital tools recommended in Module 2 (i.e. Google Calendar)?";
		
		}
	}
	if (question == 4 || question == 5){
		if (quesiton == 4){
				document.getElementById("ques").innerHTML = "Did you receive the Summary Sheet for Module 2 via email?";
		}
		else if (question == 5){
				document.getElementById("ques").innerHTML = "Please see Module 2 on how to use pen and paper to organize your schedule \nDid you receive the Summary Sheet for Module 2 via email?";	
		}
	}
	if (question == 6 || question == 7){
		if (quesiton == 6){
				document.getElementById("ques").innerHTML = "Please have this accessible for reference during today's session. \nDid you have any administrative issues such as: \nTaking your medication regularly?\nTaking your medication at the scheduled time? ";
		}
		else if (question == 5){
				document.getElementById("ques").innerHTML = "Please inform your therapist. \nDid you have any administrative issues such as: \nTaking your medication regularly?\nTaking your medication at the scheduled time?";	
		}
	}
	if (question == 8){
		document.getElementById("ques").innerHTML = "Be sure to adhere to your prescribed medication regimen. You are more likely to achieve success with this program if you commit to the medical and behavioural components.\nDo you feel that your medication is not working despite following the regimen?";
	}
	if (question == 9 || question == 10){
		document.getElementById("ques").innerHTML = "Please inform your therapist";
		// unhide next section button
		document.getElementById("nextSecButton").hidden="";
		document.getElementById("submit").hiddent="hidden";
	}
}


function nextQuestion(){
	backBtn.push(question)
	switch (question) {
	case 1:{ // technical difficulties
		if (document.getElementById('a1').checked){ // yes
			question = 2;
		}
		else if (document.getElementById('a2').checked){ // no
			question = 3;		
		}
		break;
	}
	case 2:
	case 3:{
		if (document.getElementById('a1').checked{
			question = 4;
		}
		else if (document.getElementById('a2').checked{
			question = 5;
		}
		break;
	}
	
	case 4:
	case 5:{
		if (document.getElementById('a1').checked{
			question = 6;
		}
		else if (document.getElementById('a2').checked{
			question = 7;
		}
		break;
		
	}
	case 6:
	case 7:{ // both have same answer
		question = 8;
	}
	case 8:{ // switch pages
		if (document.getElementById('a1').checked{
			question = 9;
		}
		else if (document.getElementById('a2').checked{
			question = 10;
		}
		break;
	}
	document.getElementById('a1').checked = true;
	allQuestions();
}

</script>

<p id="opening"> Welcome to today's session! We will be reviewing the use of a Task-List and Calendar. 
We will also be exploring any issues you may have encountered and how to address them moving forward with the program. </p>
<p id="ques"> Did you encounter any technical issues when trying to access the module? </p>
	
	<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
	<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>


<button type="button" id="backButton" onclick="goBack()"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<button type="button" id="nextSecButton" hidden="hidden" onclick="NewSkills.php"> Next Section
</button>

</body>
</html>