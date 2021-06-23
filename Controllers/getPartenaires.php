<?php

function getPartenaires($from){

    include_once('Models/Partenaire.php');

    $partenaire = new Partenaire("", "", $from);

    if($partenaire->dbConnect()){
        if($result = $partenaire->getAllPartenaires()){
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