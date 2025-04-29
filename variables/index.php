<?php
//  initialisation au plus haut du fichier
$prenom = "tata";
//  debogage
var_dump($prenom);

echo '<p>Bonjour toto </p>';
// interpolation
echo "<p> Bonjour $prenom </p>";



echo "<p>Comment vas-tu toto?</p>";
// concaténation
echo '<p>Comment vas-tu ' . $prenom . '?</p>';

echo "<p>Quel âge as-tu $prenom?</p>";
