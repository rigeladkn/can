<?php

require_once '../Models/Actualite.php';

if(isset($_POST["id"]))
{
    echo 'reçu';
    $actualite = new Actualite("", "", "", "", "admin","");

    if($actualite->dbConnect()){
        echo 'Connecté';
        if($actualite->deleteActualite($_POST["id"])){
            echo 'Succès';
            header("location: http://localhost/can/admin/dashboard/can/index.php");
            die();
        }
        else{
            echo 'Echec !';
        }
    }
    else{
        echo 'Connexion impossible !';
    }
}
else{
    echo 'Tous les champs sont requis';
}

?>