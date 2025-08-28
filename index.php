<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // charge PHPMailer

$mail = new PHPMailer(true);

try {
    // Configuration serveur SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';      // serveur Gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = 'vaneijkdjeatsa@gmail.com';  // ton email Gmail
    $mail->Password   = 'jbcv qlnh vxso ppyq'; // mot de passe d'application Google
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;

    // Expéditeur et destinataire
    $mail->setFrom('vaneijkdjeatsa@gmail.com', 'INNOTECH STORE');
    $mail->addAddress('van2021@outlook.fr', 'chef agence');

    // Contenu du mail
    $mail->isHTML(true);
    $mail->Subject = 'PROMOTION AU GRADE SUPERIEUR';
    $mail->Body    = '<h2>Bonjour M.SIGNING</h2><p>Nous tenons à vous féliciter pour votre nouveau poste comme chef d.agence.</p>';
    //$mail->AltBody = 'Bonjour, bienvenue dans la plateforme de gestion des stagiaires.';

    $mail->send();
    echo "Email envoyé avec succès !";
} catch (Exception $e) {
    echo "Erreur lors de l’envoi : {$mail->ErrorInfo}";
}