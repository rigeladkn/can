<?php

require_once '../Models/Project.php';

if(isset($_POST["status"]) && isset($_POST["financement"]) && isset($_POST["description"]))
{
    echo 'reçu';
    $project = new Project($_POST["status"], $_POST["financement"], $_POST["description"], "admin","");

    if($project->dbConnect()){
        echo 'Connecté';
        if($result = $project->insertProject()){
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