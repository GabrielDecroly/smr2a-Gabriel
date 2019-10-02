
<center>Gabriel<center>
<a href="http://192.168.0.108/smr2a-VCR/smr2a.php">Victor Cabo</a>

<a href="http://192.168.0.111/smr2A_Jose/smr2a.php">Jeso</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
?>

<?php
if(isset($_GET['correo'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['correo']);
	fwrite($f,"\r\n");
}
?>


<html>
<body>
<h1>FORMULARIO</h1>
<html>
	<body>
	<form>
	<center>Correo electronico:<center>
	<center><input type="email" name="correo"><br><center>
	<center><button>Enviar</button><center>
	</form>
	</body>
</html>
<a href="catalogo.php">Listado compañeros</a>
</html>	

<html>
<head>
<style>
body {
  background-color: lightblue;
}
</style>
</head>
<body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>


