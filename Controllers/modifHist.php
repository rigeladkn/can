<?php

require_once '../Models/Extra.php';

if(isset($_POST["title"]) && isset($_POST["description"])){
    echo 'reçu';

    $historique = new Extra($_POST["title"], $_POST["description"], "", "historique", "admin","");

    if($historique->dbConnect()){
        echo 'Connecté';
        if($result = $historique->updateExtra()){
            // echo 'Succès';
            header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=true");
            die();
        }
        else{
            header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=false");
            die();
        }
    }
    else{
        // echo 'Connexion impossible !';
        header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=lostconn");
            die();
    }
}
else{
    // echo 'Tous les champs sont requis';
    header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=requis");
    die();
}
?>