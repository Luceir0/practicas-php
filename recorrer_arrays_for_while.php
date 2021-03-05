<?php

$algunos_meses = array(
  'Enero',
  'Febrero',
  'Marzo',
  'Abril'
);

//Recorrer los valores del array con un bucle for:
for ($i=0; $i<count($algunos_meses); $i++) {
  echo $algunos_meses[$i] . '</br>';
}

//Lo mismo, pero con while:
$contador = 0;
while ($contador < count($algunos_meses)) {
  echo $algunos_meses[$contador] . '</br>';
  $contador++;
}


?>
