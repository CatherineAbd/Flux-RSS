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
  <!-- Fixed styles -->
  <link rel="stylesheet" href="assets/css/style.css?v=1">
  <?php 
    if (isset($_COOKIE['theme'])){ ?>
      <link rel="stylesheet" href="assets/css/style<?= $_COOKIE['theme'] ?>.css">
    <?php } else { ?>
    <!-- Default style -->
      <link rel="stylesheet" href="assets/css/style1.css?v=1">
    <?php } ?>
  
  <title>Flux RSS</title>
</head>

<body>
  <?php
    require "controllers/index_controller.php";

  ?>

  <!-- Navigation part (title + parameters button) -->
  <header class="navST sticky-top">
    <div class="row">
      <div class="col text-center">
      <h1 class="titleSite">Lecteur de flux RSS</h1>
      </div>
    </div>
    <div class="row justify-content-between">
      <span class="navItemDisabled">thème <?= isset($_COOKIE['theme']) ? $_COOKIE['theme'] : '1 (défaut)'?></span>
      <span class="navItemDisabled"><?= isset($_COOKIE['nbTopics']) ? $_COOKIE['nbTopics'] : '5'?> articles affichés</span>
      <nav class="">
        <ul class="navIndexLst">
          <li class="navItem">
            <a href="views/param.php" class="navSTBtnParam navSTLink">
            <i class="fas fa-2x fa-cog"></i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  </header>
  <?php
    
    if(isset($_COOKIE['articleTopics'])){
      $dataArticle = explode(',',$_COOKIE['articleTopics']);
    $url =$dataArticle[1] ; 
    $article =$dataArticle[0];
    
    }
    else{
      $url = "https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/";
      $article = actualité;
    }
    $xml = simplexml_load_file($url);
    ?>
  <div class="container-fluid">
    <div class="row text-center mb-5 mt-5">
      <h2 class="titlePage">Les articles du flux RSS <?=$article ?></h2>
    </div>
    <?php
    $items = $xml->xpath('//item'); // recupere les articles
    foreach ($items as $item) {
      // var_dump($episode);
      $titre = $item->title;
      $date = $item->pubDate;
      $date = iconv("ISO-8859-9","UTF-8",strftime($strDate ,strtotime($date)));
      $lien = $item-> link;
      $description = $item->description;
      $image = $item->enclosure;
      $arrayModal += array($i =>array('title'=>(string)$titre ,'description'=>strip_tags($description),'lien'=>(string)$lien) );
     ?>
        <div class="row mb-5">
          <div class="col-1">
            <i class="fas fa-2x fa-rss-square"></i>
          </div>
          <div class="col-2 "> <img src=<?= $image['url'] ?> class="img-fluid" >

          </div>
          <div class="col-6 indexTopicTitle">Voici le titre de l'article <?= $titre ?></div>
          <div class="col-2 indexTopicDate"><?= $date ?></div>
          <div class="col-1">
            <button id=<?php echo "button".$i ?> type="button" class="indexTopicInfos" data-bs-toggle="modal" data-bs-target="#exampleModal">+ infos</button>
          </div>
        </div>
      <?php 
      $i+= 1;
        if ($nbTopics != 'tout')
        {   
            
            if ($i == $nbTopics){
                break;
            }
        }
    } ?>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id='title' class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id='description' class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a id="redirection" href="">voir la source</a>
      </div>
    </div>
  </div>
</div>


  <!-- Bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- own scripts -->

    <script>
        var arrayModal = <?php echo json_encode($arrayModal); ?>;
    </script>
  <script src="assets/js/scripts.js"></script>

</body>
</html>