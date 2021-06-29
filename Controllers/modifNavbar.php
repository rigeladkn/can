<?php

require_once '../Models/Navbar.php';

if(isset($_POST["adresse"]) && isset($_POST["telephone"]) && isset($_POST["email"]) && 
isset($_POST["slogan"])){

    echo 'reçu';

    $navbar = new Navbar($_POST["adresse"], $_POST["telephone"], $_POST["email"], $_POST["slogan"], "admin","");

    if($navbar->dbConnect()){
        echo 'Connecté';
        if($result = $navbar->updateNavbar()){
            echo 'Succès';
            header("location: http://localhost/can/admin/dashboard/can/index.php");
            die();
        }
        else{
            echo 'Echec !';
        }
    }
    else{
        echo 'Connexion impossible !';
    }
}
else{
    echo 'Tous les champs sont requis';
}

?>