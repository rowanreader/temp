<!DOCTYPE html>
<html>
<body>

<h2> Section C </h2>

<p><font color='gray'> Check In </font></p>
<p><font color='red'> Main Section </font></p>
<p><font color='gray'> Planning </font></p>

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
		case 0:{
			question = 1;
			break;
		}
		case 1:{
			document.getElementById('opening').innerHTML = "";
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
			document.getElementById('opening').innerHTML = "";
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
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "";
			}
			break;
		}
		case 7:{
			question = 8;
			if (document.getElementById('a1').checked){				
				document.getElementById('opening').innerHTML = "Do not worry. It is normal to be uncomfortable navigating new systems at first, and even harder to build a sustainable habit -- often 10-12 weeks. Keep sticking to the plan and use the system next week. If you need to make slight modifications, such as using paper and pen for comfort-level, please refer back to Module 2 where this is discussed.";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "";
			}
			break;
		}
		case 8:{
			question = 9;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Implementing significant behaviour change is very challenging at the beginning. </br>It takes weeks before things start to become easier, however, it does work if you stick with it!</br>This program will help you fulfill your true potential by assisting you in organizational and time-management skills.</br>Keep trying and it will become easier when you begin to see positive results in the later sessions "
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "";
			}
			break;
		}
		case 9:{
			question = 10;
			if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Consider arranging your schedule in your calendar next week to aim for 7-9 hrs of sleep.</br>We will discuss sleep issues and how to address them in Module 4 in two weeks. ";
			}	
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "";
			}
			
			break;
		}
		case 10:{
			document.getElementById('opening').innerHTML = "";
			question = 11;
			break;
		}
		case 11:{
			question = 12;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Good job!";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please refer to your summary sheet for module 2";
			}
			break;
		}
		case 12:{
			question = 13;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Keep up the good work!";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please refer to your summary sheet for module 2";
			}
			break;
		}
		case 13:{
			question = 14;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Good work. It is important to add items to the Master List as soon as they arise in order to prevent you from forgetting about it, or abandoning the task at hand. ";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Try to do this next week. Please refer to your summary sheet for module 2";
			}
			break;
		}
		case 14:{
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = ""
				question = 15;
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please try to do this next week."
				question = 16;
			}
			break;
		}
		case 15:{
			if (document.getElementById('a1').checked){
				question = 17;
				document.getElementById('opening').innerHTML = "";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Try to do this next week. Please refer to your Summary Sheet for Module 2"
				question = 16; // terminal, not a question
			}
			break;
		}
		case 16:{ 
			document.getElementById('opening').innerHTML = "";
			question = 20;
			break;
		}
		
		case 17:{
			document.getElementById('opening').innerHTML = "";
			question = 18;
			break;
		}
		case 18:{
			if (document.getElementById('a1').checked){
				question = 19;
				document.getElementById('opening').innerHTML = "";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Try to do this next week. Please refer to your Summary Sheet for Module 2";
				question = 16; // terminal, not a question
			}
			break;
		}
		case 19:{
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Try making note of each time you were distracted and what was distracting you (this includes thoughts). You can then try to avoid these distractions in future study sessions. Do not worry if this seems difficult at first, next week's module will cover Distractibility! ";
				question = 16;
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Adjust your time parameters accordingly.";
				question = 16; // terminal, not a question
			}
			break;
		}
	}

	
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){
	if (question == 1){
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
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
		//document.getElementById('nextButton').hidden = "";		
		//document.getElementById('submitButton').hidden = "hidden";
		
	}
	else if (question == 11){
		document.getElementById('ques').innerHTML = "Did you create separate Master and Daily Task-Lists?";
		//document.getElementById('backButton').hidden = "hidden";
	}
	else if (question == 12){
		document.getElementById('ques').innerHTML = "Did you incorporate all tasks in the foreseeable future on your Master Task-List?";
		//document.getElementById('backButton').hidden = "";
	}
	else if (question == 13){
		document.getElementById('ques').innerHTML = "Did you add items to the Master Task-List as the arose? ";
	}
	else if (question == 14){
		document.getElementById('ques').innerHTML = "Did you create time parameters for your tasks?";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";		
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		document.getElementById('submitButton').hidden = "";
		document.getElementById('nextButton').hidden = "hidden";
	}
	else if (question == 15){
		document.getElementById('ques').innerHTML = "Did you record the actual time it took to complete said tasks?";	
		//document.getElementById('nextButton').hidden = "hidden";
		//document.getElementById('submitButton').hidden = "";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";		
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		document.getElementById('submitButton').hidden = "";
		document.getElementById('nextButton').hidden = "hidden";
	}
	else if (question == 16){ // terminal
		document.getElementById('ques').innerHTML = "Please refer to your Summary Sheet from Module 2 and make sure to include the following on your Task-Lists this week: </br> Include study time </br>Assign priority Levels to tasks (e.g. A-level, B-level, C-level)</br>Did you complete all A-level tasks before B-level etc.? ";
		document.getElementById('nextButton').hidden = "";
		document.getElementById('submitButton').hidden = "hidden";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
	}
	else if (question == 17){
		document.getElementById('ques').innerHTML = "Were your time parameters accurate?";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
	}
	else if (question == 18){		
		document.getElementById('ques').innerHTML = "Did your tasks take longer than expected?";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		document.getElementById('submitButton').hidden = "";
		document.getElementById('nextButton').hidden = "hidden";
	}
	else if (question == 19){
		document.getElementById('ques').innerHTML = "Was your study time interrupted with distractions?";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		document.getElementById('submitButton').hidden = "";
		document.getElementById('nextButton').hidden = "hidden";
	}
	else if (question == 20){
		document.getElementById('ques').innerHTML = "Now that we have reviewed your Task-List, please refer to your Summary Sheet as we begin to prepare your Task-List and Calendar for next week.";
		document.getElementById('submitButton').hidden = "hidden";
		document.getElementById('nextButton').hidden = "";
	}

}

</script>

<p id="opening">  </p>
<p id="ques"> Good job on the Task-List 
Please answer the following questions to help us identify issues that prevented you from using the Calendar.  </p>

<input type="radio" id="a1" name="answers" value=0 checked hidden="hidden"><label for="a1" id="a1label" hidden="hidden">Yes</label><br>
<input type="radio" id="a2" name="answers" value=1 hidden="hidden"><label for="a2" id="a2label" hidden="hidden">No</label><br>

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