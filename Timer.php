


<?php
$file = fopen("logging.txt","a");
$s = $_POST['variable'] ."\n";
fputs($file,$s);
$extra = $_POST['extra'];
if ($extra == 1){
	fputs($file,"\n");
}
fclose($file);

?>




