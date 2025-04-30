
<?php
include('./lib.php');
echo date(" d l F Y");
$chaineCar = " toto    ";
echo "<br>";
echo (strlen(trim($chaineCar)));

// excerpt

$articleContent = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo quisquam nemo magnam consectetur recusandae dolore excepturi, officia dicta molestiae cumque autem quaerat eveniet at quibusdam ut ab voluptate dolorum qui?";

$excerpt = substr($articleContent, 0, 20) . '...<a href="/condition"> Voir l\'article </a>';
echo "<br>";
echo $excerpt;
echo "<br>";

//  isset()
// $pseudo = "jocker";


if (isset($pseudo)) {
    echo 'La variable $pseudo existe';
} else {
    echo 'La variable $pseudo n\'existe pas';
}
echo "<br>";

$text = 'La variable $pseudo';
if (isset($pseudo)) {
    $text = "existe ";
} else {
    $text = 'n\'existe pas';
}

echo 'La variable $pseudo ' . $text;
echo "<br>";

echo 'La variable $pseudo ' . ((isset($pseudo)) ? "existe" : "n'existe pas");
echo "<br>";

//  empty()
$pseudo1 = "";
echo 'La variable $pseudo' . ((empty(trim($pseudo1))) ? " est " : ' n\'est pas ') . "vide";
echo "<br>";

$tab = [];
array_push($tab, "test", "test");
$tab[] = "test";
echo "<pre>";
print_r($tab);
echo "</pre>";


debug($tab);
debug($tab, 0);
