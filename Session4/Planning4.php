<!DOCTYPE html>
<html>
<body>

<h2> Planning </h2>

<p><font color='gray'> Check In </font></p>
<p><font color='gray'> Main Section </font></p>
<p><font color='red'> Planning </font></p>


<script>
var backBtn = [0]; 
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
	backBtn.push(question)
	switch(question){
		case 0:{
			if (document.getElementById('a2').checked){
				document.getElementById('ques').innerHTML = "Please see Module 2 on how to use pen and paper to organize your schedule. ";
			}
		}
		case 1:{			
			document.getElementById('opening').innerHTML = "";
			question = 2;
			break;
		}
		case 2:{
			question = 3;
			break;
		}
		case 3:{
			question = 4;
			break;
		}
		case 4:{
			question = 5;
			break;
		}		
	}
	allQuestions();
}

function allQuestions(){
	if (question == 0){
		document.getElementById('ques').innerHTML = "Are you comfortable with the digital tools recommended in Module 2 (i.e. Google Calendar)?"
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		document.getElementById('backButton').hidden = "hidden";
		document.getElementById('submitButton').hidden = "";

	}
	else if (question == 1){
		document.getElementById('opening').innerHTML = "It is now time to plan your Task-Lists and Calendar for the coming week. </br>Have your summary Sheet handy and follow these steps:  ";
		document.getElementById('subject').innerHTML = "Task List:";
		document.getElementById('p1').innerHTML = "Master task list  </br>Write down ALL tasks you can think of for the foreseeable future </br>You can always add to the list as you remember other tasks later</br>Studying must be included  ";
		document.getElementById('p2').innerHTML = "Daily task list </br>Enter items from daily task list to the calendar in the morning </br>These are the tasks to plan to complete on a given day. </br>You should create time estimates for each of these tasks ";
		document.getElementById('backButton').hidden = "";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
	}
	else if (question == 2){
		document.getElementById('subject').innerHTML = "Calendar";
		document.getElementById('p1').innerHTML = "Determine which tasks are considered Level-A (Highest) priority </br>These include, but are not limited to: </br>Assignments due this week </br>Studying for tests this week </br>Administrative deadlines (e.g. paying bills, tuition, rent etc.) ";
		document.getElementById('p2').innerHTML = "Determine the amount of time you need to spend on these tasks and enter them to your calendar </br>For help determining the time needed for an assignment or studying, refer to the UofT assignment calculator which will help you create a step-by-step plan to tackle your school work. ";
	}
	else if (question == 3){
		document.getElementById('p1').innerHTML = "Determine which tasks are considered Level-B (Mid-level) priority </br>These include, but are not limited to: </br>Assignments due next week </br>Tests next week </br>Extracurricular group meetings";
		document.getElementById('p2').innerHTML = "Determine the amount of time you need to spend on these tasks and enter them to your calendar</br>For help determining the time needed for an assignment or studying, refer to the UofT assignment calculator which will help you create a step-by-step plan to tackle your school work. ";
	}
	
	else if (question == 4){		 
		document.getElementById('submitButton').hidden = "";
		document.getElementById('p1').innerHTML = "Determine which tasks are considered Level-C (lowest) priority </br>These include, but are not limited to: </br>Watching television </br>Going to a party"; 
		document.getElementById('p2').innerHTML = "";
		document.getElementById('backButton').hidden = "";
	}
	else if (question == 5){
		document.getElementById('opening').innerHTML = "";
		document.getElementById('subject').innerHTML = "";
		document.getElementById('p1').innerHTML = "Be sure to add items such as decluttering your workspace and designating certain places for important items. This will help you improve future productivity and lower unnecessary stress.";
		document.getElementById('p2').innerHTML = "Make note of what items or thoughts distracted you and employ the strategies outlined on your Summary Sheet to maintain focus on the task at hand.";
		document.getElementById('submitButton').hidden = "hidden";
		
	}
}


</script>

<p id="opening"></p>
<p id="ques">Are you comfortable with the digital tools recommended in Module 2 (i.e. Google Calendar)?</p>
<p id="subject"></p>
<p id="p1"> </p>
<p id="p2"> </p>
	

	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</br></label>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</br></label>
</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

</body>
</html>