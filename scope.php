<?php

$numero = 7;

function mostrarNumero($numero){
  echo $numero;
}

echo mostrarNumero($numero);

//No se puede acceder a las variables globales a machete desde una función.
//Hay que meterlas como parámetros para poder usarlas.

//Tampoco se puede acceder a las variables de una función desde fuera de esa función.
//Si queremos hacer uso de ellas, habrá que hacer un return.
?>
