<?php

function getMembres($from){

    if($from == 'client'){
         
        include_once('Models/Membre.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Membre.php');
    }

   

    $membre = new Membre("", "", "", "", "", "", $from,"show");

    if($membre->dbConnect()){
        if($result = $membre->getAllMembres()){
            return $result;
            // var_dump($result);
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