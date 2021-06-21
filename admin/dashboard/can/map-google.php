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
                                            <h5 class="m-b-10">Google Map</h5>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Maps</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Google Maps</a>
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
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-xl-6">
                                                <!-- Basic map start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Basic</h5>
                                                        <span>Map shows places around the world</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="basic-map" class="set-map"></div>
                                                    </div>
                                                </div>
                                                <!-- Basic map end -->
                                            </div>
                                            <div class="col-lg-12 col-xl-6">
                                                <!-- Markers map start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Markers</h5>
                                                        <span>Maps shows <code>location</code> of the place</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="markers-map" class="set-map"></div>
                                                    </div>
                                                </div>
                                                <!-- Markers map end -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-xl-6">
                                                <!-- Overlay map start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Overlay</h5>
                                                        <span>Map shows places around the world</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="mapOverlay" class="set-map"></div>
                                                    </div>
                                                </div>
                                                <!-- Overlay map start -->
                                            </div>
                                            <div class="col-lg-12 col-xl-6">
                                                <!-- Geo-Coding map start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Geo-Coding</h5>
                                                        <span>Search your location</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <form method="post" id="geocoding_form">
                                                            <div class="input-group input-group-button">
                                                                <input type="text" id="address" class="form-control" placeholder="Write your place">
                                                                <span class="input-group-addon" id="basic-addon1">
                                                                   <button class="btn btn-primary">Search Location</button>
                                                               </span>
                                                           </div>
                                                       </form>
                                                       <div id="mapGeo" class="set-map"></div>
                                                   </div>
                                               </div>
                                               <!-- Geo-Coding map end -->
                                           </div>
                                       </div>
                                       <div class="row">
                                        <div class="col-lg-12 col-xl-6">
                                            <!-- Street View map start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Street View</h5>
                                                    <span>Map shows view of street</span>
                                                </div>
                                                <div class="card-block">
                                                    <div id="mapStreet" class="set-map"></div>
                                                </div>
                                            </div>
                                            <!-- Street View map end -->
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <!-- Map Types card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Map Types</h5>
                                                    <span>Select your <code>map-types</code> to see differant views</span>
                                                </div>
                                                <div class="card-block">
                                                    <div id="mapTypes" class="set-map"></div>
                                                </div>
                                            </div>
                                            <!-- Map Types card end -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-6">
                                            <!-- GeoRSS Layers map start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>GeoRSS Layers</h5>
                                                    <span>Shows <code>RSS</code> location</span>
                                                </div>
                                                <div class="card-block">
                                                    <div id="georssmap" class="set-map"></div>
                                                </div>
                                            </div>
                                            <!-- GeoRSS Layers map end -->
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <!-- Marker Clustering map start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Marker Clustering</h5>
                                                    <span>Multiple markers show differant location</span>
                                                </div>
                                                <div class="card-block">
                                                    <div id="map" class="set-map"></div>
                                                </div>
                                            </div>
                                            <!-- Marker Clustering map end -->
                                        </div>
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
<!-- Required Jquery -->
<script type="text/javascript" src="../../../assets/dashboard/js/jquery/jquery.min.js "></script>
<script type="text/javascript" src="../../../assets/dashboard/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="../../../assets/dashboard/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../../../assets/dashboard/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="../../../assets/dashboard/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../../../assets/dashboard/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- Google map js -->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="../../../assets/dashboard/pages/google-maps/gmaps.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="../../../assets/dashboard/pages/google-maps/google-maps.js"></script>
<script src="../../../assets/dashboard/js/pcoded.min.js"></script>
<script src="../../../assets/dashboard/js/vertical/vertical-layout.min.js"></script>
<script src="../../../assets/dashboard/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../../../assets/dashboard/js/script.js"></script>
</body>

</html>
