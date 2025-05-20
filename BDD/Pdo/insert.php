<?php

$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "db_user", "12345", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$result = $pdo->exec("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire)
        VALUES('Anna', 'Mariana', 'f', 'informatique','2012-12-12', '3000')");

echo $result . " enregistrement affecté(s) par la requête";
