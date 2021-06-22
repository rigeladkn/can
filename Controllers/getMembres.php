<?php

function getMembres($from){

    include_once('Models/Membre.php');

    $membre = new Membre("", "", "", "", "", "", $from);

    if($membre->dbConnect()){
        if($result = $membre->getAllMembres()){
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