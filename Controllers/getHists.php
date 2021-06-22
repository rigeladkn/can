<?php

function getHistorique($from){

    include_once('Models/Extra.php');

    $historique = new Extra("", "", "", "", $from);

    if($historique->dbConnect()){
        if($result = $historique->getAllExtras("historique")){
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