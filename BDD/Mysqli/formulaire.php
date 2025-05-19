<?php

if (!empty($_POST)) {
    $mysqli = new mysqli("localhost", "db_user", "12345", "entreprise");
    try {
        $mysqli->query("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire)
        VALUES('$_POST[prenom]', '$_POST[nom]', '$_POST[sexe]', '$_POST[service]',' $_POST[date_embauche]', '$_POST[salaire]'); 
");
        echo " <div id='sucess'>L'employé avec l'id : $mysqli->insert_id
         a bien été ajouté
        </div>";
    } catch (\Throwable $error) {
        echo "<pre>";
        echo $error;
        echo "</pre>";
    }
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
}

?>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<form action="" method="POST">

    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom">

    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom">

    <label for="sexe">Sexe</label>
    <div id="sexe">
        <label for="man">Masculin</label>
        <input type="radio" name="sexe" id="sexe man" value="m">
        <label for="women"></label>
        Feminin<input type="radio" name="sexe" id="sexe women" value="f">
    </div>


    <label for="service">Service</label>
    <select name="service" id="service">
        <option>-- Veuillez choisir une options --</option>
        <option value="informatique">Informatique </option>
        <option value="direction">Direction</option>
        <option value="production">Production</option>
        <option value="secretariat">Secretariat</option>
        <option value="comptabilite">Comptabilite</option>
        <option value="commercial">Commercial</option>
        <option value="juridique">Juridique</option>
        <option value="assistant">Assistant</option>
        <option value="communication">Communication</option>
    </select>

    <label for="date_embauche">Date d'embauche</label>
    <input type="date" id="date_embauche" name="date_embauche">

    <label for="salaire">Salaire</label>
    <input type="number" id="salaire" name="salaire">

    <button type="submit">Envoyer</button>

</form>