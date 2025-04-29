<?php
// Instruction d'affichage 
echo "bonjour";
echo "<br>";
print "bonjour";
?>

<div>
    <?php
    echo "bonjour";
    ?>
    <br>
    <?php
    print "bonjour";
    ?>
</div>

<!-- debug -->
<?php
$tab = [1, 2, 3, "444"];
$var = "toto";
// debugage - obligation pour les tableaux
print_r($tab);
echo "<br>";
var_dump($tab);
echo "<br>";
echo ($var);
echo $tab;
var_dump($var);
