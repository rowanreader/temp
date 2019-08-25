<!DOCTYPE html>
<html>
<body>

<h2> New Skills </h2>


<script>
var backBtn = [0,1]; // keep track of questions
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
		case 1:{ // next question is the same
			question = 2;
			if (document.getElementById('a1').checked){ // yes
				document.getElementById("opening").innerHTML = "Great! Please have your summary sheet ready to refer to during the session.";
			}
			else if (document.getElementById('a2').checked){ // no
				document.getElementById("opening").innerHTML = "Please watch the module and refer to the Summary Sheet sent to you via email. </br>You can try to implement these practices next week and beyond! ";
			}	
			break;
		}
		case 2:{
			document.getElementById("opening").innerHTML = "";
			if (document.getElementById('a1').checked){
				question = 3; // A block
			}
			else if (document.getElementById('a2').checked){ // calender
				question = 4; // B block
			}	
			else if (document.getElementById('a3').checked){ // tasklist
				question = 5; // C block
			}	
			else if (document.getElementById('a4').checked){ // neither
				question = 6;
			}	
			break;
		}
	} // end switch
	
	document.getElementById('a1').checked = true;
	allQuestions();
}

function allQuestions(){
	if (question == 1){		
		document.getElementById("a1label").innerHTML = "Yes";
		document.getElementById("a2label").innerHTML = "No";
		document.getElementById("ques").innerHTML = "Did you encounter any technical issues when trying to access the module? ";
		document.getElementById("backButton").hidden="hidden";
		document.getElementById("a3").hidden="hidden";
		document.getElementById("a4").hidden="hidden";
		document.getElementById("a1").hidden="";
		document.getElementById("a2").hidden="";
	}
	else if (question == 2){
		
		document.getElementById("a1").hidden="";
		document.getElementById("a2").hidden="";	
		document.getElementById("a3").hidden="";
		document.getElementById("a4").hidden="";	
		document.getElementById("a1label").hidden="";
		document.getElementById("a2label").hidden="";		
		document.getElementById("a3label").hidden="";
		document.getElementById("a4label").hidden="";
		document.getElementById("a1label").innerHTML = "Yes, I used both";
		document.getElementById("a2label").innerHTML = "Only the calender";
		document.getElementById("a3label").innerHTML = "Only the Task-List";
		document.getElementById("a4label").innerHTML = "Neither";
		document.getElementById("backButton").hidden="";
		document.getElementById("submitButton").hidden="";
		document.getElementById("AButton").hidden="hidden";
		
		document.getElementById("BButton").hidden="hidden";
		
		document.getElementById("CButton").hidden="hidden";
		
		document.getElementById("DButton").hidden="hidden";
	}
	else if (question == 3){	
	
		document.getElementById("a1").hidden="hidden";
		document.getElementById("a2").hidden="hidden";
		document.getElementById("a3").hidden="hidden";
		document.getElementById("a4").hidden="hidden";	
			
		document.getElementById("a1label").hidden="hidden";
		document.getElementById("a2label").hidden="hidden";			
		document.getElementById("a3label").hidden="hidden";
		document.getElementById("a4label").hidden="hidden";
		document.getElementById("ques").innerHTML = "Good Job!";
		// unhide next section button
		document.getElementById("AButton").hidden="";
		document.getElementById("submitButton").hidden="hidden";
	}
	else if (question == 4){	

		document.getElementById("a1").hidden="hidden";
		document.getElementById("a2").hidden="hidden";
		document.getElementById("a3").hidden="hidden";
		document.getElementById("a4").hidden="hidden";	
			
		document.getElementById("a1label").hidden="hidden";
		document.getElementById("a2label").hidden="hidden";			
		document.getElementById("a3label").hidden="hidden";
		document.getElementById("a4label").hidden="hidden";	
		document.getElementById("ques").innerHTML = "Good job on using the Calendar </br>Please answer the following questions to help us identify issues that prevented you from using the Task-List !";
		// unhide next section button
		document.getElementById("BButton").hidden="";
		document.getElementById("submitButton").hidden="hidden";
	}
	else if (question == 5){	

		document.getElementById("a1").hidden="hidden";
		document.getElementById("a2").hidden="hidden";
		document.getElementById("a3").hidden="hidden";
		document.getElementById("a4").hidden="hidden";	
			
		document.getElementById("a1label").hidden="hidden";
		document.getElementById("a2label").hidden="hidden";			
		document.getElementById("a3label").hidden="hidden";
		document.getElementById("a4label").hidden="hidden";	
		document.getElementById("ques").innerHTML = "Good job on the Task-List </br>Please answer the following questions to help us identify issues that prevented you from using the Calendar. !";
		// unhide next section button
		document.getElementById("CButton").hidden="";
		document.getElementById("submitButton").hidden="hidden";
	}
	else if (question == 6){	

		document.getElementById("a1").hidden="hidden";
		document.getElementById("a2").hidden="hidden";
		document.getElementById("a3").hidden="hidden";
		document.getElementById("a4").hidden="hidden";	
			
		document.getElementById("a1label").hidden="hidden";
		document.getElementById("a2label").hidden="hidden";			
		document.getElementById("a3label").hidden="hidden";
		document.getElementById("a4label").hidden="hidden";	
		document.getElementById("ques").innerHTML = "Please move on to the next section.";
		// unhide next section button
		document.getElementById("DButton").hidden="";
		document.getElementById("submitButton").hidden="hidden";
	}
}

</script>

<p id="opening">  </p>
<p id="ques"> Did you watch Module 2 on using a Calendar and Task-List?  </p>
	
<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</label><br>
<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</label><br>
<input type="radio" id="a3" name="answers" value=2 hidden="hidden"><label for="a3" id="a3label" hidden="hidden"></label><br>
<input type="radio" id="a4" name="answers" value=3 hidden="hidden"><label for="a4" id="a4label" hidden="hidden"></label><br>

</br>
<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>	
<form method='post'action="TransitionA.php">
<button id="AButton" hidden="hidden" onclick="TransitionA.php"> Next Section
</form>

<form method='post'action="TransitionB.php">
<button id="BButton" hidden="hidden" onclick="TransitionB.php"> Next Section
</form>
<form method='post'action="TransitionC.php">
<button id="DButton" hidden="hidden" onclick="TransitionC.php"> Next Section
</form>
<form method='post'action="TransitionD.php">
<button id="CButton" hidden="hidden" onclick="DBlock.php"> Next Section
</form>
</button>

</body>
</html>