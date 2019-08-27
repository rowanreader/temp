<!DOCTYPE html>
<html>
<body>

<h2> Assessment </h2>


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
			question = 2;
			if (document.getElementById('a1').checked){
				document.getElementById('selfButton').hidden = "";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('sleepButton').hidden = "";	
			}
			break;
		}
	}

	
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){
	if (question == 1){		
		document.getElementById('opening').innerHTML ="Please assess whether you achieved the following Sleep Habits/Goals last week:</br>7-9h of sleep each night</br>High quality, restful sleep</br>No difficulties falling asleep</br>No mid-sleep interruptions</br>No caffeine, alcohol, or exercise 3h before bedtime";
		document.getElementById('ques').innerHTML ="Did your achieve all of the above?";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		document.getElementById('submitButton').hidden = "";
		document.getElementById('backButton').hidden = "hidden";
		document.getElementById('selfButton').hidden = "hidden";
		document.getElementById('sleepButton').hidden = "hidden";
	}
	else if (question == 2){
		document.getElementById('opening').innerHTML ="";
		document.getElementById('ques').innerHTML ="Please move on to the next section";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
		document.getElementById('submitButton').hidden = "hidden";
		document.getElementById('backButton').hidden = "";
	}
}

</script>

<p id="opening"> Please assess whether you achieved the following Sleep Habits/Goals last week: </br>
7-9h of sleep each night </br>
High quality, restful sleep</br>
No difficulties falling asleep</br>
No mid-sleep interruptions </br>
No caffeine, alcohol, or exercise 3h before bedtime  </p>
<p id="ques">Did your achieve all of the above? </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label" >Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label" >No</label><br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<form method='post' action='SelfTalk.php'>
<button id="selfButton" hidden="hidden"> Next Section
</button>
</form>

<form method='post' action='Sleep7.php'>
<button id="sleepButton" hidden="hidden"> Next Section
</button>
</form>

</body>
</html>