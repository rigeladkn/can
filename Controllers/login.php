<?php

require_once '../Models/User.php';

$user = new User();
if (isset($_POST['email']) && isset($_POST['motdepasse'])) {
    if ($user->dbConnect()) {
        if ($user->logIn("users", $_POST['email'], $_POST['motdepasse'])) {
            echo "<script> window.location.replace(\"http://localhost/can/admin/dashboard/can/\");</script>";
        } else {
            echo "<script> alert(\"Données entrées non correctes\"); </script>";
            echo "<script> window.location.replace(\"http://localhost/can/admin/\");</script>";
        }
            
    } else{
        echo "<script> alert(\"Problème de connexion\"); </script>";
        echo "<script> window.location.replace(\"http://localhost/can/admin/\");</script>";
    } 
} else{
    echo "<script> alert(\"Tous les champs sont requis\"); </script>";
    echo "<script> window.location.replace(\"http://localhost/can/admin/\");</script>";
} 