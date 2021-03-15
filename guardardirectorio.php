<?php

$nombre = htmlspecialchars($_POST["nombre"]);

$ruta = htmlspecialchars($_POST["ruta"]);


$directorio = $ruta."/".$nombre;

if (!is_dir($directorio)) {
	$crear = mkdir($directorio, 0777, true);

	if ($crear) {
		echo "Directorio creado correctamente";
	} else {
		echo "Ocurrió un error";
	}
} else {
	echo "El directorio ya existe";
}


?>