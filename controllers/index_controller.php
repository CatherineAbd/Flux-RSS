<?php
  if (isset($_COOKIE['theme'])){
    
  }
  setlocale (LC_TIME, 'fr_FR','fra'); //Prend par defaut la date du jour 
  
  if(isset($_COOKIE['nbTopics'])){
    $nbTopics =$_COOKIE['nbTopics'] ; 
    }
    else{
      $nbTopics = 5;
    }
 
  $i = 0;
  $arrayModal = array();
  $strDate = mb_convert_encoding('%d %B %Y %R','ISO-8859-9','UTF-8');// sert a traduire les dates  
?>