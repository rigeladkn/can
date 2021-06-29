<?php

require_once '../Models/Membre.php';

if(isset($_POST["id"])){
    echo 'reçu';

    $membre = new Membre("", "", "", "", "", "", "admin","");

    if($membre->dbConnect()){
        echo 'Connecté';
        if($membre->deleteMembre($_POST["id"])){
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