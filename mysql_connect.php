<?php
//Esta forma ya no se recomienda, por antigua.

$connection = mysql_connect('localhost', 'root', '') or die('No se pudo conectar a la base de datos');
//Si la conexión con la base de datos no es correcta, matamos la ejecución de la página para que no siga cargando.
mysql_select_db('prueba_datos', $connection);
$results = mysql_query('SELECT * FROM usuarios');

/*
$row = mysql_fetch_object($results);
  //recupera una sola fila y la trae como un objeto. Así, se puede acceder a sus atributos. La siguiente vez que se llame a esta función, apuntará a la siguiente fila.
echo $row -> nombre;
*/

while($fila = mysql_fetch_object($results)){
  echo fila -> nombre;
  echo '</br>';
}

//También se podrían organizar los datos como un array en lugar de como un objeto:

while($fila = mysql_fetch_array($results)){
  echo $fila['nombre'];
  echo '</br>';
}

?>
