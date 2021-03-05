<?php

$un_amigo = array(
  'telefono' => '777',
  'edad' => 30,
  'pais' => 'Alemania'
);

//Solamente con php:
foreach($un_amigo as $dato => $valor){
  echo $dato . ' : ' . $valor . '</br>';
}

?>



<!-- {Ya integrado en HTML} -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <title>Los datos de un amigo</title>
 </head>

 <body>
   <h1> Estos son los datos de mi amigo: </h1>
   <ul>
     <?php

        foreach($un_amigo as $dato => $valor){
          echo '<li>' . $dato . ' : ' . $valor . '</li>';
        }

     ?>
   </ul>
 </body>

 </html>
