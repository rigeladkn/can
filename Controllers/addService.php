<?php

require_once '../Models/Extra.php';

if(isset($_POST["title"]) && isset($_POST["description"])){
    echo 'reçu';
    
    $service = new Extra($_POST["title"], $_POST["description"], "", "service", "admin","");
    
    if($service->dbConnect()){
        // echo 'Connecté';
        if($result = $service->insertExtra()){
            
            header("location: http://localhost/can/admin/dashboard/can/services.php?success=true");
        }
        else{
            header("location: http://localhost/can/admin/dashboard/can/services.php?success=false");

        }
    }
    else{
        header("location: http://localhost/can/admin/dashboard/can/services.php?success=lostconn");
    }
}
else{
    header("location: http://localhost/can/admin/dashboard/can/services.php?success=requis");

}

?>