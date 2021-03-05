<?php

//Permiten especificar qué tipo de dato queremos retornar.
//En este caso, podríamos meter en la variable un string al estilo de: "Carlos tiene 23 años"; pero de esta manera no podríamos trabajar con ese dato.
//Para evitarlo:

declare(strict_types=1);
//En este caso pasa lo mismo que en las declaraciones de tipo escalar. PHP "traga" con números de tipo string.
//Podemos volver a evitarlo con esa sentencia estricta.

function obtenerEdad() : int{
  $edad = 23;
  return $edad;
}

echo obtenerEdad();


?>
