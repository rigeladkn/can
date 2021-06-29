<?php

function getFonctionnement($from){

    if($from == 'client'){
         
        include_once('Models/Extra.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Extra.php');
    }

    $fonctionnement = new Extra("", "", "", "", $from,"show");

    if($fonctionnement->dbConnect()){
        if($result = $fonctionnement->getAllExtras("fonctionnement")){
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