<?php


 
    require_once '../Models/Extra.php';


if(isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["image"])){
    echo 'reçu';

    $mot_directeur = new Extra($_POST["title"], $_POST["description"], $_POST["image"], "motDirecteur", "admin","");

    if($mot_directeur->dbConnect()){
        echo 'Connecté';
        if($result = $mot_directeur->updateExtra()){
            // echo 'Succès';
            header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=true");
            die();
        }
        else{
            header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=false");
            die();
        }
    }
    else{
        // echo 'Connexion impossible !';
        header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=lostconn");
            die();
    }
}
else{
    // echo 'Tous les champs sont requis';
    header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=requis");
    die();
}
