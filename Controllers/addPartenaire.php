<?php

require_once '../Models/Partenaire.php';

if(isset($_POST["nom"]) && isset($_POST["logo"]))
{
    echo 'reçu';
    $partenaire = new Partenaire($_POST["nom"], $_POST["logo"], "admin","");

    if($partenaire->dbConnect()){
        echo 'Connecté';
        if($result = $partenaire->insertPartenaire()){
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