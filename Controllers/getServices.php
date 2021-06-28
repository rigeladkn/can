<?php

function getServices($from){
    
    if($from == 'client'){
         
        include_once('Models/Extra.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Extra.php');
    }

    $service = new Extra("", "", "", "", $from,"show");

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