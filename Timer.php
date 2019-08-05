<!DOCTYPE html>
<html>
<body>
<?php
if (isset($_POST['submit'])){
	//$text = $_POST['log'];
	$date = date("Y/m/d");
	$time = date("H:i");
	$file = fopen("logging.txt","a");
	//$s = $text.", ".$date.", ".$time."\n";
	$s = $date." ".$time;
	fputs($file,$s);
	fclose($file);
}
?>

<h1> Daily Log </h1>


<form method='post'>
<input type="text" name="log" hidden="hidden"><br><br>

<input type="submit" name="submit" id="submit" value="Start" onclick="change()">
</form>
<script>
function change(){	
	var x = document.getElementById("submit");
	if (x.value == "Start"){
		x.value = "Stop";
		
	}
	
}
</script>
</body>
</html>

