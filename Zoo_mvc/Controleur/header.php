<?php
  $table = array("Lion" => "./lion.php",
                "Lmpala" => "./lmpala.php",
                "Crocodile" => "./crocodile.php",
                "Elephant" => "./elephant.php",
                "Tigre"=>"./tigre.php");

foreach ($table as $key => $value){//pour chaque element de la table on prend la cle et sa valeur ici la cle est le lien qui pointe vers les fichiers php qui pointe vers la valeur qui est l image se trouvant dans les fichiers php.
  echo "<li>"."<a href=".$value.">".$key."</li>"."</a>";//je concatene du html avec du php DANS DU PHP:( , li pour liste, le '.' pour concatener, html href, fais appel à la valeur (ici lion.php), fermé le a, appel la cle, fermé la liste et fermé le a.

}
?>
