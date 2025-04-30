<?php
include(__DIR__ . "/../fonction/lib.php");

$prenoms = ['toto', 'tata', "titi"]; // retour API
echo ("taille tab = " . count($prenoms));
eol();

for ($i = 0; $i < count($prenoms); $i++) {
    echo $i;
    eol();
}

eol();

foreach ($prenoms as $prenom) {
    echo $prenom;
    eol();
}
