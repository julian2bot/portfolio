<?php
// process_animation.php
// NON UTILISé
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération de la valeur envoyée
    $animation = isset($_POST['animation']) ? $_POST['animation'] : '';

    // Traitement de la valeur (par exemple, l'afficher ou la stocker dans une base de données)
    echo "La valeur de l'animation est : " . htmlspecialchars($animation);
}
?>
