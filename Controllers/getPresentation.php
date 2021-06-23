<?php

function getPresentation($from){

    if($from == 'client'){
         
        include_once('Models/Extra.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Extra.php');
    }

    $presentation = new Extra("", "", "", "", $from,"show");

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