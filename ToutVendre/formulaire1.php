<?php
require_once('inc/haut.inc.php');

require_once('inc/bas.inc.php');
require_once('components/nav/nav.php');

$message = '';
$error_ville = "";
$error_cp = "";
$error_adresse = "";

if (!empty($_POST)) {
    $message = "Donnéees récupérées : <br>";
    $message .= "Ville : $_POST[ville] <br>";
    $message .= "Code Postal : $_POST[cp] <br>";
    $message .= "Adresse : $_POST[adresse] <br>";
}


?>
<?= $message ?>

<form method="POST" action="">

    <label for="ville">Ville</label>
    <input type="text" id="ville" name="ville">
    <span class="error"><?= $error_ville ?></span>
    <br>
    <label for="cp">Code Postal</label>
    <input type="text" id="cp" name="cp">
    <span class="error"><?= $error_cp ?></span>

    <br>
    <label for="adresse">Adresse</label>
    <input type="text" id="adresse" name="adresse">
    <span class="error"><?= $error_adresse ?></span>

    <br>
    <button type="submit">Valider</button>
</form>