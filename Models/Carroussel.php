<?php 

class Carroussel{
//pour la connexion
    private $servername;
    private $username;
    private $password;
    private $databasename;
    private $table = "carroussel";
    private $image;
    private $title;
    private $description;
    private $status;
    private $sql;

    private $from;
//fin
//Attributs propres
   
//fin

    public function __construct($image, $title, $description, $status, $from,$op){
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
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
       
        
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


    function insertNewImage(){

        $image = $this->prepareData($this->image);
        $title = $this->prepareData($this->title);
        $description = $this->prepareData($this->description);
        $status = $this->prepareData($this->status);
        
        $sql = "INSERT INTO ".$this->table."(image, title, description, status)VALUES('".$image."','".$title."','".$description."','".$status."')";

        if($this->connect->query($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function getAllImages(){
     
        $sql = "SELECT * FROM ".$this->table ;
    
        if( $result = $this->connect->query($sql)){

            return $result;
        }
        else{
            return false;
        }
    }


    function getVisibleImages(){
     
        $sql = "SELECT * FROM ".$this->table."WHERE status = Visible OR status = visible" ;
    
        if( $result = $this->connect->query($sql)){

            return $result;
        }
        else{
            return false;
        }
    }

    function updateVisibility($id){
        var_dump($id);
        $table = $this->table;

        $sql0 = "SELECT status FROM ".$this->table." WHERE id = '".$id."'" ;
        // var_dump($sql0);
        $result0 = $this->connect->query($sql0);
        $res = mysqli_fetch_assoc($result0);
            if($res["status"] == "Non visible"){
                $newVisibility = 'Visible';
            }
            else if($res["status"] == "Visible"){
                $newVisibility = 'Non visible';
            }
            var_dump($newVisibility);
            $this->sql = "UPDATE ".$table." SET status = '".$newVisibility."' WHERE id = '".$id."' ";

            if($this->connect->query($this->sql)){
                return true;
            }
            else{
                return false;
            }
        
       
    }


    function deleteAllImages(){
     
        $sql = "DELETE * FROM ".$this->table ;
      
        if($this->connect->query($sql)){
            return true;
        }
        else{
            return false;
        }
    }

}