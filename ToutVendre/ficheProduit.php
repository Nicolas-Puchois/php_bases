<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Produit</title>
</head>

<body>
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