<?php

require_once '../Models/Carroussel.php';

 
    //echo 'reçu';

    $carroussel = new Carroussel("", "", "", "", "admin","");
    // echo $_POST["data"];
    
 
        $id = $_GET["id"];
           
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
   
    // var_dump($id);
    
    // if( isset($_POST["but1"])  ){ $param = $_POST["but1"]; } elseif(isset($_POST["but2"])  ) { $param = $_POST["but2"]; }
   
    // function getId($id){
    //    $id = $id;
    //     update();
    // }
    // $id = 2;
    // getId($id);
 

?>