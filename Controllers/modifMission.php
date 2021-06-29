<?php

require_once '../Models/Extra.php';

if(isset($_POST["description"])){
    echo 'reçu';

    $mission = new Extra("", $_POST["description"], "", "mission", "admin","");

    if($mission->dbConnect()){
        echo 'Connecté';
        if($result = $mission->updateExtra()){
            // echo 'Succès';
            header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=true");
            die();
        }
        else{
            header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=false");
            die();
        }
    }
    else{
        // echo 'Connexion impossible !';
        header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=lostconn");
            die();
    }
}
else{
    // echo 'Tous les champs sont requis';
    header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=requis");
    die();
}

?>