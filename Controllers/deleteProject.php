<?php

require_once '../Models/Project.php';

if(isset($_POST["id"]))
{
    echo 'reçu';
    $project = new Project("", "", "", "admin","");

    if($project->dbConnect()){
        echo 'Connecté';
        if($project->deleteProject($_POST["id"])){
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