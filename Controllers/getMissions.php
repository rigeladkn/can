<?php

function getmissions($from){
    
    include_once('Models/Extra.php');

    $mission = new Extra("", "", "", "", $from);

    if($mission->dbConnect()){
        if($result = $mission->getAllExtras("mission")){
            // var_dump($result);
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