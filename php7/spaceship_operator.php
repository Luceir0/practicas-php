<?php
//Devuelve 1 si el valor en la izquierda es mayor que el de la derecha.
//Devuelve 0 si los valores en ambos lados son iguales.
//Devuelve -1 si el valor de la derecha es mayor que el de la izquierda.

//< =  >
//1 0 -1

//echo 10<=>1;

$un_array = [5,43,23,2];
//sort($un_array);

function comparar($a, $b){
  return $a <=> $b;
}

usort($un_array, 'comparar');

echo implode(' _ ', $un_array);

?>
