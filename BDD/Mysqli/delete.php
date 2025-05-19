<?php
$mysqli = new mysqli("localhost", "db_user", "12345", "entreprise");

if (isset($_POST['id'])) {
    $id = (int)$_POST['id']; // Cast en integer pour sécurité

    // Si le formulaire de confirmation est soumis
    if (isset($_POST['confirm'])) {
        $query = "DELETE FROM employes WHERE id_employes = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header('Location: fetch_field.php');
            exit();
        } else {
            $error = "Erreur lors de la suppression";
        }
    }

    // Récupérer les informations de l'employé
    $stmt = $mysqli->prepare("SELECT * FROM employes WHERE id_employes = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $employe = $result->fetch_assoc();

    if (!$employe) {
        die("Employé non trouvé");
    }
} else {
    header('Location: fetch_field.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Supprimer un employé</title>
    <link rel="stylesheet" href="delete_style.css">
</head>

<body>
    <div class="container">
        <h2>Confirmer la suppression</h2>

        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

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
                <tr>
                    <td><?php echo $employe['id_employes']; ?></td>
                    <td><?php echo $employe['prenom']; ?></td>
                    <td><?php echo $employe['nom']; ?></td>
                    <td><?php echo $employe['sexe']; ?></td>
                    <td><?php echo $employe['service']; ?></td>
                    <td><?php echo $employe['date_embauche']; ?></td>
                    <td><?php echo $employe['salaire']; ?></td>
                </tr>
            </tbody>
        </table>

        <form method="post" class="confirmation-form">
            <p>Êtes-vous sûr de vouloir supprimer cet employé ?</p>
            <input type="submit" name="confirm" value="Oui, supprimer" class="btn-supprimer">
            <a href="fetch_field.php" class="btn-modifier">Annuler</a>
        </form>
    </div>
</body>

</html>