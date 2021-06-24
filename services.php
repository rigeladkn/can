<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CAN | Services</title>
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
					'<li class="nav-item active" ><a href="services.php" onclick="" class="nav-link">Services</a></li>'+
				'<li class="nav-item"><a href="contact.php" id="contact" class="nav-link">Contact</a></li>'+
				'</ul>';
	  }
  </script>
	
  </head>
  
  <body  onLoad="changeActivePage()" >

  	<?php
      include('Controllers/getServices.php');
      $resultServices = getServices("client");
	  $rServices = [];
	  while($ligne = mysqli_fetch_assoc($resultServices)){
		  array_push($rServices, $resultServices);
	  }
    ?>
	  
	<?php include('includes/navbar.php')?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Services</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Pourquoi nous choisir ?</h2>
            <p>Le Conseil de l'Alimentation et de la Nutrition vous offre de multiples services grâce à ses programmes diverses. Découvrez ici nos services. </p>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
							<?php
								for($i = 1; $i <= sizeof($rServices); $i++){
									echo "<li class=\"nav-item text-left\" onClick=\"removeHidden(".$i.")\">";
										echo "<a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-".$i."\"><span class=\"flaticon-analysis mr-2\" ></span>Service ".$i."</a>";
									echo "</li>";
								 
								}
								
							?>
					 
						</ul>
					</div>
					<?php 
					echo "<div class=\"col-md-8\">";
					
					  echo "<div class=\"tab-content\">";
						
							// include('Controllers/getServices.php');
      						$resultServices = getServices("client");
						 $numero = 1;
							
                          while($resServ = mysqli_fetch_assoc($resultServices)){
							if($numero == 1){
								echo "<div class=\"tab-pane container p-0 active\" id=\"services-".$numero."\" >";
									echo "<div class=\"img\" style=\"background-image: url(assets/images/project-".$numero.".jpg);\"></div>";
										echo "<h3><a href=\"#\">".$resServ["title"]."</a></h3>";
										echo "<p>".$resServ["description"]."</p>";
							    echo "</div>";
							    $numero++;
							}
							else{
								echo "<div class=\"tab-pane container p-0 \" id=\"services-".$numero."\" hidden>";
										echo "<div class=\"img\" style=\"background-image: url(assets/images/project-".$numero.".jpg);\"></div>";
											echo "<h3><a href=\"#\">".$resServ["title"]."</a></h3>";
											echo "<p>".$resServ["description"]."</p>";
								echo "</div>";
								$numero++;
							}
							
						    }
							
			 
						echo "</div>";
						
					echo "</div>";
					?>
				</div>
    	</div>
	</section>
	

    <section class="ftco-section">
			<div class="container">
			 
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

  <script>
	  function removeHidden(num){
		  elem = document.getElementById("services-"+num).hidden = false;
		//   alert(document.getElementById("services-"+num).hidden);
	  }
  </script>
 

  </body>
</html>