<?php
include(__DIR__ . '/../fonction/lib.php');

$prenom = "Toto";
echo $prenom;
eol();
$prenoms = "Toto, Tata, Titi, Tutu";
echo $prenoms;

$prenoms1 = array("Toto", "Tata", "Titi", "Tutu");
// debug($prenoms1);
$prenoms2 = ["Toto", "Tata", "Titi", "Tutu"];
array_push($prenoms2, "Tete", "Toutou");
$prenoms2[] = "Riri";
// debug($prenoms2);
eol();
echo $prenoms2[3];
eol();
foreach ($prenoms2 as $prenom) {
    if ($prenom === "Tutu") {
        echo "Prenom $prenom trouvé";
    }
}

function findPrenom($prenom)
{
    return $prenom === "Tutu";
}

// $newTabPrenom = array_filter($prenoms2, "findPrenom");
// debug($prenoms2);
// debug($newTabPrenom);

$newTabPrenom2 = array_map("findPrenom", $prenoms2);
debug($newTabPrenom2);
$prenomFind = array_find($prenoms2, "findPrenom");
eol();
echo " Prénom $prenomFind retrouvé";
function showVal($prenom)
{
    echo $prenom;
    echo " <br>";
}
eol();

array_map("showVal", $prenoms2);
