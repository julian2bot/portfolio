<?php

function getProducts(string $file){
    $file = file_get_contents($file);
    return json_decode($file,true);
}

?>