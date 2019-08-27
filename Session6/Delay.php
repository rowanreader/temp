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
	}

	
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){

}

</script>

<p id="opening">  </p>
<p id="ques">   </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>
<input type="radio" id="a3" name="answers" value=2 hidden="hidden"><label for="a3" id="a3label" hidden="hidden"></label><br>
<input type="radio" id="a4" name="answers" value=3 hidden="hidden"><label for="a4" id="a4label" hidden="hidden"></label><br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<button id="nextButton" hidden="hidden" onclick="TransitionA.php"> Next Section
</button>

</body>
</html>