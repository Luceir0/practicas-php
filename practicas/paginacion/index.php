<?php

//Conexión a la BBDD:
try{
  $connection = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
}catch(PDOException $e){
  echo "ERROR " . $e -> getMessage();
  die();
}

//El atributo page con su valor, se lo vamos a dar a través del navegador. Si el usuario aporta un número, será ese. Y si no, será la página 1.
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
//Para saber cuántos posts voy a mostrar por página, necesito esta variable:
$postsByPage = 4;
//Para saber por qué número de entrada (de artículo) empezaremos a postear los datos, según la página en la que nos encontremos:
$beginBy = ($page > 1) ? ($page * $postsByPage - $postsByPage) : 0;

//Preparamos la petición a la base de datos. Cogemos todos los artículos que haya:
$articles = $connection -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $beginBy, $postsByPage");
$articles -> execute();
$articles = $articles -> fetchAll();
//Si no hay artículos (porque el usuario se ha pasado de página), enviamos al usuario a la página index:
if (!$articles) {
  header('Location: index.php');
}

//Para calcular el total de artículos:
$totalArticles = $connection -> query('SELECT FOUND_ROWS() as total');
$totalArticles = $totalArticles -> fetch()['total'];
//Para calcular el número de páginas:
$numberOfPages = ceil($totalArticles / $postsByPage);

//Requerimos el fichero con el contenido del front:
require 'index.view.php';
?>
