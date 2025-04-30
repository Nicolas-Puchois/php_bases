<?php
$dir = __DIR__ . "./conditions/lib.php";
include(__DIR__ . "/../fonction/lib.php");




function calculTva($prixHt, $taux = 20)
{
    $prixTTC = $prixHt + ($prixHt * $taux / 100);
    return $prixTTC;
}

// echo calculTva(100, 20); // appel
echo calculTva(100); // appel

echo "<br>";

function meteo($saison, $degre)
{
    return "nous somme en $saison et il fait $degre " . (($degre != 0 && $degre != 1 && $degre != -1) ? "degrés" : "degré");
}

function meteo2($saison, $degre)
{
    return "nous somme en $saison et il fait $degre " . (($degre >= -1 && $degre <= 1) ? "degré" : "degrés");
}


echo (meteo("hiver", -2)); // nous somme en hiver et il fait 5 degré
// echo "<br>";
// eol();
echo (meteo2("hiver", 10)); // nous somme en hiver et il fait 5 degré
