<?php

require_once '../Models/Extra.php';

function getVisions(){
    $historique = new Extra("", "", "", "");

    $result = $historique->getAllExtras("historique");

    return $result;
}

?>