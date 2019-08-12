<!DOCTYPE html>
<html>
<body>
<<<<<<< HEAD
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
=======
<?php
if (isset($_POST['submit'])){
	//$text = $_POST['log'];
	$date = date("Y/m/d");
	$time = date("H:i");
	$file = fopen("logging.txt","a");
	//$s = $text.", ".$date.", ".$time."\n";
	$s = $date." ".$time;
	fputs($file,$s);
>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294
	fclose($file);
}
?>

<<<<<<< HEAD

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
		
=======
<h1> Daily Log </h1>

<form method='post'>
<input type="text" name="log" hidden="hidden"><br><br>
<input type="Button" name="submit" id="submit" value="Start" onclick="change()">
</form>

<script>
function change(){	
	var x = document.querySelector('#submit');
	if (x.textContent == "Start"){
		x.textContent = "Stop";
	}
	else if (x.textContent == "Stop"){
		x.textContent = "Finish Log";
	}
	else{ // Finish Log
		x.textContent = "Start";
>>>>>>> 5ed558f51df2224a86900b19c0e36b4a3df58294
	}
	
}
</script>
</body>
</html>



