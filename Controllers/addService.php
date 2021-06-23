<?php

require_once '../Models/Extra.php';

if(isset($_POST["title"]) && isset($_POST["description"])){
    echo 'reçu';

    $service = new Extra($_POST["title"], $_POST["description"], "", "service", "admin");

    if($service->dbConnect()){
        echo 'Connecté';
        if($result = $service->insertExtra()){
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