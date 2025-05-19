<?php
$mysqli = new mysqli("localhost", "db_user", "12345", "entreprise");

// Récupération des données actuelles de l'employé
if (isset($_POST['id'])) {
    $id = (int)$_POST['id']; // Cast en integer pour sécurité

    // Vérifier si c'est une soumission du formulaire de modification
    if (isset($_POST['prenom'], $_POST['nom'], $_POST['sexe'], $_POST['service'], $_POST['date_embauche'], $_POST['salaire'])) {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $sexe = $_POST['sexe'];
        $service = $_POST['service'];
        $date_embauche = $_POST['date_embauche'];
        $salaire = $_POST['salaire'];

        $query = "UPDATE employes SET 
                 prenom = ?, 
                 nom = ?, 
                 sexe = ?, 
                 service = ?, 
                 date_embauche = ?, 
                 salaire = ? 
                 WHERE id_employes = ?";

        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("sssssdi", $prenom, $nom, $sexe, $service, $date_embauche, $salaire, $id);

        if ($stmt->execute()) {
            header('Location: fetch_field.php?message=modification_reussie');
            exit();
        } else {
            $error = "Erreur lors de la modification";
        }
    }

    // Récupération des données de l'employé
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
    <title>Modifier un employé</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Modifier un employé</h2>

        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form action="" method="POST">
            <!-- Ajout du champ caché pour l'ID -->
            <input type="hidden" name="id" value="<?php echo $employe['id_employes']; ?>">

            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" value="<?= $employe['prenom'] ?>">

            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="<?= $employe['nom'] ?>">

            <label for="sexe">Sexe</label>
            <div id="sexe">
                <label for="sexe_m">Masculin</label>
                <input type="radio" name="sexe" id="sexe_m" value="m" <?php echo ($employe['sexe'] == 'm') ? 'checked' : ''; ?>>

                <label for="sexe_f">Féminin</label>
                <input type="radio" name="sexe" id="sexe_f" value="f" <?php echo ($employe['sexe'] == 'f') ? 'checked' : ''; ?>>
            </div>


            <label for="service">Service</label>
            <select name="service" id="service">
                <option>-- Veuillez choisir une option --</option>
                <option value="informatique" <?php echo ($employe['service'] == 'informatique') ? 'selected' : ''; ?>>Informatique
                </option>
                <option value="direction" <?php echo ($employe['service'] == 'direction') ? 'selected' : ''; ?>>Direction
                </option>
                <option value="production" <?php echo ($employe['service'] == 'production') ? 'selected' : ''; ?>>Production
                </option>
                <option value="secretariat" <?php echo ($employe['service'] == 'secretariat') ? 'selected' : ''; ?>>Secrétariat
                </option>
                <option value="comptabilite" <?php echo ($employe['service'] == 'comptabilite') ? 'selected' : ''; ?>>Comptabilité
                </option>
                <option value="commercial" <?php echo ($employe['service'] == 'commercial') ? 'selected' : ''; ?>>Commercial
                </option>
                <option value="juridique" <?php echo ($employe['service'] == 'juridique') ? 'selected' : ''; ?>>Juridique
                </option>
                <option value="assistant" <?php echo ($employe['service'] == 'assistant') ? 'selected' : ''; ?>>Assistant
                </option>
                <option value="communication" <?php echo ($employe['service'] == 'communication') ? 'selected' : ''; ?>>Communication
                </option>
            </select>

            <label for="date_embauche">Date d'embauche</label>
            <input type="date" id="date_embauche" name="date_embauche" value="<?= $employe['date_embauche'] ?>">

            <label for="salaire">Salaire</label>
            <input type="number" id="salaire" name="salaire" value="<?= $employe['salaire'] ?>">

            <button type="submit">Envoyer</button>

        </form>
    </div>
</body>

</html>