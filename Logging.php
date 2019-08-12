<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_POST['Submit'])){
	$text = $_POST['log'];
	$date = date("Y/m/d");
	$time = date("H:i");
	$file = fopen("C:\xampp\htdocs\logging.txt","a+");
	$s = $text.", ".$date.", ".$time."\n";
	fputs($file,$s);
	fclose($file);
}
?>

<h1> Daily Log </h1>


<form>
Activity: <input type="text" name="log"><br><br>
<input type="submit" value="Submit" name="Submit">
</form>

</body>
</html>

