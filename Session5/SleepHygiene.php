<!DOCTYPE html>
<html>
<body>

<h2> Sleep Hygiene </h2>


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
			question = 3;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Try writing your thoughts on a notepad. You can return to them in the morning. ";
			}
			break;
		}
		case 3:{
			question = 4;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Try putting your phone/laptop/tablet away 30 minutes before bed</br>If possible, sleep with your phone away from you, or in another room</br>These practices will improve your ability to fall asleep and your overall sleep quality. ";
			}
			break;
		}
		case 4:{
			question = 5;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Smart decision. This practice can improve ability to fall asleep and your overall sleep quality. ";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = " Try incorporating this into your bedtime routine next week. This practice can improve ability to fall asleep and your overall sleep quality.";
			}
			break;		
		}
		case 5:{
			question = 6;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Try stopping these activiites earlier (e.g. 1h before, then 2h before, then 3h before bed). </br>These activities before bed can impair your ability to fall asleep and your quality of sleep. ";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Smart decision. These activities before bed can impair your ability to fall asleep and your quality of sleep.";
			}
			break;
		}
	}

	
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){
	if (question == 1){
		document.getElementById('ques').innerHTML = "Do you have trouble falling asleep?";
		document.getElementById('backButton').hidden = "hidden";
	}
	else if (question == 2){		
		document.getElementById('ques').innerHTML = "Do nagging thoughts keep you awake?";
		document.getElementById('backButton').hidden = "";
	}
	else if (question == 3){
		document.getElementById('ques').innerHTML = "Do you use technology before bed, or while in bed?";
	}
	else if (question == 4){
		document.getElementById('ques').innerHTML = "Do you put your phone on Do Not Disturb before going to bed?";
	}
	else if (question == 5){
		document.getElementById('ques').innerHTML = "Do you consume alcohol, caffeine, or exercise 3h before bed?";
		document.getElementById('submitButton').hidden = "";
		document.getElementById('nextButton').hidden = "hidden";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
	}
	else if (question == 6){
		document.getElementById('ques').innerHTML = "If you have fatigue that doesn't improve with the strategies outlined in Module 4, please contact your therapist</br>Certain medications can causer fatigue. Please contact your physician, therapist, or the health and wellness centre if you experience one or more of the following:</br>Depression</br>Anxiety</br>Known issues with iron, thyroid, or other conditions ";
		document.getElementById('submitButton').hidden = "hidden";
		document.getElementById('nextButton').hidden = "";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
	}
}

</script>

<p id="opening">  </p>
<p id="ques"> Do you have trouble falling asleep?  </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<form method='post' action='Planning5.php'>
<button id="nextButton" hidden="hidden"> Next Section
</button>
</form>

</body>
</html>