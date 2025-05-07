<?php
// setcookie('nomCookie', 'contenueCookie', time() + 31536000);



if (isset($_COOKIE['nomCookie'])) {
    setcookie('nomCookie', '', time() - 3600, "/cookies");
}

// echo time();
