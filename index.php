<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CAN | Accueil</title>
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
  </head>

  <body>
	
  	<?php
      include('Controllers/getMissions.php');
      include('Controllers/getVisions.php');
      $resultMissions = getmissions("client");
      $resultVisions = getvisions("client");
      // var_dump($resultMissions);
    ?>

	<?php include('includes/navbar.php')?>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(assets/images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<span class="subheading">Conseil de l'Alimentation et de la Nutrition</span>
            <h1 class="mb-4">Nous sommes une équipe ardue au travail</h1>
            <p><a href="http://localhost/can/services.php" class="btn btn-primary px-4 py-3 mt-3">Services <span class="ion-ios-arrow-round-forward"></span></a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<span class="subheading">Structure gouvernementale</span>
            <h1 class="mb-4">Nous oeuvrons pour le bien des béninois</h1>
            <p><a href="http://localhost/can/services.php" class="btn btn-primary px-4 py-3 mt-3">Accéder <span class="ion-ios-arrow-round-forward"></span></a></p>
          </div>
        </div>
        </div>
      </div>
	
	
    </section>
	
	<section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
			<div class="container consult-wrap">
				<div class="row d-flex align-items-stretch">
					<div class="col-md-12 wrap-about ftco-animate py-md-5 pl-md-5">
						<div class="heading-section mb-4">
							<center>
								<h2>Bienvenue au Conseil de l'Alimentation et de la Nutrition</h2>
							</center>
						</div>
						<p>Nous sommes ravis de vous acceuilir sur notre site web officiel ! Vous y trouverez tout le nécessaire. <a href="contact.php">Contactez-nous </a> au besoin</p>
						<div class="tabulation-2 mt-4">
							<ul class="nav nav-pills nav-fill d-md-flex d-block">
							  <li class="nav-item">
							    <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Nos missions</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Notre vision</a>
							  </li>

							</ul>
							<div class="tab-content bg-light rounded mt-2">
							  <div class="tab-pane container p-0 active" id="home1">
                                  <p>
                                      <?php
                                        echo "<ul>";
                                          while($resMis = mysqli_fetch_assoc($resultMissions)){
                                            echo "<li>".utf8_encode($resMis["description"])."</li>";
                                          }
                                        echo "<ul>";
                                      ?>
                                  </p>
                              </div>
							  <div class="tab-pane container p-0 fade" id="home2">
                                  <p>
                                    <?php
                                      while($resVis = mysqli_fetch_assoc($resultVisions)){
                                        echo utf8_encode($resVis["description"])."<br>";
                                      }
                                    ?>
                                  </p>
							  </div>
							</div>
						</div>
    			<center>
				<div class="row mt-5">
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="2006">0</strong>
								<span>Nombre de ...</span>
							</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="310">0</strong>
								<span>Success Reports</span>
							</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="35">0</strong>
								<span>Experienced</span>
							</div>
							</div>
						</div>
	          		</div>
				
				</center>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
			<div class="container">
				<div class="row justify-content-center">
			<div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
				<h2 class="mb-0">Replacer la nutrition au cœur  du développement </h2>
			</div>
			</div>	
			</div>
       </section>	
		 
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
					<div class="col-md-8 text-center heading-section ftco-animate">
							<!-- <span class="subheading">Blog Posts</span> -->
							<h2 class="mb-4">Actualités récentes</h2>
							<p>Nous menons des activités de part le Bénin. Découvrez les activités récentes du CAN.</p>
					</div>
          </div> 
			<div class="row">
			<?php 
          include_once('Controllers/getActualites.php');
			  $resultActualites = getActualites('client');
			  $i = 0;
              // var_dump($resultMembres);
              while($resAct = mysqli_fetch_assoc($resultActualites) and $i <3){
                echo "<div class=\"col-md-6 col-lg-4 ftco-animate\">";
                  echo "<div class=\"blog-entry\">";
                    echo "<a href=\"blog-single.php\" class=\"block-20 d-flex align-items-end\" style=\"background-image: url('assets/images/image_2.jpg');\">";
                      echo "<div class=\"meta-date text-center p-2\">";
                        echo "<span class=\"mos\">".$resAct["Ladate"]."</span>";
                      echo "</div>";
                    echo "</a>";
                    echo "<div class=\"text border border-top-0 p-4\">";
                      echo "<h3 class=\"heading\"><a href=\"#\">".$resAct["title"]."</a></h3>";
                      echo "<p>".$resAct["description"]."</p>";
                      echo "<div class=\"d-flex align-items-center mt-4\">";
                        echo "<p class=\"ml-auto mb-0\">";
                        
                        echo "</p>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
				echo "</div>";
				$i++;
          }
        ?>
			</div>
		 
          
        </div>
		<center>
			<p class="mb-0"><a href="actualites.php" class="btn btn-primary">Voir plus .. <span class="ion-ios-arrow-round-forward"></span></a></p>
		</center>

		</div>
		</section>
   
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
			<div class="container">
				<div class="row justify-content-center">
			<div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
				<h2 class="mb-0">Replacer la nutrition au cœur  du développement </h2>
			</div>
			</div>	
			</div>
       </section>

    <section class="ftco-section testimony-section">
      <div class="container-fluid px-md-5">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<!-- <span class="subheading">Testimonies</span> -->
            <h2 class="mb-4">Nos partenaires</h2>
            <p>Ils nous ont fait confiance et nous soutiennent dans nos efforts ! Merci à eux</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">

				<?php 
					include_once('Controllers/getPartenaires.php');
							
						$resultPartenaires = getPartenaires('client');
						// var_dump($resultMembres);
						while($resPar = mysqli_fetch_assoc($resultPartenaires)){
							echo "<div class=\"  \">";
							echo "<center>";
									echo "<div class=\"testimony-wrap\" style=\"background:none;\">";
										echo "<div class=\"user-img\" style=\"background-image: url(assets/images/person_1.jpg);height:200px;width:200px\">";
										echo "</div>";
										echo "<div class=\"text py-1\">";
											echo "<p>".$resPar["nom"]."</p>";
									
										echo "</div>";
									 
									echo "</div>";
							echo "</center>";
					        echo "</div>";
					
					  }
				?>
             
		 
        
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

		


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