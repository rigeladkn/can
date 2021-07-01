<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Negotiate - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
	  function changeActivePage(){
        document.getElementById("ftco-nav").innerHTML = 	  '<a class="navbar-brand" href="index.php"><img style="height:64px" src="assets/images/can.png"></a>'+
	        '<ul class="navbar-nav mr-auto" style="display:-webkit-inline-box">'+
	        	'<li class="nav-item " id="home"><a href="index.php" class="nav-link">Accueil</a></li>'+
				'<li class="nav-item dropdown ">'+
					'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Le CAN</a>'+
					'<div class="dropdown-menu" aria-labelledby="navbarDropdown2">'+
						'<a class="dropdown-item" href="about.php">Présentation</a>'+
						'<a class="dropdown-item" href="motDirecteur.php">Mot du directeur</a>'+
						'<div class="dropdown-divider"></div>'+
						'<a class="dropdown-item" href="team.php">Membres</a>'+
						'<a class="dropdown-item" href="fonctionnement.php">Fonctionnement</a>'+
					'</div>'+
        	   '</li>'+
	        	
	        	'<li class="nav-item active"><a href="project.php" id="team" class="nav-link">Projets</a></li>'+
	        	'<li class="nav-item"><a href="actualites.php" id="studies" class="nav-link">Actualités</a></li>'+
	        	'<li class="nav-item" ><a href="services.php" onclick="" class="nav-link">Services</a></li>'+
	          '<li class="nav-item"><a href="contact.php" id="contact" class="nav-link">Contact</a></li>'+
	        '</ul>';
	  }
  </script>
	
  </head>
<body onload="changeActivePage()">
	
	<?php include('includes/navbar.php')?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Nos Projets</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Projets <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section">
		<div class="container">
			<div class="row no-gutters justify-content-center mb-5">
        <div class="col-md-6 text-center heading-section ftco-animate">
					<span class="subheading">Projets réalisés</span>
					<h2 class="mb-4">Nos Projets</h2>
					<p>Voici une liste de quelques projets réalisés par le Conseil de l'Alimentation et de la Nutrition (CAN) : </p>
          <p></p>
        </div>
			</div>

      <div class="tabulation-2 mt-4">
        <ul class="nav nav-pills nav-fill d-md-flex d-block">
          <li class="nav-item" style="margin-left:10px; margin-right:10px">
            <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Tous</a>
          </li>
          <li class="nav-item px-lg-2" style="margin-left:10px; margin-right:10px">
            <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> En cours</a>
          </li>
          <li class="nav-item px-lg-2" style="margin-left:10px; margin-right:10px">
            <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-person mr-2"></span> Clôturé</a>
          </li>
        </ul>

        <div class="tab-content bg-light rounded mt-2">
          <div class="tab-pane container p-0 active" id="home1">
            <div class="row">
              <?php
                include_once('Controllers/getProjects.php');
                $resultProjects = getProjects("client");
                $i = 1;
                while($resPro = mysqli_fetch_assoc($resultProjects)){
                  echo "<div class=\"col-md-4\">";
                    echo "<div class=\"project\">";
                      echo "<a href=\"project-single.php?id=".$resPro["id"]."\" class=\"block-20 d-flex align-items-end img rounded mb-4\" style=\"background-image: url(assets/images/project-".$i.".jpg);\"></a>";
                      echo "<div class=\"text w-100 text-center\">";
                        echo "<span class=\"cat\">".$resPro["status"]."</span>";
                        echo "<h3><a href=\"project-single.php?id=".$resPro["id"]."\">".$resPro["financement"]."</a></h3>";
                        echo "<p>".$resPro["description"]."</p>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                  $i = $i + 1;
                }
              ?>
            </div>
          </div>
          <div class="tab-pane container p-0 fade" id="home2">
            <div class="row">
              <?php
                include_once('Controllers/getProjects.php');
                $resultProjects = getProjects("client");
                $i = 1;
                while($resPro = mysqli_fetch_assoc($resultProjects)){
                  if($resPro["status"] == "En cours"){
                    echo "<div class=\"col-md-4\">";
                      echo "<div class=\"project\">";
                        echo "<a href=\"project-single.php?id=".$resPro["id"]."\" class=\"block-20 d-flex align-items-end img rounded mb-4\" style=\"background-image: url(assets/images/project-".$i.".jpg);\"></a>";
                        echo "<div class=\"text w-100 text-center\">";
                          echo "<span class=\"cat\">".$resPro["status"]."</span>";
                          echo "<h3><a href=\"project-single.php?id=".$resPro["id"]."\">".$resPro["financement"]."</a></h3>";
                          echo "<p>".$resPro["description"]."</p>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>";
                  }
                  $i = $i + 1;
                }
              ?>
            </div>
          </div>
          <div class="tab-pane container p-0 fade" id="home3">
            <div class="row">
              <?php
                include_once('Controllers/getProjects.php');
                $resultProjects = getProjects("client");
                $i = 1;
                while($resPro = mysqli_fetch_assoc($resultProjects)){
                  if($resPro["status"] == "Clôturé"){
                    echo "<div class=\"col-md-4\">";
                      echo "<div class=\"project\">";
                        echo "<a href=\"project-single.php?id=".$resPro["id"]."\" class=\"block-20 d-flex align-items-end img rounded mb-4\" style=\"background-image: url(assets/images/project-".$i.".jpg);\"></a>";
                        echo "<div class=\"text w-100 text-center\">";
                          echo "<span class=\"cat\">".$resPro["status"]."</span>";
                          echo "<h3><a href=\"project-single.php?id=".$resPro["id"]."\">".$resPro["financement"]."</a></h3>";
                          echo "<p>".$resPro["description"]."</p>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>";
                  }
                  $i = $i + 1;
                }
              ?>
            </div>
          </div>
        </div>
      </div>

		</div>
      
	</section>
		
    
    <?php include("includes/footer.php") ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
  <!-- <script src="assets/js/google-map.js"></script> -->
  <script src="assets/js/main.js"></script>
    
  </body>
</html>