<?php
      // $animation = isset($_POST['animation']) ? $_POST['animation'] : '';
      // echo '<p>'.$animation.'</p>';
      include __DIR__ . '/../affichage/valAnime.php';

      if ($animation === 'Active') {

        include __DIR__ . '/../affichage/animation.php';
        include __DIR__ . '/../affichage/animationSousPage.php';  

      } 
      // else{
      //   include __DIR__ . '/../affichage/print.js';  
      // }

?>