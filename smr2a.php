Gabriel

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)
?>

<?php
if(isset($_GET['correo'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['correo']);
	fwrite($f,"\r\n");
	fclose($f);
}
?>

<a href="http://192.168.0.137/smr2A_Jose/smr2a.php">Jose</a>

<form>
	<input name="correo" type="email">
	<button>Enviar</button>
</form>