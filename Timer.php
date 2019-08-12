<!DOCTYPE html>
<html>
<body>
<h1> Daily Log </h1>

<form method='post' action='Timer.php'>
<input type="text" id="log" hidden="hidden"><br><br>
<button type="Button" id="submit" onclick="change()">Start</button>
</form>


<?php
if (isset($_POST['submit'])){
	$file = fopen("logging.txt","a");
	$s = $startTime + $endTime;
	fputs($file,$s);
	$t = $activity;
	fputs($file, $t);
	fclose($file);
}
?>


<script>
var start = 1;
function change(){	
	var x = document.querySelector('#submit');
	if (start === 1){
		x.textContent = "Stop";
		start = 2;
		var startTime =  new Date();
	}
	else if (start === 2){
		x.textContent = "Finish Log";
		log = document.getElementById("log");
		log.hidden="";
		start = 3;
		var endTime = new Date();
	}
	else{ // Finish Log, start = 3
		x.textContent = "Start";
		start = 1;
		log = document.getElementById("log");
		var activity = log.value;
		log.hidden="hidden";
		
	}
	
}
</script>
</body>
</html>



