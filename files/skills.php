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


                <h1>Compétences</h1>            
                <div class="card-container">
                    
                    <div class="card">
                        <img   src="../asset/images/Python.png" alt="arduino">
                        
                        <h2>Python</h2>
                        <p>
                            IA Pacman, gestion de données, gestion de serveur.
                        </p>
                        <progress max="100" value="80"></progress>

                        
                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/html.png" alt="logo htl">
                    
                        <h2>Html</h2>
                        <p>
                            Sites internet vitrines et dynamiques.
                        </p>
                        <progress max="100" value="60"></progress>

                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/base-de-donnees.png" alt="logo base de donnée">
                    
                        <h2>Base de données</h2>
                        <p>
                            Gestion de bases de données, communication avec les bases de données.
                        </p>
                        <progress max="100" value="55"></progress>

                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/css.png" alt="logo css">
                    
                        <h2>Css</h2>
                        <p>
                            Stylisation de pages, animations de pages.
                        </p>
                        <progress max="100" value="70"></progress>

                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/php.png" alt="logo php">
                    
                        <h2>PHP</h2>
                        <p>
                            Gestion serveur-client, simplification de pages.
                        </p>
                        <progress max="100" value="30"></progress>

                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/javascript.png" alt="logo JavaScript">
                    
                        <h2>JavaScript</h2>
                        <p>
                            Gestion des clients sur site internet, Bot Discord.js, développement de jeux vidéo.
                        </p>
                        <progress max="100" value="10"></progress>

                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/arduino.png" alt="logo arduino">
                    
                        <h2>Arduino</h2>
                        <p>
                            Création de feux de circulation, robot-réveil, gestion de l’heure, gestion du matériel et du logiciel.
                        </p>
                        <progress max="100" value="75"></progress>

                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/java.png" alt="logo java">
                    
                        <h2>Java</h2>
                        <p>
                            Implémentation front-end et back-end d'un logiciel.
                        </p>
                        <progress max="100" value="60"></progress>

                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/solidworks.png" alt="logo solidworks">
                    
                        <h2>SolidWorks / 3D</h2>
                        <p>
                            Modélisation et impression de pièces techniques et de figurines.
                        </p>
                        <progress max="100" value="60"></progress>

                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/solidworks.png" alt="image qui represente le modélisme">
                    
                        <h2>Modélisme</h2>
                        <p>
                            Réparation de voitures RC et de drones FPV.
                        </p>
                        <progress max="100" value="90"></progress>

                    </div>
                    
                    <div class="card">
                        <img src="../asset/images/circuit-electrique.png" alt="image qui represente un circuit electrique">
                    
                        <h2>Conception schéma electrique</h2>
                        <p>
                            Création et réalisation de schémas électriques pour divers projets.
                        </p>
                        <progress max="100" value="80"></progress>

                    </div>
                </div>
            
            </section>
    </main> 
        
        <?php include __DIR__ . '/../affichage/footer.php';?>

    </body>
</html>
