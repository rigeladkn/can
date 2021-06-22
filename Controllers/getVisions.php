<?php

function getvisions($from){

    include_once('Models/Extra.php');

    $vision = new Extra("", "", "", "", $from);

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