<!DOCTYPE html>
<html lang="es">
<head>
	<title>10-08-2016</title>
</head>
<body>
	<?php date_default_timezone_set('America/Lima');
		echo date("H_i_s");
	?>
	<?php
		echo "hola";
	?>
	<?php
		date_default_timezone_set('America/Lima');
		$hora_lima=date("H_i_s");
		date_default_timezone_set('Europa/Paris');
		$hora_paris=date("H_i_s");
		echo "<p> La hora en Lima es:".$hora_lima."</p";
		echo "<p> La hora en Paris es:".$hora_paris."</p";
	?>

</body>
</html>