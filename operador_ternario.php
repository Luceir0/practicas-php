<?php

//$edad = 18;

$edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad';

echo 'Edad: ' . $edad;


//Sería lo mismo que hacer:

if(isset($edad)){
  $edad = $edad;
}else{
  $edad = 'El usuario no estableció su edad';
}

 ?>
