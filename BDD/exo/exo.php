<?php
$pdo = new PDO("mysql:host=localhost;dbname=dialogue", "db_user", "12345", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$date = date("Y-m-d H:i:s");

// Gestion de la suppression
if (isset($_POST['supprimer']) && isset($_POST['comment_id_commentaire'])) {
    $id_commentaire = (int)$_POST['comment_id_commentaire'];
    $delete = $pdo->prepare("DELETE FROM commentaire WHERE id_commentaire = ?");
    $delete->execute([$id_commentaire]);
    header('Location: exo.php');
    exit();
}

// Gestion de la modification
if (isset($_POST['modifier']) && isset($_POST['comment_id_commentaire']) && isset($_POST['message_modif'])) {
    $id_commentaire = (int)$_POST['comment_id_commentaire'];
    $message = $_POST['message_modif'];
    $update = $pdo->prepare("UPDATE commentaire SET message = ? WHERE id_commentaire = ?");
    $update->execute([$message, $id_commentaire]);
    header('Location: exo.php');
    exit();
}

// Insertion d'un nouveau commentaire
if (!empty($_POST['pseudo']) && !empty($_POST['message'])) {
    $stmt = $pdo->prepare("INSERT INTO commentaire(pseudo, message, date_enregistrement) VALUES(?, ?, ?)");
    $stmt->execute([$_POST['pseudo'], $_POST['message'], $date]);
}

// Affichage des commentaires
$result = $pdo->query("SELECT * FROM commentaire ORDER BY date_enregistrement DESC");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Système de commentaires</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- Liste des commentaires -->
        <div class="comments-list">
            <?php
            while ($commentaire = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="commentaire">';
                echo '<div class="comment-header">';
                echo '<span class="pseudo">Par : ' . htmlspecialchars($commentaire['pseudo']) . '</span>';
                echo '<span class="date">' . date('d/m/Y à H:i', strtotime($commentaire['date_enregistrement'])) . '</span>';
                echo '</div>';
                echo '<div class="message">' . htmlspecialchars($commentaire['message']) . '</div>';
                echo '<div class="actions">';
                echo '<form method="POST" class="edit-form">';
                echo '<input type="hidden" name="comment_id_commentaire" value="' . $commentaire['id_commentaire'] . '">';
                echo '<input type="text" name="message_modif" class="edit-input" placeholder="Modifier le message">';
                echo '<button type="submit" name="modifier" class="btn-modifier">Modifier</button>';
                echo '</form>';

                echo '<form method="POST" class="delete-form">';
                echo '<input type="hidden" name="comment_id_commentaire" value="' . $commentaire['id_commentaire'] . '">';
                echo '<button type="submit" name="supprimer" class="btn-supprimer" onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer ce commentaire ?\')">Supprimer</button>';
                echo '</form>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Formulaire d'ajout -->
        <form class="comment-form" method="POST">
            <h2>Ajouter un commentaire</h2>
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id_commentaire="pseudo" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id_commentaire="message" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>

</html>