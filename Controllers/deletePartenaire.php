<?php

require_once '../Models/Partenaire.php';

if(isset($_POST["id"]))
{
    echo 'reçu';
    $partenaire = new Partenaire("", "", "admin","");

    if($partenaire->dbConnect()){
        echo 'Connecté';
        if($partenaire->deletePartenaire($_POST["id"])){
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