<?php

// require_once('./formulaire2.php');

if (!empty($_POST["pseudo"]) && !empty($_POST["email"])) {
    $message = "Données envoyées : <br>";
    $message .= "Pseudo : $_POST[pseudo] <br>";
    $message .= "Email : $_POST[email] <br>";
    echo $message;
    $file = fopen("./sauv/sauvegarde.txt", "a");
    fwrite($file, $_POST['pseudo'] . " - ");
    fwrite($file, $_POST['email'] . "\n");
    fclose($file);
} else {
    header('location: formulaire2.php');
}

require_once('inc/haut.inc.php');
require_once('components/nav/nav.php');
require_once('inc/bas.inc.php');
