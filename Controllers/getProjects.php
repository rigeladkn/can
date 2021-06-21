<?php

require_once '../Models/Project.php';

function getProjects(){
    $project = new Project("", "", "");

    $result = $project->getAllProjects();

    return $result;
}

?>