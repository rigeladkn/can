<?php

include_once '../Models/Message.php';

if(isset($_POST["id"])){

        echo 'reçu ';
    $messageObj = new Message("", "", "", "", "admin", "");

 
    if($messageObj->dbConnect()){
        echo 'connecté ';
        if($messageObj->deleteMessage($_POST["id"])){
            echo "succès";
            header("Location: http://localhost/can/admin/dashboard/can/index.php");
            die();
       }
       else{
           echo "échec";
       }
    }
    else{
        echo 'connexion impossible';
    }
       
}
else{
    echo 'Tous les champs sont requis';
} 

