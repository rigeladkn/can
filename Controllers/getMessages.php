<?php

function getMessages($from){

    include_once('Models/Message.php');

    $messageObj = new Message("", "", "", "", $from);

    if($messageObj->dbConnect()){
        if($result = $messageObj->getAllMessages();){
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