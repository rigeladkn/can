<?php

require_once '../Models/Message.php';

function getMessages(){
    $messageObj = new Message("","","","");
    
    $result = $messageObj->getAllMessages();
    
    return $result;
}