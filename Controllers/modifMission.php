<?php

require_once '../Models/Extra.php';

if(isset($_POST["description"])){
    echo 'reçu';

    $mission = new Extra("", $_POST["description"], "", "mission", "admin");

    if($mission->dbConnect()){
        echo 'Connecté';
        if($result = $mission->updateExtra()){
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