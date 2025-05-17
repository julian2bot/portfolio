<?php
// include __DIR__ . '/../affichage/valAnime.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers de PHPMailer
require __DIR__ . '/../PHPMailer/src/Exception.php';
require __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer/src/SMTP.php';

function sendmail($nom, $email, $tel,$sujet, $message){
    $mdp = fopen( __DIR__ . '/../pass/pass.csv', 'r');
    
    if (!feof($mdp)) {

        $replace = [";","\n","\r","\r\n"];
        $ligne = str_replace($replace,"", fgets($mdp));
        // echo $ligne;
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
                            <strong>Sujet:</strong> ' . $sujet . '<br>
                            <strong>Message:</strong><br>' . nl2br($message) . '<br><br>
                            <strong>Nom:</strong> ' . $nom . '<br>
                            <strong>Email:</strong> ' . $email . '<br>
                            <strong>Téléphone:</strong> ' . $tel . '

                        </div>
                    </div>
                </body>
            </html>
        ';        
	$mail->AltBody = "Vous avez reçu un nouveau message de contact:\n\nNom: $nom\nEmail: $email\nTéléphone: $tel\n\nMessage:\n$message";

        $mail->send();
        // $erreur = "Votre message a bien été envoyé!";
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
    	$erreur = "Votre message a bien été envoyé!";

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
        <?php
            include __DIR__ . '/../affichage/valAnime.php';
        ?>
    <body>
    <?php
          include __DIR__ . '/../affichage/lesAnimations.php';
          
          include './../asset/utils/util.php';
      
          $contactJson = getProducts("./../asset/data/contact.json");

        //   echo "<pre>";
        //   print_r($contactJson);
        //   echo "</pre>";

        //   echo $contactJson[$lang]["title"];
      ?> 
        
        <!-- <script src="../animation/script/animationSousPage.js"></script> -->
        
        <main>
            <section>
                <?php include __DIR__ . '/../affichage/header.php'; ?>
                <?php
                    // include __DIR__ . '/../affichage/valAnime.php';
                    if ($animation === 'Active') {
                        echo '<script src="../animation/script/animationSousPage.js"></script> ';
                        echo '<script>
                        setTimeout(function() {
                            var leScript = document.createElement("script");
                            leScript.src = "../animation/script/script.js";
                            document.head.appendChild(leScript);
                        }, 2000); // 2000 millisecondes = 2 secondes
                    </script>';
                    } else{
                        echo '<script src="../animation/script/noAnimationSousPage.js"></script>';
                        echo '<script src="../animation/script/script.js"></script>';

                    }                    
                ?>         


                <h1><?php echo $contactJson[$lang]["title"];?></h1>            
                <div class="contact">
                    <form method="POST" class="form" action="">
                        <fieldset>
                            <legend><?php echo $contactJson[$lang]["legend"];?></legend>
                            <div class="form-input">
                                <label for="Name"><?php echo $contactJson[$lang]["champName"];?></label>
                                <input type="text" name="Name" id="Name" placeholder=" " autocomplete="off" class="form-control-material" required="required"  />
                            </div>
                            <div class="form-input">
                                <label for="email"><?php echo $contactJson[$lang]["champMail"];?></label>
                                <input type="email" name="email" id="email" placeholder=" " autocomplete="off" class="form-control-material"  required="required" />
                            </div>
                            <div class="form-input">
                                <label for="tel"><?php echo $contactJson[$lang]["champNum"];?></label>
                                <input type="tel" name="tel" id="tel" placeholder=" " autocomplete="off" class="form-control-material" />
                            </div>
                            <div class="form-input">
                                <label for="sujet"><?php echo $contactJson[$lang]["champSuject"];?></label>
                                <input type="text" name="sujet" id="sujet" placeholder=" " autocomplete="off" class="form-control-material" required="required"  />
                            </div>
                            <div class="form-input">
                                <label for="message"><?php echo $contactJson[$lang]["champMsg"];?> </label>
                                <textarea name="message" id="message"  required="required" ></textarea>
                            </div>
                            <button type="submit" class="btn">
                                <?php echo $contactJson[$lang]["button"];?>

                            </button>
                        </fieldset>
                        <?php

                            if(isset($erreur))
                            {
                                echo '<font color="red">'.$erreur."</font>";
                            }
                        ?>
                    </form>

                </div>  
            
            </section>
        </main> 

        <?php include __DIR__ . '/../affichage/footer.php';?>

    </body>
</html>
