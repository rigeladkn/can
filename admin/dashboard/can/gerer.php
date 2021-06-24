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
                                                <a href="acceuil.php" class="btn waves-effect waves-light btn-primary "></i>Retour</a><br>
                                        </div>
                        </div><br>
                        

                        <div >
                            <div class="row">

                                <!-- Main-body start -->
                                <div class="main-body">
                                    <div class="page-wrapper col-5">
    
                                        <!-- Page-body start -->
                                        <div class="page-body breadcrumb-page">
                                            <div class="">
                                                    <div class="col-sm-12">
                                                        <!-- Basic Form Inputs card start -->
                                                        <!-- Basic Form Inputs card end -->
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- Page-body start -->
                                         </div>
                                    </div>
                                <!-- Main-body start -->  
                                   </div>
                                   <div class="row">
                                       
                                         <!-- Border button -->
                                         <div class="col-sm-6">
                                           <div class="card"  style="height:485px">
                                               <div class="card-header">
                                                   <div class="card-header-left">
                                                       <h5>Titre de l'image</h5>
                                                   </div>
                                                   
                                               </div>
                                               <div class="card-block">
                                                   <!-- button Default -->
                                                   <div class="card-block ">
                                                                <form>
                                                                    
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-10">
                                                                            <img src="../../../assets/images/project-1.jpg" alt="" style="height: 80%;width:420px; margin-bottom:35px">
                                                                            <div class="form-group row" >
                                                                        <div class="col-sm-10"  >
                                                                               <center>
    
                                                                                   <div class="form-check form-check-inline" >
                                                                                       <label class="form-check-label" style="margin-right: 50px;">
                                                                                           <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Visible
                                                                                       </label>
                                                                                       </div>
                                                                                       
                                                                                       <div class="form-check form-check-inline">
                                                                                       <label class="form-check-label">
                                                                                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Non visible
                                                                                       </label>
                                                                                       </div>
                   
                                                                                   </div>
                                                                               </center>
                                                                        </div>
                                                                        </div>
                                                                       
    
                                                                            
                                                                    </div>
                                                                
                                                                    </div>
    
                                                                  
                                                                </form>
                                                            
                                                            </div>      
                                               </div>
                                           </div>
                                       </div>
                                        

                                   </div>
                            </div>

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
</body>

</html>
