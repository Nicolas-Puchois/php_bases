<?php

$pdo = new PDO("mysql:host=localhost;dbname=securite", "db_user", "12345", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$message = '';
$isNotEmpty = false;
$pseudoIsValid = true; // Par défaut valide
$mdpIsValid = true;   // Par défaut valide
if (!empty($_POST)) {
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    // Validation du pseudo et mot de passe
    $pseudoIsValid = preg_match('/^[a-zA-Z0-9_-]{3,20}$/', $pseudo);
    // $mdpIsValid = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $mdp);
    //  pour encoder les mdp --> 
    password_hash($mdp, PASSWORD_BCRYPT);
    // Si les deux sont valides, on vérifie en base de données
    if ($pseudoIsValid /*&& $mdpIsValid*/) {
        // Protection XSS
        $pseudo = htmlspecialchars($pseudo);
        $mdp = htmlspecialchars($mdp);
        $goodPassword = password_verify($membre['mdp'], PASSWORD_BCRYPT);

        // Requête préparée pour éviter les injections SQL
        $req = "SELECT * FROM membre WHERE pseudo = ? AND mdp = ?";
        $stmt = $pdo->prepare($req);
        $stmt->execute([$pseudo, $mdp]);
        $membre = $stmt->fetch(PDO::FETCH_ASSOC);
        $isNotEmpty = !empty($membre);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>

<body>
    <form action="" method="POST">
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo">
        <label for="mdp">Mot de Passe</label>
        <input type="password" id="mdp" name="mdp">
        <input type="submit" value="Se connecter">
    </form>

    <div class="affichage">
        <h2 class="<?php echo ($isNotEmpty) ? "valider" : "erreur"; ?>">
            <?php
            if (!$pseudoIsValid) {
                echo "Pseudo invalide (3-20 caractères alphanumériques, - ou _ autorisés).<br>";
            }
            // if (!$mdpIsValid) {
            //     echo "Mot de passe invalide (au moins 2 caractères avec majuscule, minuscule, chiffre et symbole).<br>";
            // }
            if ($pseudoIsValid && $mdpIsValid) {
                if ($isNotEmpty) {
                    echo "Vous êtes connecté avec le pseudo : {$membre['pseudo']} || 
                         le nom : {$membre['nom']} || 
                         le prénom : {$membre['prenom']} || 
                         le mail : {$membre['email']}";
                } else {
                    echo "Les identifiants sont incorrects";
                }
                echo $mdp;
            }
            ?>
        </h2>
    </div>
</body>

</html>