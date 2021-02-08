<?php 
 $xml = simplexml_load_file
('https://www.01net.com/rss/maison-connectee/');


$episodes = $xml->xpath('//item');



foreach ($episodes as $episode) {
    // var_dump($episode);
    $titre = $episode->title;
    $date = $episode->pubDate;
    $lien = $episode-> link;
    $description = $episode->description;
    echo"titre: ",$titre ;
    echo "<br>";
    echo"date: ",$date ;
    echo "<br>";
    echo"lien: ",$lien ;
    echo "<br>";
    echo"description: ",$description ;
    var_dump($description);
    echo "<br>";
    echo "<br>";
    echo "<br>";


}

?>