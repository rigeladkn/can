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
                                            <h5 class="m-b-10">Buttons</h5>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Buttons</a>
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
                                                            <h5>Basic Buttons</h5>
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
                                                            Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                                                        </p>
                                                        <button class="btn btn-primary waves-effect waves-light">Primary Button</button>
                                                        <button class="btn btn-success waves-effect waves-light">Success Button</button>
                                                        <button class="btn btn-info waves-effect waves-light">Info Button</button>
                                                        <button class="btn btn-warning waves-effect waves-light">Warning Button</button>
                                                        <button class="btn btn-danger waves-effect waves-light">Danger Button</button>
                                                        <button class="btn btn-inverse waves-effect waves-light">Inverse Button</button>
                                                        <button class="btn btn-disabled disabled waves-effect waves-light">Disabled Button</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Buttons With Icon</h5>
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
                                                        <p>Use <code>&lt;i class="icofont icofont-star"&gt;</code> inside button to add icon.</p>
                                                        <button class="btn waves-effect waves-light btn-primary"><i class="icofont icofont-user-alt-3"></i>Primary Button</button>
                                                        <button class="btn waves-effect waves-light btn-success"><i class="icofont icofont-check-circled"></i>Success Button</button>
                                                        <button class="btn waves-effect waves-light btn-info"><i class="icofont icofont-info-square"></i>Info Button</button>
                                                        <button class="btn waves-effect waves-light btn-warning"><i class="icofont icofont-warning-alt"></i>Warning Button</button>
                                                        <button class="btn waves-effect waves-light btn-danger"><i class="icofont icofont-eye-alt"></i>Danger Button</button>
                                                        <button class="btn waves-effect waves-light btn-inverse"><i class="icofont icofont-exchange"></i>Inverse Button</button>
                                                        <button class="btn waves-effect waves-light btn-disabled disabled"><i class="icofont icofont-not-allowed"></i>Disabled Button</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Border button -->
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Border Buttons</h5>
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
                                                        <p>Use Class <code>btn-outline-*</code> inside button to make Border Button.</p>
                                                        <button class="btn waves-effect waves-light btn-primary btn-outline-primary"><i class="icofont icofont-user-alt-3"></i>Primary Button</button>
                                                        <button class="btn waves-effect waves-light btn-success btn-outline-success"><i class="icofont icofont-check-circled"></i>Success Button</button>
                                                        <button class="btn waves-effect waves-light btn-info btn-outline-info"><i class="icofont icofont-info-square"></i>Info Button</button>
                                                        <button class="btn waves-effect waves-light btn-warning btn-outline-warning"><i class="icofont icofont-warning-alt"></i>Warning Button</button>
                                                        <button class="btn waves-effect waves-light btn-danger btn-outline-danger"><i class="icofont icofont-eye-alt"></i>Danger Button</button>
                                                        <button class="btn waves-effect waves-light btn-inverse btn-outline-inverse"><i class="icofont icofont-exchange"></i>Inverse Button</button>
                                                        <button class="btn waves-effect waves-light btn-disabled btn-outline-disabled disabled"><i class="icofont icofont-not-allowed"></i>Disabled Button</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Buttons Dropdown</h5>
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
                                                        <div class="dropdown-primary dropdown open">
                                                            <button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Primary</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-success dropdown open">
                                                            <button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Success</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdown-3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-info dropdown open">
                                                            <button class="btn btn-info dropdown-toggle waves-effect waves-light " type="button" id="dropdown-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Info</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdown-4" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-warning dropdown open">
                                                            <button class="btn btn-warning dropdown-toggle waves-effect waves-light " type="button" id="dropdown-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Warning</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdown-5" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-danger dropdown open">
                                                            <button class="btn btn-danger dropdown-toggle waves-effect waves-light " type="button" id="dropdown-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Danger</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdown-6" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-inverse dropdown open">
                                                            <button class="btn btn-inverse dropdown-toggle waves-effect waves-light " type="button" id="dropdown-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Inverse</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdown-7" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-disabled dropdown open">
                                                            <button class="btn btn-disabled dropdown-toggle waves-effect waves-light disabled" type="button" id="dropdown-8" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">Disabled</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdown-8" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                                <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Border button -->
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Group Buttons</h5>
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
                                                        <div>
                                                            <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                                                                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Left</button>
                                                                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Middle</button>
                                                                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Right</button>
                                                            </div>
                                                            <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                                                                <button type="button" class="btn btn-primary btn-md waves-effect waves-light">Left</button>
                                                                <button type="button" class="btn btn-primary btn-md waves-effect waves-light">Middle</button>
                                                                <button type="button" class="btn btn-primary btn-md waves-effect waves-light">Right</button>
                                                            </div>
                                                            <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Left</button>
                                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Middle</button>
                                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Right</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
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
</body>

</html>
