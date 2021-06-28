<?php

require_once '../Models/Message.php';

function deleteMessages() {

    $messageObj = new Message("","","","","","");
    
    $result = $messageObj->deleteAllMessages();
    
    return $result;
}
