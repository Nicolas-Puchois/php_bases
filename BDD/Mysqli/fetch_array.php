<?php
//  connexion
$mysqli = new mysqli("localhost", "db_user", "12345", "entreprise");
// stock le resultat de la requete dans une autre variable
$result = $mysqli->query("SELECT * 
FROM employes ");
// recupere le resultat du fect_assoc => tableau associatif
// affichage sous forme de tableau

while ($employes = $result->fetch_array()) {
    echo "<pre>";
    print_r($employes);
    echo "</pre>";
}
