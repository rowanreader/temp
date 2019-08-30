<!DOCTYPE html>
<html>
<body>

<h2> Evaluation </h2>
<p><font color='gray'> Check In </font></p>
<p><font color='red'> Main Section </font></p>
<p><font color='gray'> Planning </font></p>


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
				document.getElementById('opening').innerHTML = "Keep it up!";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please review distractibility delay</br>On a piece of paper or a note app write thought down distracting thoughts/newly arisen tasks</br>On next break you may return to the thought and determine its priority and add it to the task list</br>Also, be aware that the task may truly be unimportant and not added to task list as this will add to the feeling overwhelmed</br>Ask yourself whether the thought is more important or simply more attractive! ";
			}
		
			break;
		}
		case 2:{
			question = 3;
			if (document.getElementById('a1').checked){
				document.getElementById('distButton').hidden = "";
				document.getElementById('opening').innerHTML = "";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('assessButton').hidden = "";
				document.getElementById('opening').innerHTML = "";
			}
			break;
		}
	}

	
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){
	if (question == 1){
		document.getElementById('opening').innerHTML = "Evaluate how well you managed your distractions this past week by considering the following questions:";
		document.getElementById('ques').innerHTML = "Did you utilize the distractibility-delay technique this week?";
		document.getElementById('backButton').hidden = "hidden";
	}
	else if (question == 2){
		document.getElementById('ques').innerHTML = "Did you struggle to manage distractions this week?";
		document.getElementById('backButton').hidden = "";
		document.getElementById('submitButton').hidden = "";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		document.getElementById('distButton').hidden = "hidden";
		document.getElementById('assessButton').hidden = "hidden";
	}
	else if (question == 3){
		document.getElementById('ques').innerHTML = "Please move to the next section";
		document.getElementById('submitButton').hidden = "hidden";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
		
	}

}

</script>

<p id="opening"> Evaluate how well you managed your distractions this past week by considering the following questions: </p>
<p id="ques"> Did you utilize the distractibility-delay technique this week? </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<form method='post' action='Distractibility7.php'>
<button id="distButton" hidden="hidden" onclick="Dist.php"> Next Section
</button>
</form>

<form method='post' action='Assess.php'>
<button id="assessButton" hidden="hidden" onclick="Assess.php"> Next Section
</button>

</body>
</html>