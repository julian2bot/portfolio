<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About me</title>
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
        
        <div class="body">
            <section>
                <?php include __DIR__ . '/../affichage/header.php'; ?>
                
                <script src="../animation/script/main.js"></script>

                <h1>À propos de moi</h1>
                <section class="AboutMe" style="text-align:left; margin-left:10px; max-width:50%;">
                    <h2 style="text-align:left;">Moi</h2>
                    <p>
                        Je suis Julian Marques, en 1ere année de But Informatique à l'IUT d'Orléans. je suis passionné par le développement informatique ainsi que le modélisme avec plusieurs projets a mon actif ! 
                    </p>
                    <p>
                        je suis guidé par ma curiosité, mon envie d'apprendre ainsi que par ma persévérance.  Mon objectif est d'être diplômé en tant que développeur
                    </p>
                    <p>
                        n'hésitez pas à me contacter pour en savoir plus !
                    </p>
                    <a href="#">
                        <img src="../asset/images/cv.png" alt="logo cv?" style="width:2em;">
                    </a>
                </section>
                <img src="../asset/images/moi.png" alt="moi image" style="width:100px;">
                
                         
                <ul>
                    <li><a href="#">cv</a></li>
                    <li><a href="#">insta</a></li>
                    <li><a href="#">github</a></li>
                    <li><a href="#">mail</a></li>
                    <li><a href="#">discord</a></li>
                </ul>
            
                <!-- <div style="height:75vh;"></div> -->
            </section>
        </div> 
        
        <?php include __DIR__ . '/../affichage/footer.php';?>

    </body>
</html>
