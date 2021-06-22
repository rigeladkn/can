<?php

function getPresentation($from){

    include_once('Models/Extra.php');

    $presentation = new Extra("", "", "", "", $from);

    if($presentation->dbConnect()){
        if($result = $presentation->getAllExtras("presentation")){
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