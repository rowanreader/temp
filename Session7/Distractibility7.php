<!DOCTYPE html>
<html>
<body>

<h2> Check In </h2>
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
	backBtn.push(question)
	switch (question) {
		case 1:{
			question = 2;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Good work. It is also important to identify what the distractions were and how you can remove them in the future. "
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Try this next week. Make note of what the distraction was and apply the appropriate strategy (outlined in this module). This will also allow you to determine your baseline attention span (please refer to your Summary Sheet for more information).";
			}			
			break;
		}
		
		case 2:{
			if (document.getElementById('a1').checked){
				question = 3;
			}
			else if (document.getElementById('a2').checked){
				question = 4;
			}
			break;
		}
		
		case 3:{
			question = 4;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Keep trying, you will improve in your ability to ignore unimportant thoughts with time.";
			}
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Please review Module 3 and employ this technique in the coming week.";
			}
			break;
		}
		
		case 4:{
			question = 5;
			if (document.getElementById('c1').checked || document.getElementById('c2').checked || document.getElementById('c3').checked){
				document.getElementById('c1text').innerHTML = "Turn phone on Do Not Disturb & place out of the room. You can check it during a break or after the task is complete.</br>Delete distracting apps during day. Re-download after tasks have been completed</br>Consider blocking all contacts except for those whom you MUST have urgent contact with</br>";   
			}
			if (document.getElementById('c4').checked){
				document.getElementById('c2text').innerHTML = "Website blocker function on the 'Freedom' app</br>Close all unnecessary tabs</br>";
			}
			if (document.getElementById('c5').checked){
				document.getElementById('c3text').innerHTML = "Turn off television, radio, avoid overly loud areas, avoid catchy - lyrical music";
			}
			if (document.getElementById('c6').checked){
				document.getElementById('c4text').innerHTML = "Avoid studying in areas where food is being made if aromas are distracting ";
			}
			break;
		}
		
		case 5:{
			question = 6;
			break;
		}
		
		case 6:{
			question = 7;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Add these proposed changes as items on your Master Task-List for the coming week";
			}
			
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Continue to keep your workspace clean and efficient!";
			}
			break;
		}
		
		case 7:{
			question = 8;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Continue to keep your workspace clean and efficient! Be sure to always place your items in these designated spots.  ";
			}
			
			else if (document.getElementById('a2').checked){
				document.getElementById('opening').innerHTML = "Add these proposed changes as items on your Master Task-List for the coming week.";
			}
			break;
		}
		
		case 8:{
			question = 9;
			break;
		}		
		
		case 9:{
			question = 10;
			if (document.getElementById('a1').checked){
				document.getElementById('opening').innerHTML = "Avoid scrolling through social media on breaks , it is easy to lose track of time</br>Avoid starting new tasks during a break</br>Aim to incorporate some physical movement into your break time</br>Set an alarm for 5-15 minutes depending on how long your break is  ";
			}
			break;
		}
		
	} // end switch
	document.getElementById('a1').checked = true;
	allQuestions();
} // end function nextQuestion


