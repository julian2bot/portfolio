
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers de PHPMailer
require __DIR__ . '/../PHPMailer/src/Exception.php';
require __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer/src/SMTP.php';

function sendmail($nom, $email, $tel,$sujet, $message){
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
        $mail->Subject = $sujet;
        $mail->Body = '
        <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                .container {
                    border: 1px solid #ccc;
                    padding: 10px;
                    margin: 10px;
                }
                .header {
                    font-weight: bold;
                    margin-bottom: 10px;
                }
                .content {
                    margin-bottom: 10px;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">Vous avez reçu un nouveau message de contact :</div>
                <div class="content">
                    <strong>Nom:</strong> ' . $nom . '<br>
                    <strong>Email:</strong> ' . $email . '<br>
                    <strong>Téléphone:</strong> ' . $tel . '<br><br>
                    <strong>Message:</strong><br>' . nl2br($message) . '
                </div>
            </div>
        </body>
        </html>';        $mail->AltBody = 'JSP C QUAW';

        $mail->send();
        $erreur = "Votre message a bien été envoyé!1";
    } catch (Exception $e) {
        // echo "Le message n'a pas pu être envoyé. Erreur Mailer: {$mail->ErrorInfo}";
        $erreur = "Le message n'a pas pu être envoyé.";
    }
}

// echo '<pre>';
// print_r ($_SERVER); 
// echo '</pre>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère et nettoie les données du formulaire
    $nom = htmlspecialchars($_POST['Name']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);
    if(!empty($_POST['Name']) AND !empty($_POST['email']) AND !empty($_POST['email']) AND !empty($_POST['message']) AND !empty($_POST['sujet']))
	{
        sendmail($nom, $email, $tel, $sujet, $message);
    $erreur = "Votre message a bien été envoyé!2";

    }else{
		$erreur= "Tous les champs doivent être complétés!";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact - PortFolio</title>        
        <link rel="icon" href="../asset/images/moi.png"> 

        <link rel="stylesheet" href="../style/global.css">
        <link rel="stylesheet" href="../style/style.css">  
        <link rel="stylesheet" href="../animation/style/animation.css">
    </head>
    <body>
    <?php
          include __DIR__ . '/../affichage/lesAnimations.php';
      ?> 
        
        <script src="../animation/script/animationSousPage.js"></script>
        
        <main>
            <section>
                <?php include __DIR__ . '/../affichage/header.php'; ?>
                <?php
                    // A FAIRE
                    include __DIR__ . '/../affichage/valAnime.php';
                    if ($animation === 'Active') {
                        echo '<script src="../animation/script/animationSousPage.js"></script> ';

                        
                    } else{
                        echo '<script src="../animation/script/noAnimationSousPage.js"></script>';

                    }
                ?>   

                <h1>Contact</h1>            
                <div class="contact">
                <form method="POST" class="form" action="">
                    <fieldset>
                        <legend>Contact Me</legend>
                        <div class="form-input">
                            <label for="Name">Nom & Prenom *</label>
                            <input type="text" name="Name" id="Name" placeholder=" " autocomplete="off" class="form-control-material"  />
                        </div>
                        <div class="form-input">
                            <label for="email">Email *</label>
                            <input type="email" name="email" id="email" placeholder=" " autocomplete="off" class="form-control-material"  />
                        </div>
                        <div class="form-input">
                            <label for="tel">N° telephone</label>
                            <input type="tel" name="tel" id="tel" placeholder=" " autocomplete="off" class="form-control-material" />
                        </div>
                        <div class="form-input">
                            <label for="sujet">Sujet *</label>
                            <input type="text" name="sujet" id="sujet" placeholder=" " autocomplete="off" class="form-control-material"  />
                        </div>
                        <div class="form-input">
                            <label for="message">Message * </label>
                            <textarea name="message" id="message"></textarea>
                            <!-- <input type="message" name="message" id="message" placeholder=" " autocomplete="off" class="form-control-material" /> -->
                        </div>
                        <button type="submit" class="btn">
                            Envoyer
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </fieldset>
                    <?php

                        if(isset($erreur))
                        {
                            echo '<font color="red">'.$erreur."</font>";
                        }
                    ?>
                </form>
                <!-- <script src="../animation/script/main.js"></script> -->
                   

                </div>  
            
            </section>
        </main> 

        <?php include __DIR__ . '/../affichage/footer.php';?>

    </body>
</html>
