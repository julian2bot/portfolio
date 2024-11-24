<?php 

include_once './../asset/utils/util.php';
      
$headerFooterJson = getProducts("./../asset/data/recurante.json");

echo '<header id="main-header">
    <!-- <div class="div">
        <a href="../">
            <img class="headerMoi" src="../asset/images/moi.png" alt="image dessin de moi" >
        </a>
    </div> -->
    <nav id="nav">
        <ul>
            <li>
                <a href="./../files/aboutMe.php" class="nav-header">'.$headerFooterJson["$lang"]["header"]["aboutMe"].'</a>
            </li> 
            <li>
                <p>|</p>
            </li>
            <li>
                <a href="./../files/skills.php" class="nav-header">'.$headerFooterJson["$lang"]["header"]["skills"].'</a>
            </li>
            <li>
                <p>|</p>
            </li>
            <li>
                <a href="./../files/projects.php" class="nav-header">'.$headerFooterJson["$lang"]["header"]["project"].'</a>
            </li>
            <li>
                <p>|</p>
            </li>
            <li>
                <a href="./../files/contact.php" class="nav-header">'.$headerFooterJson["$lang"]["header"]["contactUs"].'</a>
            </li>
        </ul>
    </nav>
</header>';
?>    