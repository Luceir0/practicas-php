<?php

// Para extraer los elementos de un array asociativo, como si de variables se tratasen:
$amigo = array ('telefono' => 54654, 'edad' => 20, 'pais' => 'Mexico');
extract($amigo);
echo $telefono;
//La variable $telefono no existía; pero extrayéndola de su array, y gracias a la función extract(), existe.


//Para separar los elementos de un array, por el separador que hayamos metido como primer parámetro:
$algunos_dias_semana = array('Lunes', 'Martes', 'Miércoles');
echo join(' , ', $algunos_dias_semana);


//Para extraer el último elemento de un array. Ojo, porque esto modifica el array:
$ultimo_dia_escrito = array_pop($algunos_dias_semana);
echo $ultimo_dia_escrito;

//Para mostrar cuántos elementos hay dentro de un array:
echo count($algunos_dias_semana);

?>
