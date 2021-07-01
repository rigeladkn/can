<?php
$target_dir = "../admin/dashboard/can/uploads/actualites/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["title"]) && isset($_POST["laDate"]) && isset($_POST["description"]) 
&& isset($_FILES["image"])){
    // echo 'reçu';

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } 
        else {
            // echo "File is not an image.";
            $uploadOk = 0;
            header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=notimage");
            die();
        }
            // Check if file already exists
        if (file_exists($target_file)) {
            // echo "Sorry, file already exists.";
            $uploadOk = 0;
            header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=exist");
            die();
        }
        
        // Check file size
        if ($_FILES["image"]["size"] > 5000000) {
            // echo "Sorry, your file is too large.";
            $uploadOk = 0;
            header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=sizetoolong");
            die();
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=false");
            die();
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            // echo "Sorry, your file was not uploaded.";
            header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=false");
            die();
            // if everything is ok, try to upload file
        } 
        else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                

            if(isset($_POST["title"]) && isset($_POST["description"]) && isset($_FILES["image"]) && isset($_POST["laDate"]))
            {
                // echo 'reçu';
                require_once '../Models/Actualite.php';
                $actualite = new Actualite($_POST["title"], $_POST["description"], $_FILES["image"]["name"], $_POST["laDate"], "admin","");

                if($actualite->dbConnect()){
                    echo 'Connecté';
                    if($result = $actualite->insertActualite()){
                        // echo 'Succès';
                        header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=true");
                        die();
                    }
                    else{
                        header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=false");
                        die();
                    }
                }
                else{
                    // echo 'Connexion impossible !';
                    header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=lostconn");
                        die();
                }
            }
        }
    }
}
else{
    // echo 'Tous les champs sont requis';
    header("location: http://localhost/can/admin/dashboard/can/actualites.php?success=requis");
    die();
}

?>