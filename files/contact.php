<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>skills - PortFolio</title>        
        <link rel="icon" href="../asset/images/moi.png"> 

        <link rel="stylesheet" href="../style/global.css">
        <link rel="stylesheet" href="../style/style.css">  
        <link rel="stylesheet" href="../animation/style/animation.css">
    </head>
    <body>
        <!-- <?php
            include __DIR__ . '/../affichage/animation.php';
            include __DIR__ . '/../affichage/animationSousPage.php';
        ?> -->
        
        <script src="../animation/script/animationSousPage.js"></script>
        
        <div class="body">
            <section>
                <?php include __DIR__ . '/../affichage/header.php'; ?>
                

                <h1>Contact</h1>            
                <div class="contact">
                <form class="form" action="javascript:void(0);">
                    <fieldset>
                        <legend>Contact Me</legend>
                        <div class="form-input">
                            <label for="Name">Nom & Prenom *</label>
                            <input type="text" name="Name" id="Name" placeholder=" " autocomplete="off" class="form-control-material" required />
                        </div>
                        <div class="form-input">
                            <label for="email">Email *</label>
                            <input type="email" name="email" id="email" placeholder=" " autocomplete="off" class="form-control-material" required />
                        </div>
                        <div class="form-input">
                            <label for="tel">N° telephone</label>
                            <input type="tel" name="tel" id="tel" placeholder=" " autocomplete="off" class="form-control-material" />
                        </div>
                        <div class="form-input">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" oninput="autoResize(this)"></textarea>
                            <!-- <input type="message" name="message" id="message" placeholder=" " autocomplete="off" class="form-control-material" /> -->
                        </div>
                        <button type="submit" class="btn">
                            Envoyer
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </fieldset>
                </form>
                <script src="../animation/script/main.js"></script>
                   

                </div>  
            
            </section>
        </div> 
        <?php 
            $entete = "entete du mail a en envoyer";
            $message = "test de php + envoi mail";
            $err = mail('marquesjulian26@gmail.com', 'Envoi depuis page Contact', $message, $entete);
            // $err = 'message envoyer';
            if($err)
            echo '<p>Votre message a bien été envoyé.</p>';
        ?>
        <?php include __DIR__ . '/../affichage/footer.php';?>

    </body>
</html>
