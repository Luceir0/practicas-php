<?php

$numero = 15.435345;

//Para redondear. (podemos especificar cuántos números queremos que tengan los decimales, si metemos un número como segundo parámetro):
echo round($numero,2);
echo '</br>';

//Para obtener un número al azar por cada vez que actualicemos la página.
//Como parámetros le decimos entre qué números queremos que esté:
echo rand(1, 10);
echo '</br>';

//Para redondear siempre para arriba:
echo ceil($numero);
echo '</br>';

//Una constante que viene de fábrica, con el número pi:
echo M_PI;

?>
