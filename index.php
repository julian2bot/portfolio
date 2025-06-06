
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Julian Marques - PortFolio</title> 

		<link rel="stylesheet" href="./style/global.css">
        <link rel="stylesheet" href="./style/style.css">	
        <link rel="stylesheet" href="./animation/style/animation.css">

		<meta charset="utf-8">
        <meta property="og:type" content="website">
        <link rel="icon" href="./asset/images/moi.png"> 


    </head>
    <?php
    include __DIR__ . '/affichage/valAnime.php';
?>
    <body id="animation-container">


        <!-- <a href="#top"><img alt="image retour en haut de page" src="images/top.png"></a> -->
		<?php
            //   $animation = 'Active';
            // //   $animation = 'Desactive';
            //   if ($animation === 'Active') {
            //      include __DIR__ . '/affichage/animation.php';
            //   }
            // include __DIR__ . '/affichage/valAnime.php';
            
            include __DIR__ . '/affichage/animation.php';
            
            include_once './asset/utils/util.php';
    
            $headerFooterJson = getProducts("./asset/data/recurante.json");
            // echo $headerFooterJson["fr"]["accueil"]["subTitle"];
            
    	?>
            <section class="pageAcceuil">
            
            <header>
                <nav id="nav">
                    <ul>
                        <li>
                            <a href="./files/aboutMe.php" class="nav-header"> <?php echo $headerFooterJson[$lang]["header"]["aboutMe"];?></a>
                        </li> 
                        <li>
                            <p>|</p>
                        </li>
                        <li>
                            <a href="./files/skills.php" class="nav-header"> <?php echo $headerFooterJson[$lang]["header"]["skills"];?></a>
                        </li>
                        <li>
                            <p>|</p>
                        </li>
                        <li>
                            <a href="./files/projects.php" class="nav-header"> <?php echo $headerFooterJson[$lang]["header"]["project"];?></a>
                        </li>
                        <li>
                            <p>|</p>
                        </li>
                        <li>
                            <a href="./files/contact.php" class="nav-header"> <?php echo $headerFooterJson[$lang]["header"]["contactUs"];?></a>
                        </li>
                    </ul>
                </nav>
            </header>

			<img class="moi" src="./asset/images/moi.png" alt="image dessin de moi">

            <h1>JULIAN MARQUES</h1>
            <h2> <?php echo $headerFooterJson[$lang]["accueil"]["subTitle"];?> </h2>
            <h2>&lt; / &gt;</h2>
            <script src="animation/script/main.js"></script>

        </section>
        <script src="./animation/script/animationIndex.js"></script>
    </body>
</html>
