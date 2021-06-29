<?php

function getProjects($from){

    if($from == 'client'){
         
        include_once('Models/Project.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Project.php');
    }

    $project = new Project("", "", "", $from ,"show");

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

function getproject($from, $id){
    if($from == 'client'){
         
        include_once('Models/Project.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Project.php');
    }

    $project = new Project("", "", "", $from ,"show");

    if($project->dbConnect()){
        if($result = $project->getProject($id)){
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