<?php

function getServices($from){
    
    include_once('Models/Extra.php');

    $service = new Extra("", "", "", "", $from);

    if($service->dbConnect()){
        if($result = $service->getAllExtras("service")){
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