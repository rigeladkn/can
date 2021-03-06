<?php 

class Message{
//pour la connexion
    private $servername;
    private $username;
    private $password;
    private $databasename;
    private $table = "messages";
    private $nom;
    private $email;
    private $sujet;
    private $texte;

    private $from;
//fin
//Attributs propres
   
//fin

    public function __construct($nom, $email, $sujet, $texte, $from,$op){
        $this->from = $from;

        if($this->from == 'client'){
            $lien = 'Configuration/DatabaseConfig.php';
            require_once($lien);
        }
        else if ($this->from == 'admin'){
            if($op == 'show'){
                $lien = '../../../Configuration/DatabaseConfig.php';
                require_once($lien);
            }
            else{
                $lien = '../Configuration/DatabaseConfig.php';
                require_once($lien);
            }
          
        }
        
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
     
        $sql = "SELECT * FROM ".$this->table." ORDER BY id DESC";
    
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

    function deleteMessage($id){
        $this->sql = "DELETE FROM ".$this->table." WHERE id = '".$id."' ";
        if($result = $this->connect->query($this->sql)){
            return true;
        }
        else{
            return false;
        }
    }

}