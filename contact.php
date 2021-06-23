<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CAN | Contact</title>
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
	        	
	        	'<li class="nav-item"><a href="project.php" id="team" class="nav-link">Projets</a></li>'+
	        	'<li class="nav-item"><a href="actualites.php" id="studies" class="nav-link">Actualités</a></li>'+
	        	'<li class="nav-item" ><a href="services.php" onclick="" class="nav-link">Services</a></li>'+
	          '<li class="nav-item active"><a href="contact.php" id="contact" class="nav-link">Contact</a></li>'+
	        '</ul>';
	  }
  </script>
	
  </head>
  <body  onLoad="changeActivePage()">
    
    <?php include('includes/navbar.php')?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Nous contacter</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-10">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Adresse :</span>Cotonou, premier carrefour à gauche avant l'étoile rouge en quittant le stade M.K BENIN </p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-tablet"></span>
			          	</div>
			            <p><span>Téléphone : </span> <a href="tel://67673524">+229 21 32 13 98 / 67 67 35 24</a></p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:contact@can-benin.bj">contact@can-benin.bj</a></p>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-10 mb-md-5">
          	<h2 class="text-center">Avez-vous des questions ? <br> N'hésitez pas à nous laisser un message.</h2>
            <form action="Controllers/sendmessage.php" class="border p-5 contact-form" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Entrez votre email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name ="sujet" placeholder="Sujet / Objet">
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" name ="texte" placeholder="Message"></textarea>
              </div>
              <center>
              <div class="form-group">
                <input type="submit" value="Envoyer le message" class="btn btn-primary btn-sm py-3 px-5">
              </div>
              </center>
            </form>
          
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container-fluid px-0">
    		<div class="row justify-content-center">
        	<div class="col-md-12">
        		<div id="map" class="bg-white"></div>
        	</div>
        </div>
    	</div>
    </section> -->
		
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