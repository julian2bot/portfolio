<?php 

      
echo '
<footer>
    <div class="footer-container">
        <div class="social-icons">
            <a href="https://www.instagram.com/julian_fpv_" target="_blank">
                <img src="../asset/images/instagram.png" alt="Instagram">
            </a>
            <a href="https://github.com/julian2bot" target="_blank">
                <img src="../asset/images/github.png" alt="GitHub">
            </a>            
            <!-- <a href="https://github.com/julian1bot" target="_blank">
                <img src="../asset/images/oldGithub.png" alt="GitHub">
            </a> -->
            <a href="https://discordapp.com/users/361166463878561803" target="_blank">
                <img src="../asset/images/discord.png" alt="Discord">
            </a>
            <a href="https://fr.linkedin.com/in/marques-julian" style="margin-left:5px;" target="_blank">
                <img src="../asset/images/linkedin.png" alt="Discord">
            </a>
        </div>
        <div>
            <p>JULIAN MARQUES</p>
            <p>'.$headerFooterJson["$lang"]["footer"]["credit"].'</p>
        </div>
        <div class="contact-info">
            <p>'.$headerFooterJson["$lang"]["footer"]["tel"].' : <a href="tel:+33695412699">+33 6 95 41 26 99</a></p>
            <p>'.$headerFooterJson["$lang"]["footer"]["mail"].' : <a href="mailto:marquesjulian26@gmail.com">marquesjulian26@gmail.com</a></p>
        </div>
    </div>
</footer>
';
?>