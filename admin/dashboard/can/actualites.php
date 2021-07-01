<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Actualités</title>
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

<!--<body class="fix-menu dark-layout">-->

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
                                            <h5 class="m-b-10">Actualités</h5>
                                            <p class="m-b-0">Les actualités du CAN</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="actualites.php">Actualités</a>
                                            
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">

                            <div class="row">
                                        <div class="col-10"></div>
                                        <div class="col-2">
                                            <button class="btn waves-effect waves-light btn-primary " data-toggle="modal" data-target="#actualiteModal" ></i>Ajouter</button><br>
                                        </div>
                            </div><br>

                             
                                     <!-- Page-body start -->
                                     <div class="page-body">
                                        <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Liste d'actualités</h5>
                                                <!-- <span>use class <code>table</code> inside table element</span> -->
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
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>N°</th>
                                                                <th>Titre</th>
                                                                <th>Description</th>
                                                                <th>Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                            include_once('../../../Controllers/getActualites.php');
                                                                $resultActualites = getActualites('admin');
                                                                while($resAct = mysqli_fetch_assoc($resultActualites)){
                                                                    echo "<tr>";
                                                                        echo "<th scope=\"row\">".$resAct["id"]."</th>";
                                                                        echo "<td>".$resAct["title"]."</td>";
                                                                        echo "<td>".$resAct["description"]."</td>";
                                                                        echo "<td>".$resAct["Ladate"]."</td>";
                                                                        echo "<td>";
                                                                                echo "<form id=\"form".$resAct["id"]."\" action=\"../../../Controllers/deleteActualite.php\" method=\"POST\">";
                                                                                    echo "<input type=\"hidden\" name=\"id\" value=\"".$resAct["id"]."\">";
                                                                                    // echo "<a href=\"#\" onClick=\"document.getElementById('form".$resAct["id"]."').submit()\"><img src=\"../../../assets/dashboard/svg/trash-solid.svg\" width=\"30px\" height=\"30px\"/></a>";
                                                                                    echo "<a href=\"#\" onClick=\"if(confirm('Êtes-vous sûr de vouloir supprimer cette actualité ?')) document.getElementById('form".$resAct["id"]."').submit();\"><img src=\"../../../assets/dashboard/svg/trash-solid.svg\" width=\"30px\" height=\"30px\"/></a>";
                                                                                echo "</form>";
                                                                            echo "</td>";
                                                                    echo "</tr>";
                                                            
                                                            }
					                                    ?>
                                                             
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                
                                    </div>
                                    <!-- Page-body end -->
                            </div>
                        </div>
                    </div>
                    <!-- Main-body end -->

                    <div id="styleSelector">

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../../../assets/dashboard/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../../../assets/dashboard/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../../../assets/dashboard/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../../../assets/dashboard/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../../../assets/dashboard/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
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
    <script src="../../../assets/dashboard/js/pcoded.min.js"></script>
    <script src="../../../assets/dashboard/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../../assets/dashboard/js/vertical/vertical-layout.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../../../assets/dashboard/js/script.js"></script>

    <!-- modal pour actualités -->
 <?php include("../../../includes/dashboard/modalajoutactualite.php")?> 

<!-- script pour modals et redirections -->
   
<?php include("../../../includes/dashboard/scriptactualites.php");?>

</body>

</html>
