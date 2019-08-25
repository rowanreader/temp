<!DOCTYPE html>
<html>
<body>

<h2> Delay </h2>


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
				document.getElementById('opening').innerHTML = "Please inform your therapist";
			}
			break;
		}
	}
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){
	if (question == 1){
		document.getElementById('ques').innerHTML = "Have you tried using the distractibility delay technique to mitigate internal distractions?";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		document.getElementById('nextButton').hidden = "hidden";
		document.getElementById('submitButton').hidden = "";		
		document.getElementById('backButton').hidden = "hidden";
	}
	else if (question == 2){
		document.getElementById('ques').innerHTML = "Sometmes our distracting thoughts and/or feelings are negative and are more difficult to ignore temporarily using the Distractibility Technique </br>Keeping a thought record can help manage these thoughts.";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
		document.getElementById('nextButton').hidden = "";
		document.getElementById('submitButton').hidden = "hidden";		
		document.getElementById('backButton').hidden = "";
	}

}

</script>

<p id="opening"> The following questions will help us identify roadblocks that you may have encountered while attempting to form new, positive work habits. </p>
<p id="ques"> Have you tried using the distractibility delay technique to mitigate internal distractions?   </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label"></label>No<br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<button type="button" id="nextButton" hidden="hidden" onclick="TransitionA.php"> Next Section
</button>

</body>
</html>