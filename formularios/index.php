<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <form action="recibe.php" method="post" class="">
      <input type="text" placeholder="Nombre:" name="nombre">
      <br>
      <label for="hombre">Hombre</label>
      <input type="radio" name="sexo" value="hombre" id="hombre">
      <br>
      <label for="mujer">Mujer</label>
      <input type="radio" name="sexo" value="mujer" id="mujer">
      <br>
      <select class="classyear" name="classyear">
        <option value="2017">2017</option>
        <option value="2000">2018</option>
        <option value="2000">2019</option>
      </select>
      <br>
      <label for="terminos">Acepto los términos:</label>
      <input type="checkbox" name="terminos" value="Aceptados" id="terminos">
      <br>
      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>

<?php
//Formularios--------------------
//RADIO BUTTONS:
//Los names tienen que estar relacionados, si lo que se pide tiene relación.
//Los id tienen que estar relacionados con su respectivo label.
//Los values tienen que representar sus valores.

//A lo largo de todo el formulario, el value es lo que le vamos a estar pasando a php.
//El name es cómo vamos a acceder a ellos.
?>
