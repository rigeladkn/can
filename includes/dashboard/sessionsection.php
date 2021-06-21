<?php session_start();

$connect = mysqli_connect('localhost','root', '','gestnotes');

$sql = "SELECT * FROM  users WHERE matricule = ".$_SESSION["matricule"];
$output = [];

if($result=$connect->query($sql)){
        while($ligne = mysqli_fetch_assoc($result)) {
            array_push($output,$ligne);
        }
}
$allUserInfos = $output; 


