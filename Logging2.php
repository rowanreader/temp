<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_POST['submit'])){
	$text = $_POST['log'];
	$date = date("Y/m/d");
	$time = date("H:i");
	$file = fopen("logging.txt","a");
	$s = $text.", ".$date.", ".$time."\n";
	fputs($file,$s);
	fclose($file);
}
?>

<h1> Daily Log </h1>


<form method='post'>
Activity: <input type="text" name="log"><br><br>
<input type="submit" name="submit">
</form>

</body>
</html>

