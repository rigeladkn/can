<?php

require_once '../Models/User.php';

$user = new User();
if (isset($_POST['email']) && isset($_POST['motdepasse'])) {
    if ($user->dbConnect()) {
        if ($user->logIn("users", $_POST['email'], $_POST['motdepasse'])) {
            echo "ok";
            //session_start();
            //$_SESSION["matricule"] = $_POST['email'];
            header("Location: http://localhost/can/admin/dashboard/can");
            die();
        } else echo "Données entrées non correctes";
    } else echo "DBconnection";
} else echo "impossible";