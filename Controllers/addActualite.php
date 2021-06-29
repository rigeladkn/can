<?php

require_once '../Models/Actualite.php';

if(isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["image"]) && isset($_POST["laDate"]))
{
    echo 'reçu';
    $actualite = new Actualite($_POST["title"], $_POST["description"], $_POST["image"], $_POST["laDate"], "admin","");

    if($actualite->dbConnect()){
        echo 'Connecté';
        if($result = $actualite->insertActualite()){
            // echo 'Succès';
            header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=true");
            die();
        }
        else{
            header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=false");
            die();
        }
    }
    else{
        // echo 'Connexion impossible !';
        header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=lostconn");
            die();
    }
}
else{
    // echo 'Tous les champs sont requis';
    header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=requis");
    die();
}

?>