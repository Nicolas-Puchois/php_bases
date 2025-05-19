<?php
$mysqli = new mysqli("localhost", "db_user", "12345", "entreprise");

$result = $mysqli->query("SELECT * FROM employes");
?>

<head>
    <link rel="stylesheet" href="fetch_style.css">
</head>
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
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($employes = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $employes['id_employes']; ?></td>
                <td><?php echo $employes['prenom']; ?></td>
                <td><?php echo $employes['nom']; ?></td>
                <td><?php echo $employes['sexe']; ?></td>
                <td><?php echo $employes['service']; ?></td>
                <td><?php echo $employes['date_embauche']; ?></td>
                <td><?php echo $employes['salaire']; ?></td>
                <td>
                    <div class="btn-group">
                        <form method="POST" action="update.php" style="display: inline;">
                            <input type="hidden" name="id" value="<?php echo $employes['id_employes']; ?>">
                            <button type="submit" class="btn-modifier">Modifier</button>
                        </form>

                        <form method="POST" action="delete.php" style="display: inline;">
                            <input type="hidden" name="id" value="<?php echo $employes['id_employes']; ?>">
                            <button type="submit" class="btn-supprimer">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>