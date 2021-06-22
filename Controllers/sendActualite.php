<?php

require_once '../Models/Actualite.php';

if(isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["image"]) && isset($_POST["ladate"]))
{
    echo 'reçu';
    $actualite = new Actualite($_POST["title"], $_POST["description"], $_POST["image"], $_POST["ladate"]);

    if($actualite->dbConnect()){
        echo 'Connecté';
        if($result = $actualite->insertActualite()){
            echo 'Succès';
            header("location: http://localhost/workspace/can/admin/dashboard/can/index.php");
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