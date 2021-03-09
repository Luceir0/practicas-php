<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagination</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1>Articles</h1>
      <section class="articles">
        <ul>
          <?php foreach ($articles as $article) : ?>
            <li><?php echo $article['id'] . ". " . $article['article']?></li>
          <?php endforeach; ?>
        </ul>
      </section>

      <section class="pagination">
        <ul>
          <!-- Deshabilitando el botón de retroceso -->
          <?php if ($page == 1) : ?>
            <li class="disabled">&laquo;</li>
          <?php else: ?>
            <li><a href="?page=<?php echo $page - 1 ?>">&laquo;</a></li>
          <?php endif; ?>

          <!-- Ciclo for para mostrar la lista de páginas -->
          <?php
            for ($pageNumber = 1; $pageNumber <= $numberOfPages; $pageNumber++){
              if ($page == $pageNumber) {
                echo "<li class='active'><a href='?page=$pageNumber'>$pageNumber</a></li>";
              }else{
                echo "<li><a href='?page=$pageNumber'>$pageNumber</a></li>";
              }
            }
          ?>

          <!-- Deshabilitando el botón de avance -->
          <?php if ($page == $numberOfPages) : ?>
            <li class="disabled">&raquo;</li>
          <?php else: ?>
            <li><a href="?page=<?php echo $page + 1 ?>">&raquo;</a></li>
          <?php endif; ?>

          <!-- Esto sirivió para maquetar los botones de las páginas:
          
          <li class="disabled">&laquo;</li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">&raquo;</a></li>
          -->
        </ul>
      </section>
    </div>
  </body>
</html>
