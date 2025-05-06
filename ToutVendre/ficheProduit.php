<?php
require_once('inc/haut.inc.php')
?>
<?php
require_once('inc/bas.inc.php')
?>
<?php
include('components/nav/nav.php');

// var_dump($_GET);


// if (isset($_GET['id'])) {
//     echo "ID du produit sélectionné : $_GET[id]";
// } else {
//     echo "Pas de produit sélectionné";
// }


if (!empty($_GET['id'])) {
    echo "ID du produit sélectionné : $_GET[id]";
} else {
    echo "Pas de produit sélectionné";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>