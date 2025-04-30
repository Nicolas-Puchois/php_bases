<?php

//  opérateurs
// = --> affectation
// == --> comparaison de valeur
// === --> comparaison de valeur + type
//  > | < | > = |<> ou ! = --> différent de
// ! --> inversion
// AND | && --> et
// OR | || --> ou
// XOR --> ou exclusif => pas utiliser en prog


$age = 18;
$isMajeur = $age >= 18;

echo $isMajeur;

echo "<br>";

if ($age >= 18) {
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}
echo "<br>";
// ternaire 

// echo $age < 18 ? "Vous êtes mineur" : "Vous êtes majeur";
echo "<br>";

echo "Optimisé : Vous êtes" . (!$isMajeur ? " mineur" : " majeur");
echo "Optimisé : Vous êtes" . ($isMajeur ? " majeur" : " mineur");

$alert = true;
$couleur = "bleu";
echo "<br>";

echo ($alert == false) ? "pas d'alerte" : (($couleur == "bleu") ? "info" : "pas de couleur");

$article = [];
$loading = true;
echo "<br>";

echo (!$loading) ? "article chargés" : "en cours de changement ...";

echo "<br>";



// switch
$couleur = "rouge";

switch ($couleur) {
    case "bleu":
        echo "Info";
        break;
    case "rouge":
        echo  "Danger";
        break;
};
