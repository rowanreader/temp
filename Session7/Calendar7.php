<!DOCTYPE html>
<html>
<body>

<h2> Calendar </h2>



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
	backBtn.push(question);
	switch(question){
		case 1:{
			question = 2;
			if (document.getElementById('a1').checked){
					document.getElementById('opening').innerHTML = "Good job. To make this easier we will be planning the week ahead after the next couple of questions.";
			}
			else if (document.getElementById('a2').checked){
					document.getElementById('opening').innerHTML = "Okay. You will be able to try this for the coming week, as we will be planning the week ahead after the next couple of questions.";
			}
			break;
		}
		case 2:{
			question = 3;
			if (document.getElementById('a1').checked){
					document.getElementById('opening').innerHTML = "Good job.";
			}
			else if (document.getElementById('a2').checked){
					document.getElementById('opening').innerHTML = "Okay. You will be able to try this for the coming week, as we will be planning the week ahead after the next couple of questions.";
			}
			break;
		}
		case 3:{
			question = 4;
			if (document.getElementById('a1').checked){
					document.getElementById('opening').innerHTML = "Good job.";
			}
			else if (document.getElementById('a2').checked){
					document.getElementById('opening').innerHTML = "Okay. You will be able to try this for the coming week, as we will be planning the week ahead after the next couple of questions.";
			}
			break;
		}
		case 4:{
			
			if (document.getElementById('a1').checked){
					document.getElementById('opening').innerHTML = "Good job.";
					question = 5;
			}
			else if (document.getElementById('a2').checked){
					document.getElementById('opening').innerHTML = "Okay. You will be able to try this for the coming week, as we will be planning the week ahead after the next couple of questions.";
					question = 6;
			}
			break;
		}
		case 6:{
			question = 5;
			if (document.getElementById('a1').checked){
					document.getElementById('opening').innerHTML = "Try using the <a target='_blank' href='https://ctl.utsc.utoronto.ca/assignmentcal/'>UofT assignment</a> calculator to help you determine time needed () .";
					
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
		document.getElementById('ques').innerHTML = "Did you take 15 minutes (e.g. on a Sunday) to plan the week ahead using your calendar?";
		document.getElementById('backButton').hidden = "hidden";
	}
	else if (question == 2){
		document.getElementById('ques').innerHTML = "Did you enter all routine items to your calendar? (e.g. Studying, Labs, tutorials, work, extracurricular activities, bed-time)";
		document.getElementById('backButton').hidden = "";
	}
	else if (question == 3){
		document.getElementById('ques').innerHTML = "Did you enter items from your Daily and Master Task-Lists?";
	}
	else if (question == 4){
		// in case of back button
		document.getElementById('ques').hidden = "";
		
		document.getElementById('ques').innerHTML = "Did you enter items that are specific to the coming week? (e.g. assignments, studying, errands, administrative tasks for school)?";		
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('nextButton').hidden = "hidden";
		
		document.getElementById('submitButton').hidden = "";
	}
	else if (question == 5){ // terminal question
		document.getElementById('ques').hidden = "hidden";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
		document.getElementById('nextButton').hidden = "";
		document.getElementById('backButton').hidden = "";
		document.getElementById('submitButton').hidden = "hidden";
	}
	else if (question == 6){
		document.getElementById('ques').innerHTML = "Are you unsure of how much time to assign to each task?";		
	}
	
}

		
		
</script>
<p id="opening">  </p>
<p id="ques"> Did you take 15 minutes (e.g. on a Sunday) to plan the week ahead using your calendar? </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	
<form method='post' action='Eval7.php'>
<button id="nextButton" hidden="hidden" onclick="Eval7.php"> Next Section
</button>
</form>
</body>
</html>