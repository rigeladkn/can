<?php

require_once '../Models/Actualite.php';

function getActualites(){
    $actualite = new Actualite("", "", "");

    $result = $actualite->getAllActualites();

    return $result;
}

?>