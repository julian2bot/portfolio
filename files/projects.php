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
            <h1>Projets</h1>
            <script src="../animation/script/main.js"></script>

            <div class="card-container">
                <div class="card">
                    <img src="../asset/images/handtracking.png" alt="hand tracking">
                    <div class="content">
                        <h3><a href="https://github.com/julian1bot/hand-tracking">Hand Traching Python</a></h3>
                        <p>IA python qui detecte les mouvements de la main et interagie avec l'ordinateur en fonction de celle ci  </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/logoMomtessorie.png" alt="logo site momtessorie">
                    <div class="content">
                        <h3><a href="#">Môm'tessori</a></h3>
                        <p>Site internet relié a une base de donnée, gere la connexion/ incription, des roles (utilisateur & administateur) </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/multigame.png" alt="logo de l'application multi game">
                    <div class="content">
                        <h3><a href="https://github.com/julian1bot/Multi-Game">Multi Game</a></h3>
                        <p>Application Mobile avec plusieurs petit jeu (projet du lycée)</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/fantD.png" alt="Fantome de la SAE pacman">
                    <div class="content">
                        <h3><a href="https://github.com/julian2bot/pacman">IA Pacman</a></h3>
                        <p>IA pour le jeu Pacman controle du fantome et pacman automatique dans le but de faire des combats de x pacman/ fantome</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/JSJeuPerso.png" alt="jeu 24h de l'iut">
                    <div class="content">
                        <h3><a href="https://github.com/julian2bot/24hWeb">Jeu en JavaScript</a></h3>
                        <p>Creation d'un jeu pour les 24h de l'info, gestion d'un personnage et d'une carte</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/arduino.png" alt="logo arduino">
                    <div class="content">
                        <h3><a href="#">Arduino</a></h3>
                        <p>Divers creation de systeme aliant software et hardware </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/medailleOr.png" alt="logo d'une medaille d'Or">
                    <div class="content">
                        <h3><a href="https://github.com/chris-mathevet/SAE-JAVA">jeux olympiques IUT</a></h3>
                        <p>Conception d'un logiciel permetant de geré des jeux olympiques, gestion des athletes, equipes, epreuves et resultat avec une interface graphique</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/piou.png" alt="image d'un poussin en 3d">
                    <div class="content">
                        <h3><a href="#">Figurine 3D</a></h3>
                        <p>Modelisation 3d d'un poussin suivant le style d'une peluche</p>
                    </div>
                </div>
            </div>
           
        </section>
    </div> 
    
    <?php include __DIR__ . '/../affichage/footer.php';?>

</body>
</html>