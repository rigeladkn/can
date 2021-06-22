<?php 
require '../Configuration/DatabaseConfig.php';

class Message{
//pour la connexion
    private $servername;
    private $username;
    private $password;
    private $databasename;
    private $table = "Message";
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
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password,$this->databasename);
        return $this->connect;
    }

    function prepareData($data)
    {
        return mysqli_real_escape_string($this->connect, stripslashes(htmlspecialchars($data)));
    }


    function insertNewMessage(){

        $nom = $this->prepareData($this->nom);
        $email = $this->prepareData($this->email);
        $sujet = $this->prepareData($this->sujet);
        $texte = $this->prepareData($this->texte);
        
        $sql = "INSERT INTO ".$this->table."(nom, email, sujet, texte)VALUES('".$nom."','".$email."','".$sujet."','".$texte."')";

        if($this->connect->query($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function getAllMessages(){
     
        $sql = "SELECT * FROM ".$this->table;
      
        if( $result = $this->connect->query($sql)){

            return $result;
        }
        else{
            return false;
        }
    }

    function deleteAllMessages(){
     
        $sql = "DELETE * FROM ".$this->table ;
      
        if($this->connect->query($sql)){
            return true;
        }
        else{
            return false;
        }
    }

}