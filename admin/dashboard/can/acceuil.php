<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Acceuil</title>
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
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">


                                <div class="row">
                                        <div class="col-10"></div>
                                        <div class="col-2">
                                            <form action="../../../Controllers/gestImages.php" method="post">
                                                <button type="submit" class="btn waves-effect waves-light btn-primary "></i>Gérer</button><br>
                                            </form>
                                        </div>
                                </div><br>

                                    <!-- Page-body start -->
                                    <div class="page-body breadcrumb-page">
                                    <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Carroussel de l'acceuil</h5>
                                                        <span>Ajoutez une image qui s'affichera dans le carroussel<code>(.png, .jpg /.jpeg)</code></span>
                                 
                                                    </div>
                                                    <div class="card-block">
                                                    <!-- <div class="row">
                                                        <div class="col-4">
                                                            <h4 class="sub-title">Ajoutez une image</h4>
                                                        </div>
                                                        <div class="col-7"></div>
                                                        <div class="col-1">
                                                          <button class="btn btn-primary btn-sm"> +1 </button>
                                                        </div>
                                                        
                                                    </div> -->
                                                       
                                                        <form action="../../../Controllers/upload.php" method="post" enctype="multipart/form-data">
                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Image </label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" class="form-control" name="image" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Titre</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" maxlength="100" placeholder="Entrez une courte phrase (max characters =  100)" required name="title">
                                                                </div>
                                                            </div>  
                                                            
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Description</label>
                                                                <div class="col-sm-10">
                                                                     <textarea class="form-control" placeholder="Description" required name="description"id="" cols="30" rows="10"></textarea>
                                                                </div>
                                                            </div>
                                                                <center>
                                                                        <button type="submit" class="btn waves-effect waves-light btn-primary " name="submit"></i>Ajouter</button><br>
                                                                </center>

                                                           
                                                        </form>
                                                      
                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body start -->
                                </div>
                            </div>
                            <!-- Main-body start -->

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


<!-- script pour modals et redirections -->
   
<?php include("../../../includes/dashboard/scriptacceuil.php");?>

</body>

</html>
