<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers de PHPMailer
require __DIR__ . '/../PHPMailer/src/Exception.php';
require __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer/src/SMTP.php';

function sendmail(){
    $mdp = fopen( __DIR__ . '/pass.csv', 'r');
    if (!feof($mdp)) {
        $ligne = fgets($mdp);
        // echo '' . $ligne . "\n";
    }
    fclose($mdp);

    $mail = new PHPMailer(true);
    try {
        // Paramètres du serveur
        $mail->SMTPDebug = 0;                      
        $mail->isSMTP();                           
        $mail->Host = 'smtp.gmail.com';   
        $mail->SMTPAuth = true;                   
        $mail->Username = 'portfoliojulian26@gmail.com'; 
        $mail->Password = $ligne;         
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
        $mail->Port = 587;                  

        // Destinataires
        $mail->setFrom('portfoliojulian26@gmail.com', 'Mailer');
        $mail->addAddress('marquesjulian26@gmail.com');  
        // Contenu
        $mail->isHTML(true);                       
        $mail->Subject = 'Objet fsdfsessai';
        $mail->Body = 'Petit fdsftest';
        $mail->AltBody = 'Petit sssstest';

        $mail->send();
        echo 'Le message a été envoyé';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur Mailer: {$mail->ErrorInfo}";
    }
}

sendmail();

?>
