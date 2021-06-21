<?php

require_once '../Models/Message.php';


if(isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["sujet"])&& isset($_POST["texte"])){

        echo 'reçu ';
    $messageObj = new Message($_POST["nom"],$_POST["email"],$_POST["sujet"],$_POST["texte"]);

 
    if($messageObj->dbConnect()){
        echo 'connecté ';
        if($result = $messageObj->insertNewMessage()){
            echo "succès";
            // echo "Redirection vers la page de connexion dans 5s";
            // sleep(5);
            header("Location: http://localhost/can/index.php");
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

