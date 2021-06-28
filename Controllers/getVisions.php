<?php

function getvisions($from){

    if($from == 'client'){
         
        include_once('Models/Extra.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Extra.php');
    }

    $vision = new Extra("", "", "", "", $from,"show");

    if($vision->dbConnect()){
        if($result = $vision->getAllExtras("vision")){
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