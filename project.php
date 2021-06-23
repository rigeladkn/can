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
						'<a class="dropdown-item" href="visionMissions.php">Vision et misions</a>'+
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
	
	<?php
      include('Controllers/getProjects.php');
      $resultProjects = getProjects("client");
    ?>
	
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
        <div class="row">
	  		<?php
			  	$i = 1;
			  	while($resPro = mysqli_fetch_assoc($resultProjects)){
					echo "<div class=\"col-md-4\">";
						echo "<div class=\"project\">";
							echo "<div class=\"img rounded mb-4\" style=\"background-image: url(assets/images/project-".$i.".jpg);\"></div>";
							echo "<div class=\"text w-100 text-center\">";
								echo "<span class=\"cat\">".utf8_encode($resPro["status"])."</span>";
								echo "<h3><a href=\"#\">".utf8_encode($resPro["financement"])."</a></h3>";
								echo "<p>".utf8_encode($resPro["description"])."</p>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				}
				$i = $i + 1;
			?>

			<!--
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(assets/images/project-1.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">En cours</span>
        				<h3><a href="#">Banque mondiale</a></h3>
        				<p>Projet de Nutrition et du Développement de la Petite Enfance (PNDPE)</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(assets/images/project-2.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">En cours</span>
        				<h3><a href="#">Pays du G8</a></h3>
        				<p>La Nouvelle Alliance pour la Sécurité alimentaire et la Nutrition (NASAN) soutenue par les pays du G8 au Bénin</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(assets/images/project-3.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">En cours</span>
        				<h3><a href="#">Union africaine</a></h3>
        				<p>L’Alliance Globale pour l’Initiative Résilience au Sahel et en Afrique de l’Ouest (AGIR) soutenue par l’Union Européenne et le CILSS;</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(assets/images/project-4.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">En cours</span>
        				<h3><a href="#">Banque mondiale</a></h3>
        				<p>Le Projet Multisectoriel de l‘Alimentation, de la Santé et de la Nutrition (PMASN) Un crédit IDA de 28 millions de dollars US,  entré en vigueur depuis le 8 avril 2014 et qui couvre la période 2014-2019 en financement du Projet Multisectoriel de l‘Alimentation, de la Santé et de la Nutrition (PMASN) ;</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(assets/images/project-6.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">Clôturé</span>
        				<h3><a href="#">Banque mondiale</a></h3>
        				<p>L’IDF, projet d’appui institutionnel financé par la Banque Mondiale pour un montant de 375 mille de dollars US et couvrant la période 2014-2016 ;</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(assets/images/image_4.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">Clôturé</span>
        				<h3><a href="#">Fonds Japonais (Banque mondiale)</a></h3>
        				<p>Le Projet pédagogique de Nutrition Communautaire (PNC)</p>
        			</div>
        		</div>
        	</div>
			-->
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
    
  </body>
</html>