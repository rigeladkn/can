<?php

function getMotDirecteur($from){

    include_once('Models/Extra.php');

    $mot_directeur = new Extra("", "", "", "", $from);

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