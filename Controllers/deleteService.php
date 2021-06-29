<?php

require_once '../Models/Extra.php';

if(isset($_POST["id"]) && isset($_POST["type"])){
    echo 'reçu';

    $service = new Extra("", "", "", $_POST["type"], "admin","");

    if($service->dbConnect()){
        echo 'Connecté';
        if($service->deleteExtra($_POST["type"], $_POST["id"])){
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