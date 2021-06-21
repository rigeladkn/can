<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Able bootstrap admin template by Codedthemes</title>
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
    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="../../../assets/dashboard/pages/notification/notification.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="../../../assets/dashboard/css/animate.css/css/animate.css">
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
                                            <h5 class="m-b-10">Notification</h5>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Advance Components</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Notification</a>
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
                                    <!-- Page body start -->
                                    <div class="page-body button-page">
                                        <div class="row">
                                            <!-- bootstrap modal start -->
                                            <div class="col-sm-12">
                                                <!-- Notification card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Notifications</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="sub-title">Notification Position</div>
                                                                <p>This plugin has layout options where you can display it in any corner of the screen, simply click one layout corners and press the buttons on the other section to see the magic</p>
                                                                <div class="location-selector">
                                                                    <div class="bit top left" data-position="top left"></div>
                                                                    <div class="bit top right" data-position="top right"></div>
                                                                    <div class="bit top" data-position="top"></div>
                                                                    <div class="bit bottom left" data-position="bottom left"></div>
                                                                    <div class="bit bottom right" data-position="bottom right"></div>
                                                                    <div class="bit bottom" data-position="bottom"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="sub-title">Notification Alert</div>
                                                                <p>Notification color : <code> data-type="inverse"</code> Notification position : <code> data-align="left" </code></p>
                                                                <ul class="notifications">
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="left" data-icon="fa fa-check">Top Left</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="right" data-icon="fa fa-comments">Top Right</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="center" data-icon="fa fa-comments">Top Center</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="left">Bottom Left</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="right">Bottom Right</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="center">Bottom Center</button>
                                                                    </li>
                                                                </ul>
                                                                <div class="sub-title">Notification Position</div>
                                                                <p>Change data-type : <code> data-type="primary"</code> to change notification color</p>
                                                                <ul class="notifications">
                                                                    <li>
                                                                        <button class="btn btn-inverse waves-effect" data-type="inverse" data-from="top" data-align="right" data-icon="fa fa-check">Inverse</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="primary" data-from="top" data-align="right" data-icon="fa fa-comments">Primary</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-info waves-effect" data-type="info" data-from="top" data-align="right" data-icon="fa fa-comments">Info</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-success waves-effect" data-type="success" data-from="top" data-align="right">success</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-warning waves-effect" data-type="warning" data-from="top" data-align="right">Warning</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-danger waves-effect" data-type="danger" data-from="top" data-align="right">Danger</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="sub-title">Notification Behaviour</div>
                                                                <p>use code <code>data-animation-in="animated fadeIn" data-animation-out="animated fadeOut"</code> notification animation effect</p>
                                                                <ul class="notifications">
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeIn" data-animation-out="animated fadeOut">Fade In</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInLeft" data-animation-out="animated fadeOutLeft">Fade In Left</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInRight" data-animation-out="animated fadeOutRight">Fade In Right</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInUp" data-animation-out="animated fadeOutUp">Fade In Up</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeInDown" data-animation-out="animated fadeOutDown">Fade In Down</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated bounceIn" data-animation-out="animated bounceOut">Bounce In</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated bounceInLeft" data-animation-out="animated bounceOutLeft">Bounce In Left</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated bounceInRight" data-animation-out="animated bounceOutRight">Bounce In Right</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated rotateInDownRight" data-animation-out="animated rotateOutUpRight">Fall In
                                                                            Right</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated rotateIn" data-animation-out="animated rotateOut">Rotate In</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated flipInX" data-animation-out="animated flipOutX">Flip In X</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated flipInY" data-animation-out="animated flipOutY">Flip In Y</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Notification card end -->
                                            </div>
                                            <!-- Bootstrap modal end -->
                                        </div>
                                    </div>
                                    <!-- Page body end -->
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
    <!-- notification js -->
    <script type="text/javascript" src="../../../assets/dashboard/js/bootstrap-growl.min.js"></script>
    <script type="text/javascript" src="../../../assets/dashboard/pages/notification/notification.js"></script>
    <script src="../../../assets/dashboard/js/pcoded.min.js"></script>
    <script src="../../../assets/dashboard/js/vertical/vertical-layout.min.js"></script>
    <script src="../../../assets/dashboard/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../../../assets/dashboard/js/script.js"></script>

</body>

</html>
