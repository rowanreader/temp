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
			if (document.getElementById('a1').checked){
				document.getElementById('planButton').hidden = "";
				document.getElementById('opening').innerHTML = "";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('roadButton').hidden = "";
				document.getElementById('opening').innerHTML = "Do not worry, the lessons learned in Module 5 are often the most challenging to adopt. It is very important to review the principles behind solving your thinking roadblocks and addressing your issues at the Midweek meeting. ";
			}
			break;
		}
	}

	
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){
	if (question == 1){
		document.getElementById('opening').innerHTML = " Please assess your Self-Talk last week:</br>Consistently re-evaluated and controlled negative and persistent thoughts (may use a Thought Record)</br>Replacing Thinking Errors holding you back from your full potential</br>Completed your tasks despite negative mood or low motivation (i.e. building perseverance) ";
		document.getElementById('ques').innerHTML = "Did your achieve all of the above? ";
	}
	else if (question == 2){
		document.getElementById('ques').innerHTML = "Please move to the next section";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
		document.getElementById('submitButton').hidden = "hidden";
	}

}

</script>

<p id="opening"> Please assess your Self-Talk last week: 
Consistently re-evaluated and controlled negative and persistent thoughts (may use a Thought Record)
Replacing Thinking Errors holding you back from your full potential 
Completed your tasks despite negative mood or low motivation (i.e. building perseverance) </p>
<p id="ques"> Did your achieve all of the above?</p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label" >Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label" ></label>No<br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	


<form method='post' action='Planning7.php'>
<button id="planButton" hidden="hidden" onclick="Plannin7.php"> Next Section
</button>
</form>


<form method='post' action='Roadblocks7.php'>
<button id="roadButton" hidden="hidden" onclick="Roadblocks7.php"> Next Section
</button>
</form>

</body>
</html>