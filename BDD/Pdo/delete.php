<?php

$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "db_user", "12345", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$result = $pdo->exec("DELETE FROM employes WHERE id_employes=350");

echo $result . " enregistrement affecté(s) par la requête";
