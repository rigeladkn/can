<?php

function getHistorique($from){

    if($from == 'client'){
         
        include_once('Models/Extra.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Extra.php');
    }

    $historique = new Extra("", "", "", "", $from,"show");

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