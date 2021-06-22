<?php

require_once '../Models/Extra.php';

function getVisions(){
    $vision = new Extra("", "", "", "");

    $result = $vision->getAllExtras("vision");

    return $result;
}

?>