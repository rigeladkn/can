<?php

function getImages($from){

    if($from == 'client'){
         
        include_once('Models/Carroussel.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Carroussel.php');
    }

    $carroussel = new Carroussel("", "", "", "", $from,"show");

    if($carroussel->dbConnect()){
        if($result = $carroussel->getAllImages()){
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

function getVisibleImages($from){

    if($from == 'client'){
         
        include_once('Models/Carroussel.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Carroussel.php');
    }

    $carroussel = new Carroussel("", "", "", "", $from,"show");

    if($carroussel->dbConnect()){
        if($result = $carroussel->getAllImages()){
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