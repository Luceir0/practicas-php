<?php

//operador de comprobación para saber si una variable está seteada (tiene contenido). En sustitución de isset.
//Anteriormente:
//$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';
//Si el nombre está seteado, metes el valor de nombre en el formulario, en la variable $nombre. Y si no, metes el valor 'Anonimo en la variable'.
//Se hace lo mismo con:
$nombre = $_GET['nombre'] ?? 'Anonimo';
echo $nombre;



?>
