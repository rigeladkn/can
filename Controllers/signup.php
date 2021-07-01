<?php


require_once '../Models/User.php';

$user = new User();

if (isset($_POST['email']) && isset($_POST['motdepasse']) && isset($_POST['confmotdepasse']) ) {
    
    if($user->dbConnect()){
        //  'connecté ';
        if($result = $user->signup("users",$_POST["email"],$_POST["motdepasse"],$_POST["confmotdepasse"])){
            
            header("Location: http://localhost/can/admin/");
            die();
        }
       else{
            // echo "<script> alert(\"Inscription non réussie\"); </script>";
            // header("Location: http://localhost/can/admin/register/");
            // die();
            echo "<script> window.location.replace(\"http://localhost/can/admin/register/\");</script>";
            // echo "<script>wait(1);</script>";
            echo "<script> alert(\"document.getElementById(\"alertmessage\").innerHTML\")  ; </script>";
        }
    }
    else{
        echo "<script> alert(\"Problème de connexion !! \"); </script>";
        header("Location: http://localhost/can/admin/register/");
        die();
    }
       
}
else{
    echo "<script> alert(\"Tous les champs sont requis !! \"); </script>";
    header("Location: http://localhost/can/admin/register/");
    die();
} 
