<?php

$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "db_user", "12345", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

echo "<pre>";
print_r($pdo);
echo "</pre>";

echo "<pre>";
print_r(get_class_methods($pdo));
echo "</pre>";
