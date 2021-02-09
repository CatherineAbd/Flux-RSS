<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CDN Font Awesome -->
  <script src="https://kit.fontawesome.com/07d23712a0.js" crossorigin="anonymous"></script>

  <!-- CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Own styles -->
  <?php 
    if (isset($_COOKIE['theme'])){ ?>
      <link rel="stylesheet" href="assets/css/style<?= $_COOKIE['theme'] ?>.css">
    <?php } else { ?>
    <!-- Default style -->
      <link rel="stylesheet" href="assets/css/style.css?v=1">
    <?php } ?>
  
  <title>Flux RSS</title>
</head>

<body>
  <?php
    require "controllers/index_controller.php";

    $nbTopics = 5;
  ?>

  <!-- Navigation part (title + parameters button) -->
  <header>
    <h1 class="titleSite">Lecteur de flux RSS</h1>
    <nav>
      <a href="views/param.php">
        <i class="fas fa-cog"></i>
      </a>
    </nav>
  </header>

  <div class="container-fluid">
    <div class="row text-center">
      <h2 class="titlePage">Les articles du flux RSS trucmuche</h2>
    </div>
    <?php
      for ($i=0; $i<$nbTopics; $i++){ ?>
        <div class="row">
          <div class="col-1">
            <i class="fas fa-rss-square"></i>
          </div>
          <div class="col indexTopicTitle">Voici le titre de l'article <?= $i ?></div>
          <div class="col-2 indexTopicDate">08/02/2021 20h24</div>
          <div class="col-1">
            <button type="button" class="indexTopicInfos" data-toggle="modal" data-target="#exampleModal">+ infos</button>
          </div>
        </div>
      <?php } ?>
  </div>

  <!-- Bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- own scripts -->
  <script src="assets/js/scripts.js"></script>

</body>
</html>