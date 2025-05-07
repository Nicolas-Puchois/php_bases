<?php
if (!empty($_GET['pays'])) {
    $pays = $_GET['pays'];
} elseif (isset($_COOKIE['pays'])) {
    $pays = $_COOKIE['pays'];
} else {
    $pays = "fr";
}

if (!isset($_COOKIE['pays'])) {
    $expiration = 365 * 24 * 3600;
    setcookie("pays", $pays, time() +  $expiration);
}

?>

<!DOCTYPE html>
<html lang=<?= $pays ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><a href="?pays=fr">French</a></li>
        <li><a href="?pays=es">Spanish</a></li>
        <li><a href="?pays=en">English</a></li>
        <li><a href="?pays=it">Italian</a></li>
    </ul>
    <?php
    switch ($pays) {
        case 'fr':
            echo '<p>Bonjour, <br>  Vous visiter actuellement le site en français <br>Effectivement, la sauvegarde du cookie permet de retenir la langue avec laquelle vous naviguer sur le site pour vos prochaines visites. <br>A bientôt.</p>';
            break;
        case 'es':
            echo '<p>¡Hola <br>En este momento está visitando el sitio en español <br>De hecho, la cookie permite la copia de seguridad de conservar el idioma que utilice el sitio para futuras visitas. <br>Pronto.</p>';
            break;
        case 'en':
            echo '<p>Hello <br>You are currently visiting the site in English <br>Indeed, the cookie allows the backup to retain the language that you use the site for future visits. <br>Soon.</p>';
            break;
        case 'it':
            echo '<p>Ciao <br>Si sta attualmente visitando il sito in Italiano <br>Infatti, il cookie consente il backup di mantenere la lingua che si usa il sito per visite future. <br>Presto.</p>';
            break;
    }
    ?>


</body>

</html>