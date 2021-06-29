<?php

require_once '../Models/Membre.php';

if(isset($_POST["nom"]) && isset($_POST["poste"]) && isset($_POST["description"]) 
&& isset($_POST["image"]) && isset($_POST["tweetlink"]) && isset($_POST["facelink"])){
    echo 'reçu';

    $membre = new Membre($_POST["nom"], $_POST["poste"], $_POST["description"], $_POST["image"], $_POST["tweetlink"], $_POST["facelink"], "admin","");

    if($membre->dbConnect()){
        echo 'Connecté';
        if($result = $membre->insertMembre()){
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
?>