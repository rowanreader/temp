<!DOCTYPE html>
<html>
<body>

<h2> Section B </h2>


<script>
var backBtn = [0]; // keep track of questions
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
	backBtn.push(question);
	switch(question){
		case 1:{
			if (document.getElementById('a1').checked){
				question = 2;
			}
			else if (document.getElementById('a2').checked){
				question = 3;
			}
			break;
		}
		case 2:{
			question = 4;
			if (document.getElementById('a1').checked){
				document.getElementById("opening").innerHTML = "Please have this accessible for reference during today's session";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please inform your therapist";
			}
			break;
		}
		case 3:{
			question = 5;
			if (document.getElementById('a1').checked){
				document.getElementById("opening").innerHTML = "Consider setting a daily alarm to prompt you to create a Daily Task list and then add these items to your calendar. </br>You can treat yourself to a small reward after doing this each day while you are establishing the habit. ";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please move on to the next section.";
			}
			break;
		}
		case 4:{
			if (document.getElementById('a1').checked){
				question = 6;
			}
			else if (document.getElementById('a2').checked){
				question = 7;
			}
			break;
		}	
		case 6:{
			question = 7;
			if (document.getElementById('a1').checked){				
				document.getElementById('opening').innerHTML = "Try writing these thoughts down and returning to them after you have completed the task. </br>You will learn more about how to manage distractions in Module 3, next week";
			}
			break;
		}
		case 7:{
			question = 8;
			if (document.getElementById('a1').checked){				
				document.getElementById('opening').innerHTML = "Do not worry. It is normal to be uncomfortable navigating new systems at first, and even harder to build a sustainable habit -- often 10-12 weeks. Keep sticking to the plan and use the system next week. If you need to make slight modifications, such as using paper and pen for comfort-level, please refer back to Module 2 where this is discussed.";
			}
			break;
		}
		case 8:{
			question = 9;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Implementing significant behaviour change is very challenging at the beginning. </br>It takes weeks before things start to become easier, however, it does work if you stick with it!</br>This program will help you fulfill your true potential by assisting you in organizational and time-management skills.</br>Keep trying and it will become easier when you begin to see positive results in the later sessions "
			}
			break;
		}
		case 9:{
			question = 10;
			if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Consider arranging your schedule in your calendar next week to aim for 7-9 hrs of sleep.</br>We will discuss sleep issues and how to address them in Module 4 in two weeks. ";
			}		
			break;
		}
		case 10:{
			question = 11; // calender questions
			break;
		}
		case 11:{
			question = 12;
			if (document.getElementById('a1').checked){
					document.getElementById('opening').innerHTML = "Good job. To make this easier we will be planning the week ahead after the next couple of questions.";
			}
			else if (document.getElementById('a2').checked){
					document.getElementById('opening').innerHTML = "Okay. You will be able to try this for the coming week, as we will be planning the week ahead after the next couple of questions.";
			}
			break;
		}
		case 12:{
			question = 13;
			if (document.getElementById('a1').checked){
					document.getElementById('opening').innerHTML = "Good job.";
			}
			else if (document.getElementById('a2').checked){
					document.getElementById('opening').innerHTML = "Okay. You will be able to try this for the coming week, as we will be planning the week ahead after the next couple of questions.";
			}
			break;
		}
		case 13:{
			question = 14;
			if (document.getElementById('a1').checked){
					document.getElementById('opening').innerHTML = "Good job.";
			}
			else if (document.getElementById('a2').checked){
					document.getElementById('opening').innerHTML = "Okay. You will be able to try this for the coming week, as we will be planning the week ahead after the next couple of questions.";
			}
			break;
		}
		case 14:{
			
			if (document.getElementById('a1').checked){
					document.getElementById('opening').innerHTML = "Good job.";
					question = 15;
			}
			else if (document.getElementById('a2').checked){
					document.getElementById('opening').innerHTML = "Okay. You will be able to try this for the coming week, as we will be planning the week ahead after the next couple of questions.";
					question = 16;
			}
			break;
		}
		case 15:{
			break;
		}
		case 16:{
			question = 15;
			if (document.getElementById('a1').checked){
					document.getElementById('opening').innerHTML = "Try using the <a href='https://ctl.utsc.utoronto.ca/assignmentcal/'>UofT assignment</a> calculator to help you determine time needed () .";
					
			}
			else if (document.getElementById('a2').checked){
					document.getElementById('opening').innerHTML = "Please refer to your Summary Sheet for Module 2 and try to do this next week.</br>Please refer to your Summary Sheet for Module 2.";
			}
			break;
		}
	}
	
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){
	if (question == 1){
		document.getElementById('opening').innerHTML = "";
		document.getElementById('ques').innerHTML = "Did you have issues with 1 or more of the following?";
		document.getElementById('a1label').innerHTML = "Trouble with motivation";
		document.getElementById('a2label').innerHTML = "Trouble remembering to use the system";
		document.getElementById('backButton').hidden = "hidden";
		document.getElementById('submitButton').hidden = "";
	}
	else if (question == 2){
		document.getElementById("ques").innerHTML = "Did you attempt to use the Task-List and Calender system?";
		document.getElementById('a1label').innerHTML = "Yes";
		document.getElementById('a2label').innerHTML = "No";		
		document.getElementById('backButton').hidden = "";	
	}
	else if (question == 3){
		document.getElementById("ques").innerHTML = "Did you have trouble remembering to use the Task-List/Calender system?";
		document.getElementById('a1label').innerHTML = "Yes";
		document.getElementById('a2label').innerHTML = "No";	
	
	}
	else if (question == 4){		
		document.getElementById("ques").innerHTML = "Did you find it difficult to start using the system?";
		document.getElementById('a1label').innerHTML = "Yes";
		document.getElementById('a2label').innerHTML = "No";
	}
	
	else if (question == 5){// terminal, move to next section	
		document.getElementById('ques').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
		document.getElementById('nextButton').hidden = "";
	}
	
	else if (question == 6){
		document.getElementById('ques').innerHTML = "Are you struggling with distracting thoughts and/or environment?";
		document.getElementById('a1label').innerHTML = "Yes";
		document.getElementById('a2label').innerHTML = "No";
	}
	else if (question == 7){
		document.getElementById('ques').innerHTML = "Do you feel uncomfortable with using any aspect of the Calendar/Task-List system?";
		document.getElementById('a1label').innerHTML = "Yes";
		document.getElementById('a2label').innerHTML = "No";		
	}
	else if (question == 8){
		document.getElementById('ques').innerHTML = "Do you feel that the system and/or program require more effort than you think it's worth? ";
		document.getElementById('a1label').innerHTML = "Yes";
		document.getElementById('a2label').innerHTML = "No";		
	}
	else if (question == 9){
		document.getElementById('ques').innerHTML = "Are you getting adequate sleep? (7-9 hrs)";
		document.getElementById('a1label').innerHTML = "Yes";
		document.getElementById('a2label').innerHTML = "No";	
	}
	else if (question == 10){ // terminal
		document.getElementById('ques').innerHTML = "Contact your therapist if you feel consistently depressed, anxious, or inexplicably tired. </br> These feelings can have an impact on your motivation, focus, and health.";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";	
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";	
		//document.getElementById('nextButton').hidden = "";		
		//document.getElementById('submitButton').hidden = "hidden";
		
	}
	else if (question == 11){
		document.getElementById('ques').innerHTML = "Did you take 15 minutes (e.g. on a Sunday) to plan the week ahead using your calendar?";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";	
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";	
	}
	else if (question == 12){
		document.getElementById('ques').innerHTML = "Did you enter all routine items to your calendar? (e.g. Studying, Labs, tutorials, work, extracurricular activities, bed-time)";
		
	}
	else if (question == 13){
		document.getElementById('ques').innerHTML = "Did you enter items from your Daily and Master Task-Lists?";
	}
	else if (question == 14){
		// in case of back button
		document.getElementById('ques').hidden = "";
		
		document.getElementById('ques').innerHTML = "Did you enter items that are specific to the coming week? (e.g. assignments, studying, errands, administrative tasks for school)?";		
		
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		
		document.getElementById('nextButton').hidden = "hidden";
		document.getElementById('submitButton').hidden = "";
	}
	else if (question == 15){ // terminal question
		document.getElementById('ques').innerHTML = "Now that we have reviewed your Calendar, please refer to your Summary Sheet as we begin to prepare your Task-List and Calendar for next week. ";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
		document.getElementById('backButton').hidden = "";
		document.getElementById('nextButton').hidden = "";
		document.getElementById('submitButton').hidden = "hidden";
	}
	else if (question == 16){
		document.getElementById('ques').innerHTML = "Are you unsure of how much time to assign to each task?";		
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		
		document.getElementById('nextButton').hidden = "hidden";
		document.getElementById('submitButton').hidden = "";
		
	}
	
	

}

</script>

<p id="opening">Good job on using the Calendar 
Please answer the following questions to help us identify issues that prevented you from using the Task-List   </p>
<p id="ques">  Did you have issues with 1 or more of the following? </p>
	
<input type="radio" id="a1" name="answers" value=0 checked ><label for="a1" id="a1label" >Trouble with motivation</label><br>
<input type="radio" id="a2" name="answers" value=1 ><label for="a2" id="a2label">Trouble remembering to use the system</label><br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	
<form method='post' action="Planning.php">
<button id="nextButton" hidden="hidden" onclick="Planning.php"> Next Section
</button>
</form>

</body>
</html>