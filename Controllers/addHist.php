<?php

require_once '../Models/Extra.php';

if(iisset($_POST["title"]) && isset($_POST["description"])){
    echo 'reçu';

    $historique = new Extra($_POST["title"], $_POST["description"], "", "historique");

    if($historique->dbConnect()){
        echo 'Connecté';
        if($result = $historique->insertExtra()){
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