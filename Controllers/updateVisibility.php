<?php

require_once '../Models/Carroussel.php';

 function update(){
    echo 'reçu';

    $carroussel = new Carroussel("", "", "", "", "admin","");
    // echo $_POST["data"];
    
 
        var_dump($_REQUEST['id']);
           
        if($carroussel->dbConnect()){
            echo 'Connecté';
            if($result = $carroussel->updateVisibility($_REQUEST["id"])){
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

    

   update();
    // var_dump($id);
    
    // if( isset($_POST["but1"])  ){ $param = $_POST["but1"]; } elseif(isset($_POST["but2"])  ) { $param = $_POST["but2"]; }
   
    // function getId($id){
    //    $id = $id;
    //     update();
    // }
    // $id = 2;
    // getId($id);
 

?>