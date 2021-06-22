<?php

require_once '../Models/Extra.php';

function getMissions(){
    $mission = new Extra("", "", "", "");

    $result = $mission->getAllExtras("mission");

    return $result;
}

?>