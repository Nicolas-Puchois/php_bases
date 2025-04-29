<?php
echo "Passage par référence : <br>";
$fruit1 = "pomme";
$fruit2 = "fraise";
echo "Fruit 1 : $fruit1 <br>";
echo "Fruit 2 : $fruit2 <br>";
$fruit2 = &$fruit1; // passage par référence
echo "Fruit 1 : $fruit1 <br>";
echo "Fruit 2 : $fruit2 <br>";
$fruit2 = "banane";
echo "Fruit 1 : $fruit1 <br>";
echo "Fruit 2 : $fruit2 <br>";

echo "Passage par valeur : <br>";
$fruit3 = "pomme";
$fruit4 = "fraise";
echo "Fruit 3 : $fruit3 <br>";
echo "Fruit 4: $fruit4 <br>";
$fruit4 = $fruit3; // passage par valeur
echo "Fruit 3 : $fruit3 <br>";
echo "Fruit 4 : $fruit4 <br>";
$fruit3 = "banane";
echo "Fruit 3 : $fruit3 <br>";
echo "Fruit 4 : $fruit4 <br>";
