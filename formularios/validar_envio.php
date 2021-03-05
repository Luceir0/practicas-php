<?php

//Request method servirá para saber si los datos han sido enviados (y cuál ha sido el método de envío)

/*if($_SERVER['REQUEST_METHOD'] == 'GET'){
  echo 'Se enviaron por GET';
}else{
  echo 'Se enviaron por POST';
}*/

//En este segundo caso, estamos usando la variable $_POST para preguntarle si está seteado el valor submit.
//Previamente le habremos colocado el valor "submit" al name del submit, para que lo coja (es lo que le estaremos pidiendo entre los ['']).

if (isset($_POST['submit'])) {
  echo 'Se han enviado los datos correctamente';
}

 ?>
