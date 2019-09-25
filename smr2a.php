Gabriel

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>

<a href="http://192.168.0.137/smr2A_Jose/smr2a.php">Jose</a>