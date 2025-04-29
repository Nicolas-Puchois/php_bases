<?php

$maVariable1 = 123;
$maVariable2 = 12.3;
$maVariable3 = "toto";
$maVariable4 = true;
// echo $maVariable4 . "<br>" ; => rein si false | 1 si true

echo ("MaVariable1 : " . gettype($maVariable1) . "<br>"); // integer
echo ("MaVariable2 : " . gettype($maVariable2) . "<br>"); // double
echo ("MaVariable3 : " . gettype($maVariable3) . "<br>"); // string
echo ("MaVariable4 : " . gettype($maVariable4) . "<br>"); // boolean
