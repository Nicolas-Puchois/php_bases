<?php

session_save_path("./tmp");
session_start();

echo "Bonjour $_SESSION[pseudo]";
//  vider une partie de la session 
// unset($_SESSION['mdp']);
//  détruire la session
// session_destroy();
