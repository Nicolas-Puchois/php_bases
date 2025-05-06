<?php

require_once('./inc/haut.inc.php');
require_once('./components/nav/nav.php');


$cheminFichier = './sauv/sauvegarde.txt';
$file = file($cheminFichier);

echo "<pre>";
print_r($file);
echo "</pre>";

// foreach ($file as $row) {
//     echo $row . "<br>";
// }


echo implode('<br>', $file);

require_once("./inc/bas.inc.php");
