<?php
require_once '../Configuration/DatabaseConfig.php';

class User{

    private $connect;
    private $data;
    private $sql;
    protected $servername;
    protected $username;
    protected $password;
    protected $databasename;

    public function __construct(){
        $this->sql = null;
        $dbc = new DatabaseConfig();
        $this->servername = $dbc->servername;
        $this->username  = $dbc->username;
        $this->password = $dbc->password;
        $this->databasename = $dbc->databasename;
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
  
    function signup($table, $email, $password, $confPassword){
        $email = $this->prepareData($email);
        $password = $this->prepareData($password);
        $confPassword = $this->prepareData($confPassword);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $confPassword = password_hash($confPassword, PASSWORD_DEFAULT);

        if(password_verify($password, $confPassword)){
            $this->sql = "INSERT INTO ".$table."(email, motdepasse, confmotdepasse)VALUES('".$email."','".$password."','".$confPassword."')";

            if($this->connect->query($this->sql)){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    function logIn($table, $email, $password)
    {
        $email = $this->prepareData($email);
        $password = $this->prepareData($password);
        $this->sql = "select * from " . $table . " where email = '" . $email . "'";
        $result = mysqli_query($this->connect, $this->sql);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) != 0) {
            $dbemail = $row['email'];
            $dbpassword = $row['motdepasse'];
            if ($dbemail == $email && password_verify($password, $dbpassword)) {
                $login = true;
            } else $login = false;
        } else $login = false;

        return $login;
    }


    function liste($table){
        $this->sql = "SELECT * FROM ".$table;

        if($result = $this->connect->query($this->sql)){
            return $result;
        }
        else{
            return false;
        }
    }

    function insertNote($table,$user_id, $matiere_id,$date, $note){
        $user_id = $this->prepareData($user_id);
        $matiere_id = $this->prepareData($matiere_id);
        $date = $this->prepareData($date);
        $note = $this->prepareData($note);

        $this->sql = "INSERT INTO ".$table."(user_id, matiere_id, date, note)VALUES('".$user_id."','".$matiere_id."','".$date."','".$note."')";

        if($this->connect->query($this->sql)){
            return true;
        }
        else{
            return false;
        }
    }


    function delete($table,$id){
        $this->sql = "DELETE * FROM ".$table. "WHERE id=".$id;
        // $output = [];
        
        if($result=$this->connect->query($this->sql)){
        //         while($ligne = mysqli_fetch_assoc($result)) {
        //             array_push($output,$ligne);
        //         }
        echo "ok";
        return true;
         }
        // return $output;
    }

}