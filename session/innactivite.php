<?php

session_save_path("./tmp");
session_start();

echo time();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

if (isset($_SESSION['temps'])) {
    if (time() > $_SESSION['limite'] +  $_SESSION['temps']) {
        // session_destroy();
        // echo "deconnecté";
        header('location: deconnexion.php');
    } else {
        $_SESSION['temps'] = time();
        echo "connexion mise à jour";
    }
} else {
    echo "Connexion";
    $_SESSION['temps'] = time();
    $_SESSION['limite'] = 10; // en seconde
}
?>

<script>
    setTimeout(() => {
        location.reload();
    }, 15000);
</script>