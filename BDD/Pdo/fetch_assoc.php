<?php
//  connexion
$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "db_user", "12345", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// stock le resultat de la requete dans une autre variable
// $result = $pdo->query("SELECT * 
// FROM employes 
// WHERE id_employes=491");
// recupere le resultat du fect_assoc => tableau associatif
// $employe = $result->fetch(PDO::FETCH_ASSOC);

// affichage sous forme de tableau
// echo "<pre>";
// print_r($employe);
// echo "</pre>";


$resultat = $pdo->query("SELECT * FROM employes");

while ($employes = $resultat->fetch(PDO::FETCH_ASSOC)) {
    echo "<pre>";
    print_r($employes);
    echo "</pre>";
}

echo  $resultat->rowCount() . " employe(s) récupéré(s)s";
