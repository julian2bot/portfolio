<!DOCTYPE html>
<html>
<head>
    <title>Formulaire GET Test</title>
</head>
<body>

    <form action="test_get.php" method="GET">
        <input type="text" name="test" value="Test Value">
        <input type="submit" value="Envoyer">
    </form>
    <?php
    
    
$mdp = fopen( __DIR__ . '/pass.csv', 'r');
if (!feof($mdp)) {
    $ligne = fgets($mdp);
    echo '' . $ligne . "\n<br>";
}
fclose($mdp);

?>

</body>
</html>