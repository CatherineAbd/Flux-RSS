<?php

  // click on button Enregistrer vos choix
  if (isset($_POST["paramBtnSave"])){
    // cookies's creation
    setcookie("theme", $_POST["theme"], time()+86400,"/");
    setcookie("articleTopics", $_POST["articleTopics"], time()+86400,"/");
    setcookie("nbTopics", $_POST["nbTopics"], time()+86400,"/");
    header( "Location:param.php");
    exit();
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