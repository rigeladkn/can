<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Le CAN</title>
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
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="../../../assets/dashboard/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../../assets/dashboard/css/bootstrap/css/bootstrap.min.css">
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
                                            <p class="m-b-0">Menu "Le CAN"</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="lecan.php">Le CAN</a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body button-page">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Le CAN</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <!-- button Default -->
                                                        <p>
                                                            Cliquez sur un composant pour en ajouter (ou modifier son contenu) sur le site web
                                                        </p>
                                                        <div class="row card-block">
                                                            <button class="btn btn-primary waves-effect waves-light col-2" data-toggle="modal" data-target="#presentationModal">Présentation</button>
                                                            <button class="btn btn-success waves-effect waves-light col-2" data-toggle="modal" data-target="#directeurModal"></i>Mot du directeur</button>
                                                            <button class="btn waves-effect waves-light col-1" style="background-color: #ff7814; color:white" data-toggle="modal" data-target="#visionModal">Vision</button>
                                                            <button class="btn btn-info waves-effect waves-light col-1" data-toggle="modal" data-target="#missionModal" >Mission</button>
                                                            <button class="btn waves-effect waves-light col-2" style="background-color: #7814ff; color:white" data-toggle="modal" data-target="#fonctionModal">Fonctionnement</button>
                                                            <button class="btn btn-danger waves-effect waves-light col-2" data-toggle="modal" data-target="#historiqueModal">Historique</button>
                                                            <button class="btn btn-inverse waves-effect waves-light col-1" data-toggle="modal" data-target="#membreModal">Membre</button>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Material tab card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Aperçu des composants de la page</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <!-- Row start -->
                                                        <div class="row m-b-30">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <div class="sub-title">Les données actuelles enregistrées</div>
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs md-tabs" role="tablist">
                                                                  
                                                                    
                                                                        <li class="nav-item" style="margin-right: 80px;">
                                                                            <a class="nav-link active" data-toggle="tab" href="#home3" role="tab">Présentation</a>
                                                                            <div class="slide"></div>
                                                                        </li>
                                                                   

                                                                        <li class="nav-item" style="margin-right: 80px;">
                                                                            <a class="nav-link" data-toggle="tab" href="#profile3" role="tab"> Mot du directeur </a>
                                                                            <div class="slide"></div>
                                                                        </li>
                                                                   
                                                                
                                                                
                                                                    <li class="nav-item" style="margin-right: 80px;">
                                                                        <a class="nav-link" data-toggle="tab" href="#messages3" role="tab">Vision</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item" style="margin-right: 80px;">
                                                                        <a class="nav-link" data-toggle="tab" href="#settings3" role="tab">Missions</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item" style="margin-right: 80px;">
                                                                        <a class="nav-link" data-toggle="tab" href="#fonctions3" role="tab">Fonctionnement</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item" style="margin-right: 80px;">
                                                                        <a class="nav-link" data-toggle="tab" href="#historique3" role="tab">Historique</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item" style="margin-right: 70px;">
                                                                        <a class="nav-link" data-toggle="tab" href="#membres3" role="tab">Membres</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                     
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content card-block">
                                                                    <div class="tab-pane active" id="home3" role="tabpanel">
                                                                        
                                                                            <?php 
                                                                            include('../../../Controllers/getPresentation.php');
                                                                                $resultPresentation = getPresentation('admin');
                                                                                // var_dump($resultMembres);
                                                                                 $resPre = mysqli_fetch_assoc($resultPresentation);
                                                                                  echo "<p class=\"m-0\">". $resPre["description"]."</p>";
                                                                            
                                                                            ?>
                                                                        
                                                                     
                                                                    </div>
                                                                    <div class="tab-pane" id="profile3" role="tabpanel">
                                                                            <?php 
                                                                                include('../../../Controllers/getMotDirecteur.php');
                                                                                $resultMotDirecteur = getMotDirecteur('admin');
                                                                                // var_dump($resultMembres);
                                                                                 $resMot = mysqli_fetch_assoc($resultMotDirecteur );
                                                                                  echo "<p class=\"m-0\">". $resMot["description"]."</p>";
                                                                            
                                                                            ?>
                                                                    </div>
                                                                    <div class="tab-pane" id="messages3" role="tabpanel">
                                                                        <p class="m-0">
                                                                            <?php 
                                                                                include('../../../Controllers/getVisions.php');
                                                                                $resultVision = getVisions('admin');
                                                                                // var_dump($resultMembres);
                                                                                 $resVision = mysqli_fetch_assoc($resultVision );
                                                                                  echo "<p class=\"m-0\">". $resVision["description"]."</p>";
                                                                            
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                    <div class="tab-pane" id="settings3" role="tabpanel">
                                                                        <p class="m-0">
                                                                            <?php 
                                                                                include('../../../Controllers/getMissions.php');
                                                                                $resultMission = getMissions('admin');
                                                                                // var_dump($resultMembres);
                                                                                
                                                                                 echo "<ul>";
                                                                                 while($resMission = mysqli_fetch_assoc($resultMission)){
                                                                                    echo "<li>";
                                                                                        echo "--". $resMission["description"];
                                                                                    echo "</li><br><br>";
                                                                                 }
                                                                                  echo "</ul>";
                                                                            
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                    <div class="tab-pane" id="fonctions3" role="tabpanel">
                                                                        <p class="m-0">
                                                                        <?php 
                                                                                include('../../../Controllers/getFonctions.php');
                                                                                $resultFonctions = getFonctionnement('admin');
                                                                                $resFonctions = mysqli_fetch_assoc($resultFonctions);
                                                                                echo "<p class=\"m-0\">". $resFonctions["description"]."</p>";
                                                                            
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                    <div class="tab-pane" id="historique3" role="tabpanel">
                                                                        <p class="m-0">
                                                                        <?php 
                                                                                include('../../../Controllers/getHists.php');
                                                                                $resultHistorique = getHistorique('admin');
                                                                                // var_dump($resultMembres);
                                                                                 $resHistorique = mysqli_fetch_assoc($resultHistorique );
                                                                                  echo "<p class=\"m-0\">". $resHistorique["description"]."</p>";
                                                                            
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                    <div class="tab-pane" id="membres3" role="tabpanel">
                                                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Hover table card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Liste des membres du CAN</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                                            <li><i class="fa fa-trash close-card"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nom et prénom(s)</th>
                                                                    <th>Poste</th>
                                                                    <th>Description</th>
                                                                    <th>Image</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                    <?php 
                    include('../../../Controllers/getMembres.php');
                        $resultMembres = getMembres('admin');
                        // var_dump($resultMembres);
                        while($resMem = mysqli_fetch_assoc($resultMembres)){
                            echo "<tr>";
                            echo "<th scope=\"row\">".$resMem["id"]."</th>";
                            echo "<td>".$resMem["nom"]."</td>";
                            echo "<td>".$resMem["poste"]."</td>";
                            echo "<td>".$resMem["description"]."</td>";
                            echo "<td>".$resMem["image"]."</td>";
                            echo "</tr>";
					 
					}
					?>
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Hover table card end -->
                                            <!-- Page-body end -->
                                        </div>
                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                </div>
                                                <!-- Material tab card end -->
                                            </div>
                                        </div>

                                      
                                        
                                    </div>   
 
                                   


                     
                            </div>

                            <!-- Warning Section Starts -->

                            <div id="styleSelector">

                            </div>
                        </div>
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

    <!-- Custom js -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
                content: function() {
                    return $('#primary-popover-content').php();
                }
            });
        });
    </script>
    <script type="text/javascript" src="../../../assets/dashboard/js/script.js"></script>

 <!-- modal ajout mission -->
 <?php include("../../../includes/dashboard/modalajoutmission.php")?>
 <!-- modal pour fonctionnement -->
 <?php include("../../../includes/dashboard/modalmodiffonction.php")?> 
 <!-- modal pour historique -->
 <?php include("../../../includes/dashboard/modalhistorique.php")?>
 <!-- modal pour vivion -->
 <?php include("../../../includes/dashboard/modalvision.php")?> 
 <!-- modal pour membre -->
 <?php include("../../../includes/dashboard/modalajoutmembre.php")?>
 <!-- modal pour presentation -->
 <?php include("../../../includes/dashboard/modalpresentation.php")?>
  <!-- modal pour mot directeur -->
 <?php include("../../../includes/dashboard/modalmotdirecteur.php")?>



</body>

</html>
