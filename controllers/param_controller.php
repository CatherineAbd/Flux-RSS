<?php

  $tabMsgErr = array();

  // click on button Enregistrer vos choix
  if (isset($_POST["paramBtnSave"])){

    // checking the validity of the fields
    if (isset($_POST["theme"])) {
      if ($_POST["theme"] < 1 && $_POST["theme"] > 3){
        $tabMsgErr["theme"] = "Vous devez choisir un des thèmes avec les boutons radios";
      }
    }
    
    if (isset($_POST["articleTopics"])) {
      if ($_POST["articleTopics"] !="Technologie,https://www.01net.com/rss/actualites/technos/" && $_POST["articleTopics"] !="Culture Médias,https://www.01net.com/rss/actualites/culture-medias/"
        && $_POST["articleTopics"] !="politique,https://www.01net.com/rss/actualites/politique-droits/" && $_POST["articleTopics"] !="Jeux,https://www.01net.com/rss/actualites/jeux/"
        && $_POST["articleTopics"] != "Actualités,https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/"){
       $tabMsgErr["articleTopics"] = "Vous devez choisir un des sujets de flux avec les boutons radios";
        }
    }

    if (isset($_POST["nbTopics"])){
      if ($_POST["nbTopics"] <> 5 && $_POST["nbTopics"] <> 10 && $_POST["nbTopics"] <> "Tous"){
        $tabMsgErr["nbTopics"] = "Vous devez choisir le nombre d'articles avec les boutons radios";
      }
    }

    // cookies's creation
    if (count($tabMsgErr) == 0){
      $reload = false;
      if (isset($_POST["theme"])){
        setcookie("theme", $_POST["theme"], time()+86400,"/");
        $reLoad = true;
      }
      if (isset($_POST["articleTopics"])){
        setcookie("articleTopics", $_POST["articleTopics"], time()+86400,"/");
        $reload = true;
      }
      if (isset($_POST["nbTopics"])){
        setcookie("nbTopics", $_POST["nbTopics"], time()+86400,"/");
        $reload = true;
      }
      if ($reload){
        header( "Location:param.php");
        exit();
      }
    }
  }

  if (isset($_GET["clickBtnRaz"])){
      eraseCookie();
    }

  // Functions
  function eraseCookie(){
    setcookie("theme", "", time()-3600, "/", "", false, false);
    setcookie("articleTopics", "", time()-3600, "/", "", false, false);
    setcookie("nbTopics", "", time()-3600, "/", "", false, false);
    header( "Location:param.php");
    exit();
    }
?>