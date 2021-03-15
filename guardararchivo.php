<?php

$nombre = htmlspecialchars($_POST["nombre"]);

$ruta = htmlspecialchars($_POST["ruta"]);

$texto = $_POST["texto"];

$archivo = $ruta."/".$nombre.".txt";

if (!file_exists($archivo)) {
	$miArchivo =  @fopen($archivo, "w") or die("No se pudo crear el archivo, verifique que la ruta sea correcta") ;

	fwrite($miArchivo, $texto);

	fclose($miArchivo);

	echo "Archivo creado correctamente";
} else {
	echo "el archivo ya existe";
}

?>