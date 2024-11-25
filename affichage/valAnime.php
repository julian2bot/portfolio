<?php
// $lang = $_COOKIE["lang"] ?? "fr";
$animation = $_COOKIE["animation"] ?? 'Active';

if(!isset($_COOKIE["animation"]) || empty($_COOKIE["animation"]))
    setcookie("animation", "Active", time() + 3600 * 24 * 365, "/", null, false, false); // false = pas HttpOnly

// $lang = "fr";      
// $lang = "en";
// if(!isset($_COOKIE["lang"]) || empty($_COOKIE["lang"]))
// setcookie("lang", "en", time() + 3600 * 24 * 365, null, null, false, true); // doit etre fait au tout debut debut aucun code / html / espace etc
// setcookie("lang", "en", time() + 3600 * 24 * 365, "/", null, false, true);


$lang = $_COOKIE["lang"] ?? "fr";
if(!isset($_COOKIE["lang"]) || empty($_COOKIE["lang"]))
    setcookie("lang", "fr", time() + 3600 * 24 * 365, "/", null, false, false); // false = pas HttpOnly


// $animation = 'Active';

// $animation = "b";
// $animation = 'truc';  

// $anime = "Desactive";
// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     // Récupération de la valeur envoyée
//     $animation = isset($_POST['animation']) ? $_POST['animation'] : 'lalalala';

//     // Traitement de la valeur (par exemple, l'afficher ou la stocker dans une base de données)
//     echo "La valeur de l'animation est : " . htmlspecialchars($animation);
//     echo $_POST['animation'] ;
// }


echo  '<p id="ps" style="font-size:0;">'.$animation.'</p>'; 
// echo  '<p id="ps" >'.$animation.'</p>';
// $html = file_get_contents( __DIR__ . '/../files/aboutMe.php');
// $doc = new DomDocument;
// $doc->validateOnParse = true;
// @$doc->LoadHTML($html);
 
// $p = $doc->getElementById('ps');

// echo  '<p style="color:red; background-color:blue; padding:10px;">'.@$p->nodeValue.'</p>';
// echo '<pre>';
// print_r ($_SERVER); 
// echo '</pre>';
// //
?>