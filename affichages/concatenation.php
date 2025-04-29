<?php

$bonjour = "bonjour";
$toutLeMonde = "tout le monde";

// concaténation

echo $bonjour . " " . $toutLeMonde . "<br>";
echo "$bonjour $toutLeMonde <br>";

$bonjour = $bonjour . " toto ";
echo "<br>";
echo $bonjour;
echo "<br>";
$bonjour .= "tata";
echo $bonjour;
echo "<br>";
//  cas particulier
// echo 'aujourd'hui'; => erreur
echo "aujourd'hui"; //passage en en double quote
echo "<br>";
echo "aujourd\'hui"; //passage en en double quote
echo "<br>";
