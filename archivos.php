<?php

file_exists('documento.txt');
//Nos da un boolean para informarnos de si el archivo existe o no.

file_get_contents('documento.txt');
//Nos responde con el contenido del archivo.

file_put_contents('documento.txt', 'Esta es la información que queremos agregar al archivo.');
//Para escribir dentro del archivo. Lo sobreescribe por defecto; a no ser que añadamos el tercer parámetro FILE_APPEND.

file_put_contents('documento.txt' '');
//Sobreescribe todo el archivo y lo pone en blanco.

for ($i=1; $i <=10 ; $i++) {
  file_put_contents('documento.txt', "$i \n", FILE_APPEND);
}
//Esto escribirá en el archivo los números del 1 al 10.

$archivo = file('documento.txt');
//Nos permite convertir el archivo en un array. Cada línea del archivo será un elemento del array.
echo $archivo[laPosicion];

?>
