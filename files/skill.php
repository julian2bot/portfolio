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
            <h1>Compétences</h1>
            <script src="../animation/script/main.js"></script>
            <div class="card-container">
                <div class="card">
                    <img src="../asset/images/Python.png" alt="arduino">
                    <div class="content">
                        <h3>Python</h3>
                        <p>IA Pacman python, gestion de donnée, gestion serveur...  </p>
                        <progress max="100" value="80"></progress>

                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/Html.png" alt="arduino">
                    <div class="content">
                        <h3>Html</h3>
                        <p>Site Internet... </p>
                        <progress max="100" value="60"></progress>

                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/base-de-donnees.png" alt="arduino">
                    <div class="content">
                        <h3>Base de donnees</h3>
                        <p>Gestion de base de donnée, communication avec base de donnée...</p>
                        <progress max="100" value="55"></progress>

                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/Css.png" alt="arduino">
                    <div class="content">
                        <h3>Css</h3>
                        <p>styliser des pages, animations page...</p>
                        <progress max="100" value="70"></progress>

                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/php.png" alt="arduino">
                    <div class="content">
                        <h3>PHP</h3>
                        <p>Gestion serveur client, simplifier des pages...</p>
                        <progress max="100" value="30"></progress>

                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/JavaScript.png" alt="arduino">
                    <div class="content">
                        <h3>JavaScript</h3>
                        <p>Gestion client sur site internet, Bot discord.Js, jeu video, nique JS </p>
                        <progress max="100" value="10"></progress>

                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/arduino.png" alt="arduino">
                    <div class="content">
                        <h3>Arduino</h3>
                        <p>Création feux circulation, robot reveil, gestion heure, gestion materiel & logiciel</p>
                        <progress max="100" value="75"></progress>

                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/Java.png" alt="arduino">
                    <div class="content">
                        <h3>Java</h3>
                        <p>Implémentation back & front end d'un logiciel</p>
                        <progress max="100" value="60"></progress>

                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/SolidWorks.png" alt="arduino">
                    <div class="content">
                        <h3>SolidWorks / 3D</h3>
                        <p>Modelisation & impression piece technique et figurine</p>
                        <progress max="100" value="60"></progress>

                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/SolidWorks.png" alt="arduino">
                    <div class="content">
                        <h3>Modélisme</h3>
                        <p>Voiture RC & Drone Fpv à réparer </p>
                        <progress max="100" value="90"></progress>

                    </div>
                </div>
                <div class="card">
                    <img src="../asset/images/circuit-electrique.png" alt="arduino">
                    <div class="content">
                        <h3>Conception schéma electrique</h3>
                        <p>creation de schéma electrique + realisation schéma electrique</p>
                        <progress max="100" value="80"></progress>

                    </div>
                </div>
            </div>
           
        </section>
    </div> 
    
    <?php include __DIR__ . '/../affichage/footer.php';?>

</body>
</html>
