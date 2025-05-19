<?php
//  connexion
$mysqli = new mysqli("localhost", "db_user", "12345", "entreprise");
// stock le resultat de la requete dans une autre variable
$result = $mysqli->query("SELECT * 
FROM employes 
WHERE id_employes=491");
// recupere le resultat du fect_assoc => tableau associatif
$employe = $result->fetch_assoc();
// affichage sous forme de tableau
// echo "<pre>";
// print_r($employe);
// echo "</pre>";


$resultat = $mysqli->query("SELECT * FROM employes");
$employes = $resultat->fetch_assoc()
// while ($employes) {
//     echo "<pre>";
//     print_r($employes);
//     echo "</pre>";
// }



?>
<link rel="stylesheet" href="fetch_style.css">
<!-- <div>
    <ul>
        <li>Prenom</li>
        <li>Nom</li>
        <li>Sexe</li>
        <li>Service</li>
        <li>Date_embauche</li>
        <li>Salaire</li>
    </ul>
    <ul>
        <li><?php echo $employe["prenom"] ?></li>
        <li><?php echo $employe["nom"] ?></li>
        <li><?php echo $employe["sexe"] ?></li>
        <li><?php echo $employe["service"] ?></li>
        <li><?php echo $employe["date_embauche"] ?></li>
        <li><?php echo $employe["salaire"] ?></li>
    </ul>
</div> -->

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Sexe</th>
            <th>Service</th>
            <th>Date d'embauche</th>
            <th>Salaire</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($employes = $resultat->fetch_assoc()): ?>
            <tr>
                <td><?php echo $employes['id_employes']; ?></td>
                <td><?php echo $employes['prenom']; ?></td>
                <td><?php echo $employes['nom']; ?></td>
                <td><?php echo $employes['sexe']; ?></td>
                <td><?php echo $employes['service']; ?></td>
                <td><?php echo $employes['date_embauche']; ?></td>
                <td><?php echo $employes['salaire']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>