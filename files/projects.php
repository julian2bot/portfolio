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
            <h1>Competence</h1>
            <script src="../animation/script/main.js"></script>

            <div class="card-container">
                <div class="card">
                    <img src="../asset/images/githubhandtracking.png" alt="arduino">
                    <div class="content">
                        <h3>Hand Traching Python</h3>
                        <p>IA python qui detecte les mouvements de la main et interagie avec l'ordinateur en fonction de celle ci  </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/Html.png" alt="arduino">
                    <div class="content">
                        <h3>Môm'tessori</h3>
                        <p>site internet relié a une base de donnée, gere la connexion/ incription, des roles (utilisateur & administateur) </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/base-de-donnees.png" alt="arduino">
                    <div class="content">
                        <h3>Multi Game</h3>
                        <p>Application Mobile avec plusieurs petit jeu (projet du lycée)</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/Css.png" alt="arduino">
                    <div class="content">
                        <h3>IA Pacman</h3>
                        <p>IA pour le jeu Pacman controle du fantome et pacman automatique dans le but de faire des combats de x pacman/ fantome</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/JavaScript.png" alt="arduino">
                    <div class="content">
                        <h3>Jeu en JavaScript</h3>
                        <p>Creation d'un jeu pour les 24h de l'info, gestion d'un personnage et d'une carte</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/arduino.png" alt="arduino">
                    <div class="content">
                        <h3>Arduino</h3>
                        <p>divers creation de systeme aliant software et hardware </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/Java.png" alt="arduino">
                    <div class="content">
                        <h3>jeux olympiques IUT</h3>
                        <p>Conception d'un logiciel permetant de geré des jeux olympiques, gestion des athletes, equipes, epreuves et resultat avec une interface graphique</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/piou.png" alt="arduino">
                    <div class="content">
                        <h3>Figurine 3D</h3>
                        <p>Modelisation 3d d'un poussin suivant le style d'une peluche</p>
                    </div>
                </div>
            </div>
           
        </section>
    </div> 
    
    <?php include __DIR__ . '/../affichage/footer.php';?>

</body>
</html>
