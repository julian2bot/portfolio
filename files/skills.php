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
            include './../asset/utils/util.php';

            $skillsJson = getProducts("./../asset/data/skills.json");

            
            // echo '<pre>';
            // echo '</pre>';
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
                    
                <?php
                    foreach($skillsJson["fr"] as $skillSelected){

                        echo "<div class='card'>
                            <img   src=".$skillSelected["img"]." alt='".$skillSelected["altImg"]."'>
                            
                            <h2>".$skillSelected["title"]."</h2>
                            <p>
                               ".$skillSelected["description"]."
                            </p>
                        
                        
                        </div>";
                    }
                ?>
                
                </div>
            
            </section>
    </main> 
        
        <?php include __DIR__ . '/../affichage/footer.php';?>

    </body>
</html>
