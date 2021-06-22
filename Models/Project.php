<?php
require '../Configuration/DatabaseConfig.php';

class Project{

    private $connect;
    private $data;
    private $sql;
    private $table;
    private $status;
    private $financement;
    private $description;
    protected $servername;
    protected $username;
    protected $password;
    protected $databasename;

    public function __construct($status, $financement, $description){
        $this->sql = null;
        $dbc = new DatabaseConfig();
        $this->servername = $dbc->servername;
        $this->username  = $dbc->username;
        $this->password = $dbc->password;
        $this->databasename = $dbc->databasename;
        $this->table = "projects";
        $this->status = $status;
        $this->financement = $financement;
        $this->description = $description;
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
  
    function insertProject(){
        $status = $this->prepareData($this->status);
        $financement = $this->prepareData($this->financement);
        $description = $this->prepareData($this->description);
        $table = $this->table;

        $this->sql = "INSERT INTO ".$table." (status, financement, description)
         VALUES ('".$status."','".$financement."','".$description."')";

        if($this->connect->query($this->sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function getAllProjects(){
        $this->sql = "SELECT * FROM ".$this->table;
        $output = [];

        if($result=$this->connect->query($this->sql)){
            return $result;
        }
        else{
            return false;
        }
    }

}