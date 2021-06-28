<?php 

class Navbar{
//pour la connexion
    private $servername;
    private $username;
    private $password;
    private $databasename;
    private $table = "navbar";
    private $adresse;
    private $telephone;
    private $email;
    private $slogan;

    private $from;
//fin
//Attributs propres
   
//fin

    public function __construct($adresse, $telephone, $email, $slogan, $from,$op){
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
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->slogan = $slogan;
        
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


    function insertNavbar(){

        $adresse = $this->prepareData($this->adresse);
        $telephone = $this->prepareData($this->telephone);
        $email = $this->prepareData($this->email);
        $slogan = $this->prepareData($this->slogan);
        
        $sql = "INSERT INTO ".$this->table."(adresse, telephone, email, slogan)VALUES('".$adresse."','".$telephone."','".$email."','".$slogan."')";

        if($this->connect->query($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function getNavbar(){
     
        $sql = "SELECT * FROM ".$this->table ;
    
        if( $result = $this->connect->query($sql)){

            return $result;
        }
        else{
            return false;
        }
    }


    function updateNavbar(){
        
        $adresse = $this->prepareData($this->adresse);
        $telephone = $this->prepareData($this->telephone);
        $email = $this->prepareData($this->email);
        $slogan = $this->prepareData($this->slogan);
        $table = $this->table;
        
        $sql = "UPDATE ".$table." SET adresse = '".$adresse."', telephone = '".$telephone."', email = '".$email."', slogan = '".$slogan."'";
    
        if( $result = $this->connect->query($sql)){

            return $result;
        }
        else{
            return false;
        }
    }


    

}