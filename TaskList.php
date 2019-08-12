<!DOCTYPE html>
<html>
<body>

<h2> Task List </h2>



<script>

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
				document.getElementById('opening').innerHTML = "Good job!";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please refer to your summary sheet for module 2";
			}
			break;
		}
		case 2:{
			question = 3;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Keep up the good work!";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please refer to your summary sheet for module 2";
			}
			break;
		}
		case 3:{
			question = 4;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Good work. It is important to add items to the Master List as soon as they arise in order to prevent you from forgetting about it, or abandoning the task at hand. ";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Try to do this next week. Please refer to your summary sheet for module 2";
			}
			break;
		}
	}
}

function allQuestions(){
	if (question == 1){
		document.getElementById('ques') = "Did you create separate Master and Daily Task-Lists?";
	}
	else if (question == 2){
		document.getElementById('ques') = "Did you incorporate all tasks in the foreseeable future on your Master Task-List?";
	}
	else if (question == 3){
		document.getElementById('ques') = "Did you add items to the Master Task-List as the arose? ";
	}
}
</script>
<p id="opening">  </p>
<p id="ques"> Did you create separate Master and Daily Task-Lists?   </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	

<button type="button" id="nextButton" hidden="hidden" onclick="TaskList.php"> Next Section
</button>

</body>
</html>