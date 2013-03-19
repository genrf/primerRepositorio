<?php

/* Conectar a una base de datos de ODBC invocando al controlador */
$dsn = 'mysql:dbname=ej_bases;host=127.0.0.1';
$usuario = 'EJ_INVITADO';
$contraseña = 'EJ_INVITADO';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
	/*$consulta=$gbd->prepare('SELECT * FROM NOTICIAS;');
	$consulta->execute();*/
	$consulta = $gbd->query('SELECT * FROM NOTICIAS;');
	while($fila = $consulta->fetch()){
		echo '<h1>'.$fila[1].'</h1><br/>';
		echo $fila[2].'<br/>';
	}
?>

