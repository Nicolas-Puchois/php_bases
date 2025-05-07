<?php
require_once('inc/haut.inc.php');
require_once('components/nav/nav.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';


if (!empty($_POST)) {
    $messageHTML = '
    <html>
    <body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
        <table style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 20px;">
            <tr>
                <td style="text-align: center; border-bottom: 1px solid #ddd; padding-bottom: 10px;">
                    <h2 style="color: #333;">Nouveau message de contact</h2>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px;">
                    <p><strong>Expéditeur :</strong> ' . htmlspecialchars($_POST["expediteur"]) . '</p>
                    <p><strong>Objet :</strong> ' . htmlspecialchars($_POST["sujet"]) . '</p>
                    <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">
                    <p style="white-space: pre-line; color: #555;">' . nl2br(htmlspecialchars($_POST["message"])) . '</p>
                </td>
            </tr>
        </table>
    </body>
    </html>';


    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8;\r\n";
    $headers .= "Reply-To: " . $_POST['expediteur'] . "\r\n";
    $headers .= "From: <" . $_POST['expediteur'] . '>' . "\r\n";
    $headers .= "Deliver-to" . $_POST['destinataire'] . "\r\n";

    mail($_POST['destinataire'], $_POST['sujet'], $messageHTML, $headers);
}


?>

<form method="POST" action="">
    <label for="destinataire"> Adresse du destinataire</label>
    <input type="email" id=destinataire name="destinataire" placeholder="Email du destinataire">
    <label for="expediteur"> Adresse de l'expediteur</label>
    <input type="email" id=expediteur name="expediteur" placeholder="Email du expediteur">
    <label for="sujet">Sujet du amil</label>
    <input type="text" id=sujet name="sujet" placeholder="Sujet du mail">
    <label for="message">Message</label>
    <textarea name="message" id="message" rows="3"></textarea>
    <button type="submit">Envoyer</button>
</form>



<?php
require_once('inc/bas.inc.php');
