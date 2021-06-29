<?php

require_once '../Models/Partenaire.php';

if(isset($_POST["nom"]) && isset($_POST["logo"]))
{
    echo 'reçu';
    $partenaire = new Partenaire($_POST["nom"], $_POST["logo"], "admin","");

    if($partenaire->dbConnect()){
        echo 'Connecté';
        if($result = $partenaire->insertPartenaire()){
            // echo 'Succès';
            header("location: http://localhost/can/admin/dashboard/can/partenaires.php?success=true");
            die();
        }
        else{
            header("location: http://localhost/can/admin/dashboard/can/partenaires.php?success=false");
            die();
        }
    }
    else{
        // echo 'Connexion impossible !';
        header("location: http://localhost/can/admin/dashboard/can/partenaires.php?success=lostconn");
            die();
    }
}
else{
    // echo 'Tous les champs sont requis';
    header("location: http://localhost/can/admin/dashboard/can/partenaires.php?success=requis");
    die();
}

?>