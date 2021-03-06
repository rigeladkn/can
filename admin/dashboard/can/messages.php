<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Messages</title>
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
                                            <h5 class="m-b-10">Messages</h5>
                                            <p class="m-b-0">Tous les messages re??us</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="messages.php">Messages</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <?php 
                                            include_once('../../../Controllers/getMessages.php');
                                                $resultMessages = getMessages('admin');
                                                // var_dump($resultMembres);
                                                while($resMes = mysqli_fetch_assoc($resultMessages)){
                                                    echo "<div class=\"row\" >";
                                                   echo  "<div class=\"col-sm-12\" >";
                                                        
                                                        echo "<div class=\"card\" >";
                                                            echo "<div class=\"card-header\">";
                                                                echo "<div class=\"row\">";
                                                                    echo "<div class=\"col-11\">";
                                                                        echo "<h5>Nom de l'exp??diteur : ".$resMes["nom"]."</h5>";
                                                                        echo "<span>Email : ".$resMes["email"]."</span>";
                                                                    echo "</div>";
                                                                    echo "<div class=\"col-1\">";
                                                                        echo "<form id=\"form".$resMes["id"]."\" action=\"../../../Controllers/deleteMessage.php\" method=\"POST\">";
                                                                            echo "<input type=\"hidden\" name=\"id\" value=\"".$resMes["id"]."\">";
                                                                            // echo "<a href=\"#\" onClick=\"document.getElementById('form".$resMes["id"]."').submit()\"><img src=\"../../../assets/dashboard/svg/trash-solid.svg\" width=\"30px\" height=\"30px\"/></a>";
                                                                            echo "<a href=\"#\" onClick=\"if(confirm('??tes-vous s??r de vouloir supprimer ce message ?')) document.getElementById('form".$resMes["id"]."').submit();\"><img src=\"../../../assets/dashboard/svg/trash-solid.svg\" width=\"30px\" height=\"30px\"/></a>";
                                                                        echo "</form>";
                                                                    echo "</div>";
                                                                echo "</div>";
                                                            echo "</div>";
                                                            echo "<div class=\"card-block typography\">";
                                                                echo "<div class=\"row\"  >";
                                                                    echo "<div class=\"col-sm-12\" style=\"margin-top: 0px;\">";
                                                                        echo "<div class=\"card\" >";
                                                                            echo "<div class=\"card-header\">";
                                                                                echo "<h5>Objet : ".$resMes["sujet"]."</h5>";
                                                                            echo "</div>";
                                                                            echo "<div class=\"card-block\">";
                                                                                echo "<div class=\"row\">";
                                                                                    echo "<div class=\"col-sm-12 col-xl-12\">";
                                                                                        echo "<h4 class=\"sub-title\">Message num??ro ". $resMes["id"] ." | Corps du message</h4>";
                                                                                    
                                                                                        echo "<blockquote class=\"blockquote\">";
                                                                                            echo "<p class=\"m-b-0\">".$resMes["texte"] ."</p>";
                                                                                        echo "</blockquote>";
                                                                                    
                                                                                        echo "<blockquote class=\"blockquote blockquote-reverse\">";
                                                                                            echo "<a type=\"button\" href=\"mailto:".$resMes["email"]."\" class=\"btn btn-primary btn-sm m-b-0\">R??pondre</a>";
                                                                                        echo "</blockquote>";
                                                                                    echo "</div>";
                                                                                
                                                                                echo "</div>";
                                                                            echo "</div>";
                                                                        echo "</div>";
                                                                    echo "</div>";
                                                                echo "</div>";
                                                            echo "</div>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo "</div>";
                                            
                                                }
                                        ?>


                                       
                                    </div>
                                    <!-- Page-body end -->
                                </div>
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
    <script src="../../../assets/dashboard/js/vertical/vertical-layout.min.js"></script>
    <script src="../../../assets/dashboard/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../../../assets/dashboard/js/script.js"></script>

</body>

</html>
