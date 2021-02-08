<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Own styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Flux RSS</title>
</head>

<body>
  <?php
    $nbTopics = 5;
    $tabTopics = [];
  ?>

  <!-- Navigation part (title + parameters button) -->
  <header>
    <h1 class="titleSite">Lecteur de flux RSS</h1>
    <nav>
      </nav>
    </header>
    
    <div class="container-fluid">
      <div class="row text-center">
        <h2 class="titlePage">Les articles du flux RSS trucmuche</h2>
      </div>
    <?php
      for ($i=0; $i<=$nbTopics; $i++){ ?>
        <div class="row">
          <div class="col indexColImg">
            <img src="assets/img/rss640.png" alt="img de l'article">
          </div>
          <div class="col indexCol"></div>
        </div>
      <?php } ?>
  </div>

  <!-- Bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>