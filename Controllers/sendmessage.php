<?php

include_once '../Models/Message.php';

function getMail(){
    include_once '../Models/User.php';
    $admin = new User();
    if($admin->dbConnect()){
        if($resultAdmin = $admin->liste("users")){
            while($resAdm = mysqli_fetch_assoc($resultAdmin)){
                $mail = $resAdm["email"];
            }
            return $mail;
        }
        else{
            echo "Echec";
        }
    }
    else{
        echo "Connexion impossible à la table users";
    }
}

if(isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["sujet"]) && isset($_POST["texte"])){

        echo 'reçu ';
    $messageObj = new Message($_POST["nom"],$_POST["email"],$_POST["sujet"],$_POST["texte"], "admin","");

 
    if($messageObj->dbConnect()){
        echo 'connecté ';
        if($result = $messageObj->insertNewMessage()){
            echo "succès";
            $dest_email = getMail();
            $sujet = $_POST["sujet"];
            $nom = $_POST["nom"];
            $src_email = $_POST["email"];
            $texte = $_POST["texte"];
            $message = " ".$nom." ".$texte." ";
            if(mail($dest_email, $sujet, $message, $src_email)){
                echo "Email envoyé avec succès à ".$dest_email." ...";
            } else {
                echo "Échec de l'envoi de l'email à ".$dest_email." ...";
            }
            header("Location: http://localhost/can/index.php");
            die();
            // echo "Redirection vers la page de connexion dans 5s";
            // sleep(5);
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

