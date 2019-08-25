<!DOCTYPE html>
<html>
<body>

<h2> Section A </h2>


<script>
var backBtn = [0]; // keep track of questions
question = 0;
var prev;
function goBack(){
	if (backBtn.length != 1){	
		prev = backBtn.pop();
		question = prev;
	}
	allQuestions();
}

function nextQuestion(){
	backBtn.push(question);
	switch(question){
		case 1:{
			question = 2;
			break;
		}
		case 2:{
			question = 3;
			if (document.getElementById('a1').checked){
				document.getElementById('evalButton').hidden = "";
			}
			else if (document.getElementById('a2').checked{
				document.getElementById('calendarButton').hidden = "";
			}
			break;
		}
	}

	
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){
	if (question == 1){
		document.getElementById('ques').innerHTML = "Please assess whether you included the following attributes in your Task List and Calendar last week:</br>All tasks in the foreseeable future including studying</br>Daily tasks are chosen from the master task list</br>Entered items from daily task list to the calendar in the morning</br>All routine items added to calendar</br>Task-list items are ranked according to priority</br>Highest priority items completed before lower priority items</br>Developed break schedule based on typical attention span";
		document.getElementById('backButton').hidden = "hidden";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
	}
	else if (question == 2){
		document.getElementById('ques').innerHTML = "Did your Task-List and Calendar for the past week include all of the above";
		document.getElementById('backButton').hidden = "";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
	}
	else if (question == 3){
		document.getElementById('ques').innerHTML = "Please move to the next section.";
		document.getElementById('backButton').hidden = "";
		document.getElementById('submitButton').hidden = "hidden";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
		
	}
	
	
}

</script>

<p id="opening">  </p>
<p id="ques"> Please assess whether you included the following attributes in your Task List and Calendar last week: 

All tasks in the foreseeable future including studying 

Daily tasks are chosen from the master task list 

Entered items from daily task list to the calendar in the morning 

All routine items added to calendar 

Task-list items are ranked according to priority 

Highest priority items completed before lower priority items 

Developed break schedule based on typical attention span  </p>
	
<input type="radio" id="a1" name="answers" hidden="hidden" value=0 checked><label for="a1" id="a1label" hidden="hidden">Yes</label><br>
<input type="radio" id="a2" name="answers" hidden="hidden" value=1><label for="a2" id="a2label" hidden="hidden"></label>No<br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<form method="POST" action="Calendar7.php">
<button type="button" id="calendarButton" hidden="hidden" onclick="TransitionA.php"> Next Section
</button>
</form>

<form method="POST" action="Eval7.php">
<button id="evalButton" hidden="hidden" onclick="TransitionA.php"> Next Section
</button>
</form>
</body>
</html>