<?php

//  opérateurs
// = --> affectation
// == --> comparaison de valeur
// === --> comparaison de valeur + type
//  > | < | > = |<> ou ! = --> différent de
// ! --> inversion
// AND | && --> et
// OR | || --> ou
// XOR --> ou exclusif => pas utiliser en prog


$age = 16;

if ($age > 18) {
    echo "Vous êtes majeur";
} elseif ($age == 18) {
    echo "Perdu";
} else {
    echo "Vous êtes mineur";
}
