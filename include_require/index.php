<?php

function suma($numero, $numero2){
  return $numero + $numero2;
}

//Para que se pueda llamar a esta función desde otra página:
include 'index.view.php';
//o: require 'index.view.php';  la diferencia está en que con require, si faltase el otro archivo, la página no cargará.
?>
