<?php

function getNavbar($from){

    if($from == 'client'){
         
        include_once('Models/Navbar.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Navbar.php');
    }

    $navbar = new Navbar("", "", "", "", $from,"show");

    if($navbar->dbConnect()){
        if($result = $navbar->getNavbar()){
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