<?php

class Membre{

    private $connect;
    private $data;
    private $sql;
    private $from;

    private $table;
    private $nom;
    private $poste;
    private $description;
    private $image;
    private $tweetlink;
    private $facelink;

    protected $servername;
    protected $username;
    protected $password;
    protected $databasename;

    public function __construct($nom, $poste, $description, $image, $tweetlink, $facelink, $from,$op){
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
        $this->table = "membres";
        $this->nom = $nom;
        $this->poste = $poste;
        $this->description = $description;
        $this->image = $image;
        $this->tweetlink = $tweetlink;
        $this->facelink = $facelink;
    }

    function dbConnect()
    {
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password, $this->databasename);
        return $this->connect;
    }

    function prepareData($data)
    {
        return mysqli_real_escape_string($this->connect, stripslashes(htmlspecialchars($data)));
    }
    
    function insertMembre(){
        $nom = $this->prepareData($this->nom);
        $poste = $this->prepareData($this->poste);
        $description = $this->prepareData($this->description);
        $image = $this->prepareData($this->image);
        $tweetlink = $this->prepareData($this->tweetlink);
        $facelink = $this->prepareData($this->facelink);
        $table = $this->table;

        $this->sql = "INSERT INTO ".$table." (nom, poste, description, image, tweeterlink, facebooklink)
         VALUES ('".$nom."', '".$poste."', '".$description."', '".$image."', '".$tweetlink."', '".$facelink."')";

        if($this->connect->query($this->sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function updateMembre(){
        $nom = $this->prepareData($this->nom);
        $poste = $this->prepareData($this->poste);
        $description = $this->prepareData($this->description);
        $image = $this->prepareData($this->image);
        $tweetlink = $this->prepareData($this->tweetlink);
        $facelink = $this->prepareData($this->facelink);
        $table = $this->table;

        $this->sql = "UPDATE ".$table." SET nom = '".$nom."', poste = '".$poste."', 
        description = '".$description."', image = '".$image."', tweeterlink = '".$tweetlink."', 
        facebooklink = '".$facelink."' WHERE nom = '".$nom."' ";

        if($this->connect->query($this->sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function getAllMembres(){
        $this->sql = "SELECT * FROM ".$this->table;
        $output = [];

        if($result = $this->connect->query($this->sql)){
            return $result;
        }
        else{
            return false;
        }
    }

}