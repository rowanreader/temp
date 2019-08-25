<!DOCTYPE html>
<html>
<body>

<h2> Sleep </h2>


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
				document.getElementById('opening').innerHTML = "Good job! This is an important aspect of performance in school and daily tasks.";
			}
			else if (document.getElementById('a2').checked){
				question = 3;
			}
			break;
		}
		case 2:{
			question = 4; // Sleep Hygiene
			if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Keep a sleep journal to determine which duration, bedtime, and wake-up time is best for you.";
				
			}
			break;
		}
		case 3:{
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Plan for 7-9h of sleep when planning your calendar this week.";
				question = 4;
			}
			else if (document.getElementById('a2').checked){
				question = 5;
			}
			break;
		}
		case 5:{
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Keep a sleep journal to determine which duration, bedtime, and wake-up time is best for you.";
				question = 4;
			}
			else if (document.getElementById('a2').checked){
				question = 6;
			}
			break;
		}
		case 6:{
			question = 4;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML ="Continue to monitor trends in your sleep. Contact your therapist or a doctor if you are experiencing depression, anxiety, or have a known medical problem such as issues with iron levels or your thyroid.";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML ="Keep a sleep journal to determine which duration, bedtime, and wake-up time is best for you.";
			}
			break;
		}
		
		
	}

	
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){
	if (question == 1){
		document.getElementById('ques').innerHTML = "Do you regularly get 7-9h of sleep?";
		document.getElementById('backButton').hidden = "hidden";
	}
	else if (question == 2){
		document.getElementById('ques').innerHTML = "Do you normally feel well rested?";
		document.getElementById('backButton').hidden = "";
		document.getElementById('nextButton').hidden = "hidden";
		document.getElementById('submitButton').hidden = "";
	}
	else if (question == 3){
		document.getElementById('ques').innerHTML = "Do you normally feel well rested? ";
	}
	else if (question == 4){
		// send to sleep hygene
		document.getElementById('nextButton').hidden = "";
		document.getElementById('submitButton').hidden = "hidden";
	}
	else if (question == 5){
		document.getElementById('ques').innerHTML = "Does your fatigue improve depending on the amount of sleep you get?";
	}
	else if (question == 6){
		document.getElementById('ques').innerHTML = "Do you keep a sleep journal?";
	}

}

</script>

<p id="opening">  </p>
<p id="ques"> Do you regularly get 7-9h of sleep? </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label" hidden="hidden">Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label" hidden="hidden"></label>No<br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<button type="button" id="nextButton" hidden="hidden" onclick="SleepHygiene.php"> Next Section
</button>

</body>
</html>