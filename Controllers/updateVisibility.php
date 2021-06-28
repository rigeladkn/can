<?php

require_once '../Models/Carroussel.php';

 
    echo 'reçu';

    $carroussel = new Carroussel("", "", "", "", "admin","");
    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        var_dump($id);
           
        if($carroussel->dbConnect()){
            echo 'Connecté';
            if($result = $carroussel->updateVisibility($id)){
                echo 'Succès';
                // header("location: http://localhost/can/admin/dashboard/can/gerer.php");
                // die();
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
         echo ' id vide';
    }
    // var_dump($id);
    
    // if( isset($_POST["but1"])  ){ $param = $_POST["but1"]; } elseif(isset($_POST["but2"])  ) { $param = $_POST["but2"]; }

 

?>