<?php
// INFO /!\ pas de connection root
// $mysqli = new mysqli("localhost","root","12345","entreprise");
$mysqli = new mysqli("localhost", "db_user", "12345", "entreprise");
// echo '<pre>';
// print_r($mysqli);
// echo '</pre>';
// echo '<pre>';
// print_r(get_class_methods($mysqli));
// echo '</pre>';

// erreur volontaire : requête non valide
// $mysqli->query("mauvaise requête volontaire ....");
// echo $mysqli->error;

// $mysqli->query("
// INSERT INTO entreprise.employes
// (prenom, nom, sexe, service, date_embauche, salaire)
// VALUES('John', 'Doe', 'm', 'informatique', '2023-12-12', 5000); 
// ");
// echo $mysqli->affected_rows . " enregistrement(s) effectué(s) par la requête .";

// try {
//     $mysqli->query("
// INSERT INTO entreprise.employes
// (prenom, nom, sexe, service, date_embauche, salaire)
// VALUES('John', 'Doe', 'm', 'informatique', '2023-12-12', 5000); 
// ");
//     echo $mysqli->affected_rows . " enregistrement(s) effectué(s) par la requête .";
// } catch (\Throwable $error) {
//     echo "<pre>";
//     echo $error;
//     echo "</pre>";
//     echo "Erreur d'exécution :" . $error->getMessage();
// }
// try {
//     $result = $mysqli->query("
//     INSERT INTO entreprise.employes
//     (prenom, nom, sexe, service, date_embauche, salaire)
//     VALUES('John', 'Doe', 'm', 'informatique', '2023-12-12', 5000); 
//     ");
//     if ($result) {
//         echo  "ok";
//     }
// } catch (Throwable $e) {
//     echo "ko";
// }


// toujours affecter 1 seul enregistrement
// accèder aux enregistrement uniquement par un champ unique : id / slug / email
// try {
//     $result = $mysqli->query("
//     UPDATE entreprise.employes
//     SET service = 'informatique'
//     Where id_employes=627; 
//     ");
//     if ($result) {
//         if ($mysqli->affected_rows !== 0) {
//             echo $mysqli->affected_rows . ' enregistrement(s) affecté(s) par la requête';
//         } else {
//             echo "Aucun enregistrement trouvé";
//         }
//     }
// } catch (Throwable $e) {
//     echo "ko : " . $e->getMessage();
// }

try {
    $result = $mysqli->query("DELETE FROM employes 
    Where id_employes=547
    ");;
    if ($result) {
        if ($mysqli->affected_rows !== 0) {
            echo $mysqli->affected_rows . ' enregistrement(s) affecté(s) par la requête';
        } else {
            echo "Aucun enregistrement trouvé";
        }
    }
} catch (Throwable $e) {
    echo "ko : " . $e->getMessage();
}
