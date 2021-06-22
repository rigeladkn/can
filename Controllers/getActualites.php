<?php

function getActualites($from){
    
    include_once('Models/Actualite.php');

    $actualite = new Actualite("", "", "", "", $from);

    if($actualite->dbConnect()){
        if($result = $actualite->getAllActualites()){
            return $result;
        }
        else{
            echo 'Echec';
        }
    }
    else{
        echo 'Connexion impossible';
    }
}

?>