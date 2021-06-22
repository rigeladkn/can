<?php

require_once '../Models/Membre.php';

if(isset($_POST["nom"]) && isset($_POST["poste"]) && isset($_POST["description"]) 
&& isset($_POST["image"]) && isset($_POST["tweetlink"]) && isset($_POST["facelink"])){
    echo 'reçu';

    $membre = new Membre($_POST["nom"], $_POST["poste"], $_POST["description"], $_POST["image"], $_POST["tweetlink"], $_POST["facelink"], "admin");

    if($membre->dbConnect()){
        echo 'Connecté';
        if($result = $membre->insertMembre()){
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