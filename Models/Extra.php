<?php


class Extra{

    private $connect;
    private $data;
    private $sql;
    private $from;

    private $table;
    private $title;
    private $description;
    private $image;
    private $type;

    protected $servername;
    protected $username;
    protected $password;
    protected $databasename;

    public function __construct($title, $description, $image, $type, $from, $op){
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
        $this->table = "extras";
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->type = $type;
        
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
  
    function insertExtra(){
        $title = $this->prepareData($this->title);
        $description = $this->prepareData($this->description);
        $image = $this->prepareData($this->image);
        $type = $this->prepareData($this->type);
        $table = $this->table;

        $this->sql = "INSERT INTO ".$table." (title, description, image, type)
         VALUES ('".$title."', '".$description."', '".$image."', '".$type."')";

        if($this->connect->query($this->sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function updateExtra(){
        $title = $this->prepareData($this->title);
        $description = $this->prepareData($this->description);
        $image = $this->prepareData($this->image);
        $type = $this->prepareData($this->type);
        $table = $this->table;

        
        $sqlexists = "SELECT COUNT(1) FROM ".$this->table." WHERE type = '".$this->type."'";
        $ifsqlexists = mysqli_fetch_assoc($this->connect->query($sqlexists));
        if ( $ifsqlexists["COUNT(1)"] != 0) {
            
            $this->sql = "UPDATE ".$table." SET title = '".$title."', description = '".$description."', image = '".$image."', type = '".$type."' WHERE type = '".$type."' ";

            if($this->connect->query($this->sql)){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            $this->sql = "INSERT INTO ".$table." (title, description, image, type)
            VALUES ('".$title."', '".$description."', '".$image."', '".$type."')";
   
           if($this->connect->query($this->sql)){
               return true;
           }
           else{
               return false;
           }
        }

        
    }

    function getAllExtras($typeParam){
        $this->sql = "SELECT * FROM ".$this->table." WHERE type = '".$typeParam."' ";
        $output = [];

        if($result = $this->connect->query($this->sql)){
            return $result;
        }
        else{
            return false;
        }
    }

    function deleteExtra($typeParam, $id){
        $this->sql = "DELETE FROM ".$this->table." WHERE id = '".$id."' AND type = '".$typeParam."' ";
        if($result = $this->connect->query($this->sql)){
            return true;
        }
        else{
            return false;
        }
    }

}