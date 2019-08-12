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

<<<<<<< HEAD
=======
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

>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294

function nextQuestion(){
	backBtn.push(question)
	switch (question) {
	case 1:{ // technical difficulties
<<<<<<< HEAD
		document.getElementById("backButton").hidden="hidden";
=======
>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294
		if (document.getElementById('a1').checked){ // yes
			question = 2;
		}
		else if (document.getElementById('a2').checked){ // no
			question = 3;		
<<<<<<< HEAD
		}		
		document.getElementById("backButton").hidden="";
=======
		}
>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294
		break;
	}
	case 2:
	case 3:{
<<<<<<< HEAD
		if (document.getElementById('a1').checked){
			question = 4;
		}
		else if (document.getElementById('a2').checked){
=======
		if (document.getElementById('a1').checked{
			question = 4;
		}
		else if (document.getElementById('a2').checked{
>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294
			question = 5;
		}
		break;
	}
	
	case 4:
	case 5:{
<<<<<<< HEAD
		if (document.getElementById('a1').checked){
			question = 6;
		}
		else if (document.getElementById('a2').checked){
			question = 7;
		}
		break;
=======
		if (document.getElementById('a1').checked{
			question = 6;
		}
		else if (document.getElementById('a2').checked{
			question = 7;
		}
		break;
		
>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294
	}
	case 6:
	case 7:{ // both have same answer
		question = 8;
<<<<<<< HEAD
		break;
	}
	case 8:{ // switch pages
		if (document.getElementById('a1').checked){
			question = 9;
		}
		else if (document.getElementById('a2').checked){
=======
	}
	case 8:{ // switch pages
		if (document.getElementById('a1').checked{
			question = 9;
		}
		else if (document.getElementById('a2').checked{
>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294
			question = 10;
		}
		break;
	}
<<<<<<< HEAD
	
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
	if (question == 2 || question == 3){
		document.getElementById("a1label").innerHTML = "Yes"
		document.getElementById("a2label").innerHTML = "No"
		if (question == 2){
			document.getElementById("ques").innerHTML = "Please contact your therapist. </br>Are you comfortable with the digital tools recommended in Module 2 (i.e. Google Calendar)?";
		}
		else{
			document.getElementById("ques").innerHTML = "Are you comfortable with the digital tools recommended in Module 2 (i.e. Google Calendar)?";
		
		}
	}
	if (question == 4 || question == 5){
		if (question == 4){
				document.getElementById("ques").innerHTML = "Did you receive the Summary Sheet for Module 2 via email?";
		}
		else if (question == 5){
				document.getElementById("ques").innerHTML = "Please see Module 2 on how to use pen and paper to organize your schedule </br> Did you receive the Summary Sheet for Module 2 via email?";	
		}
	}
	if (question == 6 || question == 7){
		if (question == 6){
				document.getElementById("ques").innerHTML = "Please have this accessible for reference during today's session. </br> Did you have any administrative issues such as: </br>Taking your medication regularly?</br>Taking your medication at the scheduled time? ";
		}
		else if (question == 5){
				document.getElementById("ques").innerHTML = "Please inform your therapist. </br>Did you have any administrative issues such as: </br>Taking your medication regularly?</br>Taking your medication at the scheduled time?";	
		}
	}
	if (question == 8){
		document.getElementById("ques").innerHTML = "Be sure to adhere to your prescribed medication regimen. You are more likely to achieve success with this program if you commit to the medical and behavioural components.</br>Do you feel that your medication is not working despite following the regimen?";
	}
	if (question == 9 || question == 10){
		document.getElementById("ques").innerHTML = "Please inform your therapist";
		// unhide next section button
		backBtn.push("CheckIn.php");
		document.getElementById("nextSecButton").hidden="";
		document.getElementById("submitButton").hidden="hidden";
	}
}


</script>
<form method="POST" action="NewSkills.php">
=======
	document.getElementById('a1').checked = true;
	allQuestions();
}

</script>

>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294
<p id="opening"> Welcome to today's session! We will be reviewing the use of a Task-List and Calendar. 
We will also be exploring any issues you may have encountered and how to address them moving forward with the program. </p>
<p id="ques"> Did you encounter any technical issues when trying to access the module? </p>
	
	<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
	<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>

<<<<<<< HEAD
</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
=======

<button type="button" id="backButton" onclick="goBack()"> Back
>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<<<<<<< HEAD

<button id="nextSecButton" hidden="hidden" > Next Section
</button>
</form>
=======
<button type="button" id="nextSecButton" hidden="hidden" onclick="NewSkills.php"> Next Section
</button>
>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294

</body>
</html>