<?php

function getMissions($from){
    
    if($from == 'client'){
         
        include_once('Models/Extra.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Extra.php');
    }

    $mission = new Extra("", "", "", "", $from,"show");

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