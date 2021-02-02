<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, Sass, JS, VueJS, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VueJS.
Bonus:
Attraverso un’altra chiamata ajax, filtrare gli album per artista
Lo screenshot si trova nelle slide. -->

<!-- php -->
<?php 
include __DIR__ . '/partials/data.php';
// var_dump($albums);
?>
<!-- /php -->


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <link rel="stylesheet" href="./dist/css/app.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <nav></nav>
  <div class="app">
  <?php 
    foreach ($albums as $album) { ?>
      <div class="card">
        <img src="<?php echo $album['poster']; ?>" alt="">
        <div class="info">
        <h2><?php echo $album['title']; ?></h2>
        <p><?php echo $album['author']; ?></p>
        <p><?php echo $album['year']; ?></p>
        </div>
      </div>
   <?php }
  ?>


  </div>



  <!-- js and frameworks -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
  <script src="./dist/js/app.js"></script>
</body>
</html>
