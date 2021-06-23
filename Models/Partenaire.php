<?php
 

class Partenaire{

    private $connect;
    private $data;
    private $sql;
    private $from;

    private $table;
    private $nom;
    private $logo;

    protected $servername;
    protected $username;
    protected $password;
    protected $databasename;

    public function __construct($nom, $logo, $from,$op){
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
        
        $this->sql = null;
        $dbc = new DatabaseConfig();
        $this->servername = $dbc->servername;
        $this->username  = $dbc->username;
        $this->password = $dbc->password;
        $this->databasename = $dbc->databasename;
        $this->table = "partenaires";
        $this->nom = $nom;
        $this->logo = $logo;
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
  
    function insertPartenaire(){
        $nom = $this->prepareData($this->nom);
        $logo = $this->prepareData($this->logo);
        $table = $this->table;

        $this->sql = "INSERT INTO ".$table." (nom, logo)
         VALUES ('".$nom."', '".$logo."')";

        if($this->connect->query($this->sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function getAllPartenaires(){
        $this->sql = "SELECT * FROM ".$this->table;

        if($result=$this->connect->query($this->sql)){
            return $result;
        }
        else{
            return false;
        }
    }

}