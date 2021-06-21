<?php
require '../Configuration/DatabaseConfig.php';

class Actualite{

    private $connect;
    private $data;
    private $sql;
    private $table;
    private $title;
    private $description;
    private $image;
    private $ladate;
    protected $servername;
    protected $username;
    protected $password;
    protected $databasename;

    public function __construct($title, $description, $image, $ladate){
        $this->sql = null;
        $dbc = new DatabaseConfig();
        $this->servername = $dbc->servername;
        $this->username  = $dbc->username;
        $this->password = $dbc->password;
        $this->databasename = $dbc->databasename;
        $this->table = "actualites";
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->ladate = $ladate;
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
  
    function insertActualite(){
        $title = $this->prepareData($this->title);
        $description = $this->prepareData($this->description);
        $image = $this->prepareData($this->image);
        $ladate = $this->prepareData($this->ladate);
        $table = $this->table;

        $this->sql = "INSERT INTO ".$table." (title, description, image, Ladate)
         VALUES ('".$title."', '".$description."', '".$image."', '".$ladate."')";

        if($this->connect->query($this->sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function getAllActualites(){
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