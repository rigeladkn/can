<!DOCTYPE html>
<html lang="fr">
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
	        	'<li class="nav-item" id="home"><a href="index.php" class="nav-link">Accueil</a></li>'+
				'<li class="nav-item active dropdown ">'+
					'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Le CAN</a>'+
					'<div class="dropdown-menu" aria-labelledby="navbarDropdown2">'+
						'<a class="dropdown-item" href="about.php">Présentation</a>'+
						'<a class="dropdown-item" href="motDirecteur.php">Mot du directeur</a>'+
						'<div class="dropdown-divider"></div>'+
						'<a class="dropdown-item" href="team.php">Membres</a>'+
						'<a class="dropdown-item" href="fonctionnement.php">Fonctionnement</a>'+
					'</div>'+
        	   '</li>'+
	        	
	        	'<li class="nav-item"><a href="project.php" class="nav-link">Projets</a></li>'+
	        	'<li class="nav-item"><a href="actualites.php" id="studies" class="nav-link">Actualités</a></li>'+
	        	'<li class="nav-item" ><a href="services.php" onclick="" class="nav-link">Services</a></li>'+
	          '<li class="nav-item"><a href="contact.php" id="contact" class="nav-link">Contact</a></li>'+
	        '</ul>';
	  }
  </script>
	
  </head>
  <body  onLoad="changeActivePage()" >
	  
	<?php include('includes/navbar.php')?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">MEMBRES DU CAN</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Membres <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <h6>Dix-sept (17) membres représentant les acteurs publics et parapublics, les organisations de la société
                civile, les acteurs du secteur privé </h6><br>
            <div class="row">
                <?php
                include('Controllers/getMembres.php');
                $resultMembres = getMembres("client");
                // var_dump($resultMembres);
                while ($resMem = mysqli_fetch_assoc($resultMembres)) {

                    echo "<div class=\"col-md-6 col-lg-3 ftco-animate\">";
                    echo "<div class=\"staff border\">";

                    echo "<div class=\"img-wrap d-flex align-items-stretch\">";
                    echo "<div class=\"img align-self-stretch\" style=\"background-image: url(admin/dashboard/can/uploads/membres/".$resMem['image'].");\"></div>";
                    echo "</div>";
                    echo "<div class=\"text pt-3 px-3 pb-4 text-center\">";
                    echo "<style type=\"text/css\">div.text.pt-3.px-3.pb-4.text-center{height: 160px;}</style>";

                    echo "<h3>" . $resMem["nom"] . "</h3>";
                    echo "<span class=\"position mb-2\">" . $resMem["poste"] . "</span>";
                    echo "<div class=\"faded\">";
                    echo "<h10>".$resMem["description"]. "</h10>";
                    echo "<ul class=\"ftco-social text-center\">";
                    echo "<li class=\"ftco-animate\"><a href=\"" . $resMem["tweeterlink"] . "\" class=\"d-flex align-items-center justify-content-center\"><span class=\"icon-twitter\"></span></a></li>";
                    echo "<li class=\"ftco-animate\"><a href=\"" . $resMem["facebooklink"] . "\"class=\"d-flex align-items-center justify-content-center\"><span class=\"icon-facebook\"></span></a></li>";
                    echo "</ul>";
                    echo "</div>";

                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
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
  
  <script src="assets/js/main.js"></script>
    
  </body>
</html>