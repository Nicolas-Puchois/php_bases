<?php
//  connexion
$mysqli = new mysqli("localhost", "db_user", "12345", "entreprise");
// stock le resultat de la requete dans une autre variable
$result = $mysqli->query("SELECT * 
FROM employes ");
// recupere le resultat du fect_assoc => tableau associatif
// affichage sous forme de tableau

$employes = $result->fetch_all();
echo "<pre>";
print_r($employes);
echo "</pre>";


foreach ($employes as $employe) {
    echo "Bonjour $employe[1] $employe[2] <br>";
}

echo "<br> $result->num_rows employe(s) récupéré(s)";
