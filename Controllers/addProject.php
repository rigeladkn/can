<?php

require_once '../Models/Project.php';

if(isset($_POST["status"]) && isset($_POST["financement"]) && isset($_POST["description"]))
{
    echo 'reçu';
    $project = new Project($_POST["status"], $_POST["financement"], $_POST["description"], "admin","");

    if($project->dbConnect()){
        echo 'Connecté';
        if($result = $project->insertProject()){
            // echo 'Succès';
            header("location: http://localhost/can/admin/dashboard/can/projects.php?success=true");
        }
        else{
            header("location: http://localhost/can/admin/dashboard/can/projects.php?success=false");

        }
    }
    else{
        header("location: http://localhost/can/admin/dashboard/can/projects.php?success=lostconn");
    }
}
else{
    header("location: http://localhost/can/admin/dashboard/can/projects.php?success=requis");

}

?>