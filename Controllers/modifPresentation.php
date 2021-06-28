<?php

require_once '../Models/Extra.php';

if(isset($_POST["title"]) && isset($_POST["description"])){
    echo 'reçu';

    $presentation = new Extra($_POST["title"], $_POST["description"], "", "presentation", "admin","");

    if($presentation->dbConnect()){
        echo 'Connecté';
        if($result = $presentation->updateExtra()){
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