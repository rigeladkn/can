<?php

require_once '../Models/Extra.php';

if(iisset($_POST["title"]) && isset($_POST["description"])){
    echo 'reçu';

    $vision = new Extra($_POST["title"], $_POST["description"], "", "vision");

    if($vision->dbConnect()){
        echo 'Connecté';
        if($result = $vision->insertExtra()){
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