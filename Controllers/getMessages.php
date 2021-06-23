<?php

function getMessages($from){

    if($from == 'client'){
         
        include_once('Models/Message.php');
    }
    else if ($from == 'admin'){
        include_once('../../../Models/Message.php');
    }

    $messageObj = new Message("", "", "", "", $from,"show");

    if($messageObj->dbConnect()){
        if($result = $messageObj->getAllMessages()){
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