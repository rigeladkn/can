<?php

function getProjects($from){

    include_once('Models/Project.php');

    $project = new Project("", "", "", $from);

    if($project->dbConnect()){
        if($result = $project->getAllProjects()){
            return $result;
        }
        else{
            echo 'Echec';
        }
    }
    else{
        echo 'Connexion impossible';
    }
}

?>