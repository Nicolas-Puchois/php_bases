<?php

if (!empty($_GET)) {
    echo "- Produit : $_GET[produit] <br>";
    echo "- Couleur : $_GET[couleur] <br>";
    echo "- Prix    : $_GET[prix] <br>";
} else {
    echo "pas de produit sélectionné";
}
