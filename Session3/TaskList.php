<!DOCTYPE html>
<html>
<body>

<h2> Task List </h2>



<script>
var backBtn = [0,1]; 
question = 1;
var prev;
function goBack(){
	if (backBtn.length != 1){	
		prev = backBtn.pop();
		question = prev;
		document.getElementById('opening').innerHTML = "";
	}
	allQuestions();
}

function nextQuestion(){
	backBtn.push(question);
	switch(question){
		case 1:{
			question = 2;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Good job!";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please refer to your summary sheet for module 2";
			}
			break;
		}
		case 2:{
			question = 3;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Keep up the good work!";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please refer to your summary sheet for module 2";
			}
			break;
		}
		case 3:{
			question = 4;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Good work. It is important to add items to the Master List as soon as they arise in order to prevent you from forgetting about it, or abandoning the task at hand. ";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Try to do this next week. Please refer to your summary sheet for module 2";
			}
			break;
		}
		case 4:{
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = ""
				question = 5;
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please try to do this next week."
				question = 6;
			}
			break;
		}
		case 5:{
			if (document.getElementById('a1').checked){
				question = 7;
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Try to do this next week. Please refer to your Summary Sheet for Module 2"
				question = 6; // terminal, not a question
			}
			break;
		}
		case 6:{ 
			break;
		}
		
		case 7:{
			question = 8;
			break;
		}
		case 8:{
			if (document.getElementById('a1').checked){
				question = 9;
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Try to do this next week. Please refer to your Summary Sheet for Module 2";
				question = 6; // terminal, not a question
			}
			break;
		}
		case 9:{
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Try making note of each time you were distracted and what was distracting you (this includes thoughts). You can then try to avoid these distractions in future study sessions. Do not worry if this seems difficult at first, next week's module will cover Distractibility! ";
				question = 6;
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Adjust your time parameters accordingly.";
				question = 6; // terminal, not a question
			}
			break;
		}
		
	}
	
	document.getElementById('a1').checked = true;
	allQuestions();
}

function allQuestions(){
	if (question == 1){
		document.getElementById('ques').innerHTML = "Did you create separate Master and Daily Task-Lists?";
		document.getElementById('backButton').hidden = "hidden";
	}
	else if (question == 2){
		document.getElementById('ques').innerHTML = "Did you incorporate all tasks in the foreseeable future on your Master Task-List?";
		document.getElementById('backButton').hidden = "";
	}
	else if (question == 3){
		document.getElementById('ques').innerHTML = "Did you add items to the Master Task-List as the arose? ";
	}
	else if (question == 4){
		document.getElementById('ques').innerHTML = "Did you create time parameters for your tasks?";
	}
	else if (question == 5){
		document.getElementById('ques').innerHTML = "Did you record the actual time it took to complete said tasks?";	
		document.getElementById('nextButton').hidden = "hidden";
		document.getElementById('submitButton').hidden = "";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
	}
	else if (question == 6){ // terminal
		document.getElementById('ques').innerHTML = "Please refer to your Summary Sheet from Module 2 and make sure to include the following on your Task-Lists this week: </br> Include study time </br>Assign priority Levels to tasks (e.g. A-level, B-level, C-level)</br>Did you complete all A-level tasks before B-level etc.? ";
		document.getElementById('nextButton').hidden = "";
		document.getElementById('submitButton').hidden = "hidden";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
	}
	else if (question == 7){
		document.getElementById('ques').innerHTML = "Were your time parameters accurate?";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
	}
	else if (question == 8){		
		document.getElementById('ques').innerHTML = "Did your tasks take longer than expected?"
	}
	else if (question == 9){
		document.getElementById('ques').innerHTML = "Was your study time interrupted with distractions?"
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
	}
}
</script>
<p id="opening">  </p>
<p id="ques"> Did you create separate Master and Daily Task-Lists?   </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<button type="button" id="nextButton" hidden="hidden" onclick="TaskList.php"> Next Section
</button>

</body>
</html>