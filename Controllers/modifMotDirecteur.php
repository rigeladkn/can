<?php

$target_dir = "../admin/dashboard/can/uploads/directeur/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 


if(isset($_POST["title"]) && isset($_POST["description"])){
    // echo 'reçu';
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
    //    echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
    //    echo "File is not an image.";
      $uploadOk = 0;
      header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=notimage");
      die();
    }
  
  
      // Check if file already exists
      if (file_exists($target_file)) {
      // echo "Sorry, file already exists.";
      $uploadOk = 0;
      header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=exist");
      die();
      }
  
      // Check file size
      if ($_FILES["image"]["size"] > 5000000) {
      // echo "Sorry, your file is too large.";
      $uploadOk = 0;
      header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=sizetoolong");
      die();
      }
  
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
      // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
      header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=notimage");
      die();
      }
  
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          // echo "Sorry, your file was not uploaded.";
          header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=false");
          die();
      // if everything is ok, try to upload file
      } 
      else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        require_once '../Models/Extra.php';

<<<<<<< HEAD
        $mot_directeur = new Extra($_POST["title"], $_POST["description"], $_FILES["image"]["name"], "motDirecteur", "admin","");
=======
        $mot_directeur = new Extra($_POST["title"], $_POST["description"], $_FILES["image"], "motDirecteur", "admin","");
>>>>>>> b6ab62a5d81cbf872ecb583956294ede8d57c5e5

        if($mot_directeur->dbConnect()){
            echo 'Connecté';
            if($result = $mot_directeur->updateExtra()){
                // echo 'Succès';
                            header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=true");
                die();
            }
            else{
                header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=false");
                die();
            }
        }
        else{
            // echo 'Connexion impossible !';
            header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=lostconn");
                die();
        }
    }
    else{
        // echo 'Tous les champs sont requis';
        header("location: http://localhost/can/admin/dashboard/can/lecan.php?success=requis");
        die();
    }
}
}
