<?php
    include __DIR__ . '/../affichage/valAnime.php';
?>
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
      
          include_once './../asset/utils/util.php';
      
          $aboutmeJson = getProducts("./../asset/data/aboutMe.json");
        //   setcookie("lang", "en", time() + 3600 * 24 * 365, null, null, false, true); // doit etre fait au tout debut debut aucun code / html / espace etc
        //   setcookie("lang", "en", time() + 3600 * 24 * 365, "/", null, false, true);

        // $lang = "fr";
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

                <h1><?php echo $aboutmeJson["$lang"]["title"]; ?></h1>

                <div id="aboutMe">
                    
                    <section class="AboutMe">
                        <h2><?php echo $aboutmeJson["$lang"]["underTitle"]; ?></h2>
                        <p> 
                        <?php echo $aboutmeJson["$lang"]["description"]; ?>
                        </p>
                        <p>
                        <?php echo $aboutmeJson["$lang"]["description2"]; ?>
                        </p>
                        <p>
                        <?php echo $aboutmeJson["$lang"]["final"]; ?>
                        </p>

                        <div class="container-info">
                            <div class="info-item">

                                <h3><?php echo $aboutmeJson["$lang"]["age"]; ?></h3>
                                <p><?php echo $aboutmeJson["$lang"]["valeurAge"]; ?></p>
                            </div>
                            <div class="info-item">

                                <h3><?php echo $aboutmeJson["$lang"]["school"]; ?></h3>
                                <p><?php echo $aboutmeJson["$lang"]["schoolValue"]; ?></p>
                            </div>
                            <div class="info-item">

                                <h3><?php echo $aboutmeJson["$lang"]["studie"]; ?></h3>
                                <p><?php echo $aboutmeJson["$lang"]["studieValue"]; ?></p>
                            </div>
                            <div class="info-item">

                                <h3><?php echo $aboutmeJson["$lang"]["cv"]; ?></h3>
                                <a href="#cv" class="cv" >
                                    <img src="../asset/images/cv.png" alt="logo cv?">
                                </a>    
                            </div>

                        </div>
                    </section>
                    <script src="../animation/script/main.js"></script>

                    
                    <img src="../asset/images/julian_fpv_.webp" alt="moi image">
                </div>
                <script>
                        function getCookie(name) {
                            const value = `; ${document.cookie}`;
                            const parts = value.split(`; ${name}=`);
                            if (parts.length === 2) return parts.pop().split(';').shift();
                            return null;
                        }
                        const lang = getCookie('lang');
                        console.log('Lang cookie:', lang);
                    </script>


            </section>
        </main> 
        
        <?php include __DIR__ . '/../affichage/footer.php';?>
    </body>
</html>
