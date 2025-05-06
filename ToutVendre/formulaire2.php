<?php
require_once('inc/haut.inc.php');
require_once('components/nav/nav.php');

?>
<?php
require_once('inc/bas.inc.php');

$actionForm = "";

if (!isset($_POST)) {
    $actionForm = "./formulaire3.php";
}
?>

<!-- 2 champs avec : pseudo et email
 
    à la soumission : diriger vers "formulaire 3"-->

<form method="POST" action="./formulaire3.php">
    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <br>
    <button type="submit">Valider</button>

</form>