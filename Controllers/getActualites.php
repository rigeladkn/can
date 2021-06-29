<?php

function getActualites($from){
    
   
    if($from == 'client'){
         
        include_once('Models/Actualite.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Actualite.php');
    }

    $actualite = new Actualite("", "", "", "", $from,"show");

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

function getActivity($from, $title){


    if($from == 'client'){

        include_once('Models/Actualite.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Actualite.php');
    }

    $actualite = new Actualite("", "", "", "", $from,"show");

    if($actualite->dbConnect()){
        if($result = $actualite->getActivity($title)){
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