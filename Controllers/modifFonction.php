<?php

require_once '../Models/Extra.php';

if(isset($_POST["title"]) && isset($_POST["description"])){
    echo 'reçu';

    $fonctionnement = new Extra($_POST["title"], $_POST["description"], "", "fonctionnement", "admin","");

    if($fonctionnement->dbConnect()){
        echo 'Connecté';
        if($result = $fonctionnement->updateExtra()){
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