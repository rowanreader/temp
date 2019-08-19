<!DOCTYPE html>
<html>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
</script>
<h1> Daily Log </h1>

<form method='post' action='Timer.php'>
<input type="text" id="log" hidden="hidden"><br><br>
<button type="Button" id="submit" onclick="change()">Start</button>
<button type="submit" class="button" id="logBtn" hidden="hidden" onclick="write()">Finish Log</button>
</form>


<?php
if (isset($_POST['action'])){
	write();
}
function write($startTime, $endTime, $activity){
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
		log = document.getElementById("log");
		log.hidden="";	
		document.getElementById("logBtn").hidden = "";
		document.getElementById("submit").hidden = "hidden";	
		start = 3;
		var endTime = new Date();
	}
	
	
}
</script>
</body>
</html>



