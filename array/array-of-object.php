<?php
include(__DIR__  . "/../fonction/lib.php");

$tabOfArticles = [
    (object)[
        "id" => 1,
        "auteur" => "Hélène",
        "titre" => "Mon premier article",
        "content" => "lorem ipsum dolor",
        "image => ",
        "slug" => "mon-premier-article"
    ],
    (object)[
        "id" => 2,
        "auteur" => "Nico",
        "titre" => "Mon second article",
        "content" => "lorem ipsum dolor",
        "image => ",
        "slug" => "mon-second-article"
    ],
    (object)[
        "id" => 3,
        "auteur" => "Hélène",
        "titre" => "Mon troisième article",
        "content" => "lorem ipsum dolor",
        "image => ",
        "slug" => "mon-troisième-article"
    ],
];

// debug($tabOfArticles);



function findTitle($article)
{
    return $article->titre;
}


array_map("findTitle", $tabOfArticles);



// function findByAuthor($article, $person)
// {
// $person = "Hélène";
//     return  $article->auteur = $person;
// }

$person = "Hélène";
$newTab = array_filter($tabOfArticles, function ($article) use ($person) {
    return $article->auteur == $person;
});


// $person = "Hélène";
// $newTab = array_filter($tabOfArticles, findByAuthor($article, $person));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="container">
        <?php
        foreach ($newTab as $article) {
            echo "
        <div class='card'>
            <h2>$article->titre</h2>
            <p>$article->content</p>
            <span>Article par $article->auteur</span>
        </div> 
        ";
        }
        ?>
    </div>
</body>

</html>