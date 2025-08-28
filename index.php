<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // charge PHPMailer

$mail = new PHPMailer(true);

try {

    // Encodage UTF-8
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64'; // garantit la bonne transmission des caractères spéciaux

    // Configuration serveur SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';      // serveur Gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = 'vaneijkdjeatsa@gmail.com';  // ton email Gmail
    $mail->Password   = 'oigt btyn fpgt edyt'; // mot de passe d'application Google
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;

    // Expéditeur et destinataire
    $mail->setFrom('vaneijkdjeatsa@gmail.com', 'INNOTECH STORE');
    $mail->addAddress('van2021@outlook.fr', 'MAVIANCE');

    // Contenu du mail
    $mail->isHTML(true);
    $mail->Subject = 'FACTURE';
    $mail->Body    = '<h2>Bonjour Monsieur/Madame,</h2><p>Vous trouverez en pièce jointe, la facture et le bon de commande livré.</p>';
    //$mail->AltBody = 'Bonjour, bienvenue dans la plateforme de gestion des stagiaires.';

    // Ajouter une pièce jointe (PDF, DOCX, etc.)
    $mail->addAttachment('Doc/BC.pdf');  
    $mail->addAttachment('Doc/Fac.pdf');  

    // Tu peux ajouter plusieurs pièces jointes
    // $mail->addAttachment('documents/autre_fichier.docx');

    $mail->send();
    echo "Email avec pièce jointe envoyé avec succès !";
} catch (Exception $e) {
    echo "Erreur lors de l’envoi : {$mail->ErrorInfo}";
}
