<?php
//  connexion
$mysqli = new mysqli("localhost", "db_user", "12345", "entreprise");
// stock le resultat de la requete dans une autre variable
$result = $mysqli->query("SELECT * 
FROM employes 
WHERE id_employes=491");
// recupere le resultat du fect_assoc => tableau associatif
$employe = $result->fetch_row();
// affichage sous forme de tableau
echo "<pre>";
print_r($employe);
echo "</pre>";
