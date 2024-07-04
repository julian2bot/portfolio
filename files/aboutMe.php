<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About me - PortFolio</title>
        <link rel="icon" href="../asset/images/moi.png"> 

        <link rel="stylesheet" href="../style/global.css">
        <link rel="stylesheet" href="../style/style.css">  
        <link rel="stylesheet" href="../animation/style/animation.css">

    </head>
    <body>
        <?php
            include __DIR__ . '/../affichage/animation.php';
            include __DIR__ . '/../affichage/animationSousPage.php';
        ?>
        
        <script src="../animation/script/animationSousPage.js"></script>
        
        <div class="body" >

            <section>
                
                <?php include __DIR__ . '/../affichage/header.php'; ?>
                <script src="../animation/script/main.js"></script>

                <h1>À propos de moi</h1>
                <div id="aboutMe">
                    <section class="AboutMe">
                        <h2>Présentation</h2>
                        <p>
                            Je suis Julian Marques, en 1ere année de But Informatique à l'IUT d'Orléans. je suis passionné par le développement informatique ainsi que le modélisme avec plusieurs projets a mon actif ! 
                        </p>
                        <p>
                            Je suis guidé par ma curiosité, mon envie d'apprendre ainsi que par ma persévérance. Mon objectif est d'être diplômé en tant que développeur.
                        </p>
                        <p>
                            N'hésitez pas à me contacter pour en savoir plus !
                        </p>
                        <!-- <a href="#">
                            <img src="../asset/images/cv.png" alt="logo cv?" style="width:2em;">
                        </a> -->
                        <div class="container-info">
                            <div class="info-item">

                                <h3>AGE</h3>
                                <p>18 ans</p>
                            </div>
                            <div class="info-item">

                                <h3>ECOLE</h3>
                                <p>IUT ORLEANS</p>
                            </div>
                            <div class="info-item">

                                <h3>ETUDE</h3>
                                <p>BUT INFO</p>
                            </div>
                            <div class="info-item">
                                <h3>CV</h3>
                                <a href="#">
                                    <img src="../asset/images/cv.png" alt="logo cv?" style="width:2em;">
                                </a>
                            </div>

                        </div>
                    </section>
                    
                    <img src="../asset/images/julian_fpv_.webp" alt="moi image">
                    <!-- <img src="../asset/images/JsJeuPerso.png" alt="moi image"> -->
                </div>
                         
            </section>
        </div> 
        
        <?php include __DIR__ . '/../affichage/footer.php';?>

    </body>
</html>
