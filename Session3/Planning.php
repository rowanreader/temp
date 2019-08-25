<!DOCTYPE html>
<html>
<body>

<h2> Planning </h2>



<script>
var backBtn = [0,1]; 
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
	switch(question){
		case 1:{
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
	if (question == 1){
		document.getElementById('opening').innerHTML = "It is now time to plan your Task-Lists and Calendar for the coming week. </br>Have your summary Sheet handy and follow these steps:  ";
		document.getElementById('subject').innerHTML = "Task List:";
		document.getElementById('p1').innerHTML = "Master task list  </br>Write down ALL tasks you can think of for the foreseeable future </br>You can always add to the list as you remember other tasks later</br>Studying must be included  ";
		document.getElementById('p2').innerHTML = "Daily task list </br>Enter items from daily task list to the calendar in the morning </br>These are the tasks to plan to complete on a given day. </br>You should create time estimates for each of these tasks ";
		document.getElementById('backButton').hidden = "hidden";
		document.getElementById('submitButton').hidden = "";
	}
	else if (question == 2){
		document.getElementById('backButton').hidden = "";
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
		document.getElementById('p1').innerHTML = "Be sure to keep track of your time spent on tasks to compare it to your planned time this week.  </br>Create your daily task list at the same time every day and ensure you do your best to cross-off all items before the end of the day. ";
		document.getElementById('p2').innerHTML = "You are now ready for the week ahead! ";
		document.getElementById('submitButton').hidden = "hidden";
		
	}
}


</script>

<p id="opening">It is now time to plan your Task-Lists and Calendar for the coming week. </br>Have your summary Sheet handy and follow these steps:   </p>
<p id="subject">Task-List:</p>
<p id="p1"> Master task list  </br>Write down ALL tasks you can think of for the foreseeable future </br>You can always add to the list as you remember other tasks later</br>Studying must be included  </p>
<p id="p2">Daily task list </br>Enter items from daily task list to the calendar in the morning </br>These are the tasks to plan to complete on a given day. </br>You should create time estimates for each of these tasks </p>
	

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

</body>
</html>