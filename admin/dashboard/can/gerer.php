<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Gérer les images</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="../../../assets/dashboard/images/favicon.ico" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../../../assets/dashboard/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="../../../assets/dashboard/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../../../assets/dashboard/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="../../../assets/dashboard/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="../../../assets/dashboard/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../../../assets/dashboard/css/style.css">
      <link rel="stylesheet" type="text/css" href="../../../assets/dashboard/css/jquery.mCustomScrollbar.css">
  </head>
  <body>
    <!-- Pre-loader start -->
  <?php include("../../../includes/dashboard/preloader.php"); ?>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
          <?php include("../../../includes/dashboard/headernavbar.php"); ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                <?php include("../../../includes/dashboard/sidebar.php") ?>
                
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Customisez vos pages</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="acceuil.php">Acceuil</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                        <div class="row">
                                <div class="col-10"></div>
                                        <div class="col-2">
                                                <a href="acceuil.php" class="btn waves-effect waves-light btn-danger "></i>Retour</a><br>
                                        </div>
                        </div><br>
                        
                        <?php 

                            include_once('../../../Controllers/getImages.php');
                            $resultImages = getImages('admin');

                            // var_dump($resultMembres);
                            while($resIm = mysqli_fetch_assoc($resultImages)){
                       echo "<div>";
                                                echo "<form method=\"post\" action=\"../../../Controllers/updateVisibility.php?id=".$resIm["title"]."\">";
                                                //une première image ici
                                                echo "<div class=\"col-md-6\">";
                                                echo "<div class=\"card\"  style=\"height:485px\">";
                                                    echo "<div class=\"card-header\">";
                                                        echo "<div class=\"card-header-left\">";
                                                        echo "<h5>Titre : ".$resIm["title"]."</h5>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                 
                                                        //<!-- button Default -->
                                                        echo "<div class=\"card-block sd-6\">";
                                                                         
                                                            echo "<div class=\"form-group row\">";
                                                                echo "<div class=\"col-sm-10\">";
                                                                    echo "<img src=\"uploads/".$resIm["image"]."\" alt=\"".$resIm["image"]."\" style=\"height: 80%;width:420px; margin-bottom:35px\">";
                                                                    echo "<div class=\"form-group row\" >";
                                                                echo "<div class=\"col-sm-10\"  >";
                                                                    echo "<center>";

                                                                            
                                                                            echo "<center>";
                    
                                                                            echo "<div class=\"col-2\">";
                                                                                if($resIm["status"]=="visible" or $resIm["status"]=="Visible"){
                                                                                    $color = 'primary';
                                                                                }
                                                                                else{
                                                                                    $color = 'danger';
                                                                                }
                                                                            echo "<input type=\"text\" value=\"".$resIm["image"]."\" hidden name =\"but\" >";
                                                                            echo "<input type=\"text\" value=\"".$resIm["id"]."\"  name =\"".$resIm["id"]."\" >";
                                                                            echo "<button  class=\"btn waves-effect waves-light btn-sm btn-".$color."\" value=\"".$resIm["image"]."\"></i>".$resIm["status"]."</button><br>";
                                                                            echo "</div>"; 

                                                                            echo "</center>"; 
        
                                                                    echo "</center>";
                                                                echo "</div>";
                                                                echo "</div>";
                                                                echo "</div>";
                                                                echo "</div>";
                                                                echo "</div>";     
                                                                            
                                                            echo "</div>";
                                                        echo "<form>";  
                                                    //autre image débute ici
                                                    echo "</div>";
                                                    
                                            // }
                
                                        }
                                    ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>



 
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="../../../assets/dashboard/js/jquery/jquery.min.js "></script>
<script type="text/javascript" src="../../../assets/dashboard/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="../../../assets/dashboard/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../../../assets/dashboard/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="../../../assets/dashboard/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../../../assets/dashboard/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- Custom js -->
<script src="../../../assets/dashboard/js/pcoded.min.js"></script>
<script src="../../../assets/dashboard/js/vertical/vertical-layout.min.js"></script>
<script src="../../../assets/dashboard/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../../../assets/dashboard/js/script.js"></script>
<!-- 
<script>
    function changeVisibility(name,visibility){
        // alert(name);
  
        new Ajax.Request('../../../Controllers/updateVisibility.php',
        {
            method:'post',
            parameters:{q_input: ok,old_vivibility : visibility},
            cache: false,
            onSuccess: function(transport)
            {
                jQuery('.debug').html(transport.responseText);
                alert(document.getElementByName(name).innerHTML = "Changé");
            }
        });
}

    
</script> -->

</body>

</html>
