<?php 
require '../Configuration/DatabaseConfig.php';

class Message{
//pour la connexion
    private $servername;
    private $username;
    private $password;
    private $databasename;
    private $nom;
    private $email;
    private $sujet;
    private $texte;
//fin
//Attributs propres
   
//fin

    public function __construct($nom,$email,$sujet,$texte){
        //$this->sql = null;
        $dbc = new DatabaseConfig();
        $this->servername = $dbc->servername;
        $this->username  = $dbc->username;
        $this->password = $dbc->password;
        $this->databasename = $dbc->databasename;
        $this->nom = $nom;
        $this->email = $email;
        $this->sujet = $sujet;
        $this->texte = $texte;
        
    }

    function dbConnect()
    {
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password,$this->databasename,);
        return $this->connect;
    }

    function prepareData($data)
    {
        return mysqli_real_escape_string($this->connect, stripslashes(htmlspecialchars($data)));
    }


    function insertNewMessage($message){
        $table = "Message";

        $nom = $this->prepareData($message->nom);
        $email = $this->prepareData($message->email);
        $sujet = $this->prepareData($message->sujet);
        $texte = $this->prepareData($message->texte);
        
        $sql = "INSERT INTO ".$table."(nom, email, sujet, texte)VALUES('".$nom."','".$email."','".$sujet."','".$texte."')";

        if($this->connect->query($sql)){
            return true;
        }
        else{
            return false;
        }


    }

}