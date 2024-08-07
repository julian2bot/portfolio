
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
          include __DIR__ . '/../affichage/lesAnimations.php';
      ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
        <div id="pdf-viewer">
            <img src="../asset/images/close.png" alt="image croix" class="close">
            <canvas id="pdf-render"></canvas>
            <a href="../asset/CV_Marques_Julian.pdf" download>
                <img src="../asset/images/download.png" alt="logo telechargement" class="downloadImg">
            </a>
        </div>  

        <script src="../animation/script/affichagePDF.js"></script>
        <!-- <p id="ps">trc</p> -->
        
        <main class="body">

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

                <h1>À propos de moi</h1>

                <div id="aboutMe">
                    
                    <section class="AboutMe">
                        <h2>Présentation</h2>
                        <p> 
                            Je suis Julian Marques, en 1ère année de BUT Informatique à l'IUT d'Orléans. Je suis passionné par le développement informatique ainsi que par le modélisme, avec plusieurs projets à mon actif !
                        </p>
                        <p>
                            Je suis guidé par ma curiosité, mon envie d'apprendre ainsi que par ma persévérance. Mon objectif est d'être diplômé en tant que développeur.
                        </p>
                        <p>
                            N'hésitez pas à me contacter pour en savoir davantage !
                        </p>

                        <div class="container-info">
                            <div class="info-item">

                                <h3>AGE</h3>
                                <p>18 ans</p>
                            </div>
                            <div class="info-item">

                                <h3>ÉCOLE</h3>
                                <p>IUT ORLEANS</p>
                            </div>
                            <div class="info-item">

                                <h3>ÉTUDE</h3>
                                <p>BUT INFO</p>
                            </div>
                            <div class="info-item">

                                <h3>CV</h3>
                                <a href="#cv" class="cv" >
                                    <img src="../asset/images/cv.png" alt="logo cv?">
                                </a>    
                            </div>

                        </div>
                    </section>
                    <script src="../animation/script/main.js"></script>

                    
                    <img src="../asset/images/julian_fpv_.webp" alt="moi image">
                </div>
                         
            </section>
        </main> 
        
        <?php include __DIR__ . '/../affichage/footer.php';?>
    </body>
</html>