function allQuestions(){
	if (question == 1){
		document.getElementById('ques').innerHTML = "Did you take note of unproductive time due to distractions?";
		document.getElementById('backButton').hidden = "hidden";
	}
	else if (question == 2){
		document.getElementById('ques').innerHTML = "Did you struggle with any internal distractions (i.e. thoughts that break your focus)?";
		document.getElementById('backButton').hidden = "";
	}
	else if (question == 3){
		document.getElementById('ques').innerHTML = "Did you try to employ the distractibility delay technique?";
	}
	else if (question == 4){
		document.getElementById('ques').innerHTML = "Did you struggle with any external distractions listed below this week?</br>Please check all that apply.";
		document.getElementById('c1').hidden = "";
		document.getElementById('c2').hidden = "";
		document.getElementById('c3').hidden = "";
		document.getElementById('c4').hidden = "";
		document.getElementById('c5').hidden = "";
		document.getElementById('c6').hidden = "";
		document.getElementById('c1label').hidden = "";
		document.getElementById('c2label').hidden = "";
		document.getElementById('c3label').hidden = "";
		document.getElementById('c4label').hidden = "";
		document.getElementById('c5label').hidden = "";
		document.getElementById('c6label').hidden = "";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
	}
	else if (question == 5){
		document.getElementById('ques').innerHTML = "Solutions";
	 
		document.getElementById('c1text').hidden = "";
		document.getElementById('c2text').hidden = "";
		document.getElementById('c3text').hidden = "";
		document.getElementById('c4text').hidden = "";
		
		document.getElementById('c1').hidden = "hidden";
		document.getElementById('c2').hidden = "hidden";
		document.getElementById('c3').hidden = "hidden";
		document.getElementById('c4').hidden = "hidden";
		document.getElementById('c5').hidden = "hidden";
		document.getElementById('c6').hidden = "hidden";
		document.getElementById('c1label').hidden = "hidden";
		document.getElementById('c2label').hidden = "hidden";
		document.getElementById('c3label').hidden = "hidden";
		document.getElementById('c4label').hidden = "hidden";
		document.getElementById('c5label').hidden = "hidden";
		document.getElementById('c6label').hidden = "hidden";
		
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
	}
	else if (question == 6){
		document.getElementById('ques').innerHTML = "Are there any improvements that could be made to your work environment?</br>E.g. turning desk away from window, closing the door at times, decluttering your space";
		
		document.getElementById('c1text').hidden = "hidden";
		document.getElementById('c2text').hidden = "hidden";
		document.getElementById('c3text').hidden = "hidden";
		document.getElementById('c4text').hidden = "hidden";
		
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
	}
	else if (question == 7){
		document.getElementById('ques').innerHTML = "Do you have a designated spot for each of your important items (e.g. wallet, phone, keys, chargers etc.)";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
	}
	
	else if (question == 8){
		document.getElementById('ques').innerHTML = "Music may be helpful to maintain focus on a particular task, however, our favourite songs, or many catchy -lyrical songs can actually break our focus. If you prefer to listen to music while studying, consider instrumental versions of songs or classical music! "
		
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
	}
	else if (question == 9){
		document.getElementById('ques').innerHTML = "Do you struggle to end your breaks in a timely manner? ";
		document.getElementById('a1').hidden = "";
		document.getElementById('a2').hidden = "";
		document.getElementById('a1label').hidden = "";
		document.getElementById('a2label').hidden = "";
		
		document.getElementById('submitButton').hidden = "";
		document.getElementById('nextButton').hidden = "hidden";
			
	}
	else if (question == 10){
		document.getElementById('ques').innerHTML = "";
		document.getElementById('a1').hidden = "hidden";
		document.getElementById('a2').hidden = "hidden";
		document.getElementById('a1label').hidden = "hidden";
		document.getElementById('a2label').hidden = "hidden";
		
		document.getElementById('submitButton').hidden = "hidden";
		document.getElementById('nextButton').hidden = "";
	
	}
}
</script>

<p id="opening"> </p>
<p id="ques"> Did you take note of unproductive time due to distractions? </p>
	
	<input type="radio" id="a1" name="answers" value=0 checked><label for="a1" id="a1label">Yes</br></label>
	<input type="radio" id="a2" name="answers" value=1><label for="a2" id="a2label">No</br></label>
	
	<input type="checkbox" id="c1" name="choose" hidden="hidden" value=0><label for="c1" id="c1label" hidden="hidden"> Phone applications (social media, games etc.)</label>  <br>
	<input type="checkbox" id="c2" name="choose" hidden="hidden" value=1><label for="c2" id="c2label" hidden="hidden"> Phone vibration/ring  </label>  <br>
	<input type="checkbox" id="c3" name="choose" hidden="hidden" value=2><label for="c3" id="c3label" hidden="hidden"> Email notifications </label>  <br>
	<input type="checkbox" id="c4" name="choose" hidden="hidden" value=3><label for="c4" id="c4label" hidden="hidden"> Internet Tabs (Facebook, YouTube etc.) </label>   <br>
	<input type="checkbox" id="c5" name="choose" hidden="hidden" value=4><label for="c5" id="c5label" hidden="hidden"> Background Noise  </label>  <br>
	<input type="checkbox" id="c6" name="choose" hidden="hidden" value=5><label for="c6" id="c6label" hidden="hidden"> Aromas </label>   <br>

<p id="c1text"></p>
<p id="c2text"></p>
<p id="c3text"></p>
<p id="c4text"></p>
</br>

<button type="button" id="backButton" onclick="goBack()" hidden="hidden"> Back
</button>
 	
<button type="button" id="submitButton" onclick="nextQuestion()"> Next
</button>
	
<form method="POST" action="Assess.php">
<button id="nextButton" hidden="hidden"> Next Section
</button>
</form>

</body>
</html>
