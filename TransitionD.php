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
	}

	
	document.getElementById('a1').checked = true;
	allQuestions();
}
	
function allQuestions(){

}

</script>

<p id="opening">  </p>
<p id="ques"> Good job on using the Calendar 
Please answer the following questions to help us identify issues that prevented you from using the Task-List   </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label" >Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label" ></label>No<br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<button type="button" id="nextButton" hidden="hidden" onclick="TransitionA.php"> Next Section
</button>

</body>
</html>