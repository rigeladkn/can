<?php

function getMotDirecteur($from){

    if($from == 'client'){
         
        include_once('Models/Extra.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Extra.php');
    }

    $mot_directeur = new Extra("", "", "", "", $from,"show");

    if($mot_directeur->dbConnect()){
        if($result = $mot_directeur->getAllExtras("motDirecteur")){
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