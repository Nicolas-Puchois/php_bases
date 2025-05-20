<?php

$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "db_user", "12345", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$result = $pdo->exec("UPDATE employes SET salaire=10000 where id_employes=388");

echo $result . " enregistrement affecté(s) par la requête";
