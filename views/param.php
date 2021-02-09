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
  <link rel="stylesheet" href="../assets/css/style.css?v=1">
  <?php 
    if (isset($_COOKIE['theme'])){ ?>
      <link rel="stylesheet" href="../assets/css/style<?= $_COOKIE['theme'] ?>.css?v=1">
    <?php } else { ?>
    <!-- Default style -->
      <link rel="stylesheet" href="../assets/css/style1.css?v=1">
    <?php } ?>

  <title>Flux RSS</title>
</head>

<body>
<?php
  require "../controllers/param_controller.php";
?>

  <header>
    <nav class="navST">
      <h1 class="titleSite">Lecteur de flux RSS</h1>
      <ul class="navParamLst">
        <li class="navItem">
          <a href="../index.php" class="navSTLinkHome navSTLink">
            Retour page accueil
          </a>
        </li>
        <li class="navItem">
          <a href="param.php" class="navSTBtnParam navSTLink">
            <i class="fas fa-2x fa-cog"></i>
          </a>
        </li>
      </ul>
    </nav>
  </header>
    
  <form action="" method="post">
    <div class="row justify-content-center">
      <div class="col-3">
          <input type="radio" class="paramRadio" name="theme" value="1" id="themeOne" <?= (isset($_COOKIE["theme"]) && $_COOKIE["theme"] == 1) ? "checked" : "" ?> >
          <label for="themeOne" class="paramLabel">Thème 1</label>
          <input type="radio" class="paramRadio" name="theme" value="2" id="themeTwo" <?= (isset($_COOKIE["theme"]) && $_COOKIE["theme"] == 2) ? "checked" : "" ?> >
          <label for="themeTwo" class="paramLabel">Thème 2</label>
          <input type="radio" class="paramRadio" name="theme" value="3" id="themeThree" <?= (isset($_COOKIE["theme"]) && $_COOKIE["theme"] == 3) ? "checked" : "" ?> >
          <label for="themeThree" class="paramLabel">Thème 3</label>
        </fieldset>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-3">
        <input type="radio" class="paramRadio" name="articleTopics" value="Technologie" id="artOne"<?= (isset($_COOKIE["articleTopics"]) && $_COOKIE["articleTopics"] == "Technologie") ? "checked" : "" ?> >
        <label for="artOne" class="paramLabel">Technologie</label>
        <input type="radio" class="paramRadio" name="articleTopics" value="Culture Médias" id="artTwo"<?= (isset($_COOKIE["articleTopics"]) && $_COOKIE["articleTopics"] == "Culture Médias") ? "checked" : "" ?> >
        <label for="artTwo" class="paramLabel">Culture Médias</label>
        <input type="radio" class="paramRadio" name="articleTopics" value="Politique" id="artThree"<?= (isset($_COOKIE["articleTopics"]) && $_COOKIE["articleTopics"] == "Politique") ? "checked" : "" ?> >
        <label for="artThree" class="paramLabel">Politique</label>
        <input type="radio" class="paramRadio" name="articleTopics" value="Sports" id="artFour"<?= (isset($_COOKIE["articleTopics"]) && $_COOKIE["articleTopics"] == "Sports") ? "checked" : "" ?> >
        <label for="artFour" class="paramLabel">Sports</label>
        <input type="radio" class="paramRadio" name="articleTopics" value="Actualités" id="artFive"<?= (isset($_COOKIE["articleTopics"]) && $_COOKIE["articleTopics"] == "Actualités") ? "checked" : "" ?> >
        <label for="artFive" class="paramLabel">Actualités</label>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-1">
        <input type="radio" class="paramRadio" name="nbTopics" value="5" id="fiveTopics" <?= (isset($_COOKIE["nbTopics"]) && $_COOKIE["nbTopics"] == 5) ? "checked" : "" ?> >
        <label for="fiveTopics" class="paramLabel">5</label>
        <input type="radio" class="paramRadio" name="nbTopics" value="10" id="tenTopics" <?= (isset($_COOKIE["nbTopics"]) && $_COOKIE["nbTopics"] == 10) ? "checked" : "" ?> >
        <label for="tenTopics" class="paramLabel">10</label>
        <input type="radio" class="paramRadio" name="nbTopics" value="Tous" id="allTopics" <?= (isset($_COOKIE["nbTopics"]) && $_COOKIE["nbTopics"] == "Tous") ? "checked" : "" ?> >
        <label for="allTopics" class="paramLabel">Tous</label>
      </div>
    </div>
    <div class="row justify-content-center ">
      <div class="col-2">
        <!-- <input type="submit" value="Enregistrer vos choix" class="paramSTCreateCookie" name="paramBtnSave"> -->
        <button type="submit" class="paramSTCreateCookie" name="paramBtnSave">Enregistrer vos choix</button>
      </div>
      <div class="col-3 offset-1">
        <button class="paramSTEraseCookie">
        <a href="param.php?clickBtnRaz=true" class="paramSTEraseCookieLnk">Revenir aux choix par défaut</a>
        </button>
      </div>
    </div>
  </form>


  
  <!-- Bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- own scripts -->
  <script src="assets/js/scripts.js"></script>

</body>
</html>