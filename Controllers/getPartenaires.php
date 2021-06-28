<?php

function getPartenaires($from){

    if($from == 'client'){
         
        include_once('Models/Partenaire.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Partenaire.php');
    }

    $partenaire = new Partenaire("", "", $from,"show");

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