<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projects - PortFolio</title>
        <link rel="icon" href="../asset/images/moi.png"> 

        <link rel="stylesheet" href="../style/global.css">
        <link rel="stylesheet" href="../style/style.css">  
        <link rel="stylesheet" href="../animation/style/animation.css">
    </head>
    <body>
    <?php
          include __DIR__ . '/../affichage/lesAnimations.php';
      ?>
        
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
   
                
                <h1>Projets</h1>
                <div class="card-container">
                    
                    <div class="card">
                        <img src="../asset/images/handtracking.png" alt="hand tracking">
                            <h2><a href="https://github.com/julian1bot/hand-tracking">Hand Traching Python</a></h2>
                            <p>
                                IA en Python qui détecte les mouvements de la main et interagit avec l'ordinateur en fonction de ceux-ci.                            
                            </p>
                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/logoMomtessorie.png" alt="logo site momtessorie">
                            <h2><a href="#">Môm'tessori</a></h2>
                            <p>
                                Site internet relié à une base de données, gérant la connexion/inscription et les rôles (utilisateur et administrateur). 
                            </p>
                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/multigame.png" alt="logo de l'application multi game">
                            <h2><a href="https://github.com/julian1bot/Multi-Game">Multi Game</a></h2>
                            <p>
                                Application mobile avec plusieurs petits jeux (projet de lycée).
                            </p>
                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/fantD.png" alt="Fantome de la SAE pacman">
                            <h2><a href="https://github.com/julian2bot/pacman">IA Pacman</a></h2>
                            <p>
                                IA pour le jeu Pacman contrôlant automatiquement les fantômes et Pacman, dans le but de réaliser des combats entre plusieurs Pacman et fantômes.
                            </p>
                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/JSJeuPerso.png" alt="jeu 24h de l'iut">
                            <h2><a href="https://github.com/julian2bot/24hWeb">Jeu en JavaScript</a></h2>
                            <p>
                                Création d'un jeu pour les 24 heures de l'info, gestion d'un personnage et d'une carte.
                            </p>
                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/arduino.png" alt="logo arduino">
                            <h2><a href="#">Arduino</a></h2>
                            <p>
                                Diverses créations de systèmes alliant logiciel et matériel. 
                            </p>
                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/medailleOr.png" alt="logo d'une medaille d'Or">
                            <h2><a href="https://github.com/chris-mathevet/SAE-JAVA">jeux olympiques IUT</a></h2>
                            <p>
                                Conception d'un logiciel permettant de gérer des jeux olympiques, incluant la gestion des athlètes, des équipes, des épreuves et des résultats, avec une interface graphique.
                            </p>
                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/piou.png" alt="image d'un poussin en 3d">
                            <h2><a href="#">Figurine 3D</a></h2>
                            <p>
                                Modélisation 3D d'un poussin dans le style d'une peluche.
                            </p>
                    </div>
                </div>
            
            </section>
        </main> 
        
        <?php include __DIR__ . '/../affichage/footer.php';?>

    </body>
</html>