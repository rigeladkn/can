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

  <body  onLoad="changeActivePage()" >

    <?php
      include_once("Controllers/getProjects.php");
      $resultProject = getProject("client", $_GET["id"]);
      while($resPro = mysqli_fetch_assoc($resultProject)){
        $id = $resPro["id"];
        $status = $resPro["status"];
        $financement = $resPro["financement"];
        $description = $resPro["description"];
      }
    ?>
    
    <?php include('includes/navbar.php')?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Nos projets</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="project.php">Projets <i class="ion-ios-arrow-forward"></i></a></span> <span> <?php echo "Projet de : ".$financement; ?> <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
        <center><h2 class="mb-3"><?php echo "#".$id." Financement : ".$financement; ?></h2></center>
				<div class="row">
          <div class="col-lg-5 ftco-animate">
            <p>
              <?php echo "<img src=\"assets/images/project-".$id.".jpg\" alt=\"\" class=\"img-fluid\">" ?>
            </p>
            <?php
            if(utf8_encode($status) == "En cours")
              $color_status = 'red';
            else
              $color_status = '#28f745';
            echo "<center><span style=\"color:".$color_status."; font-weight:bold\">".utf8_encode($status)."</span></center>"; ?>

          </div> <!-- .col-md-4 -->

          <div class="col-lg-7 sidebar ftco-animate text-justify">
            <p><?php echo utf8_encode($description); ?></p>
            <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
            <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
            <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
            <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
            <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
          
          </div> <!-- .col-md-8 -->



            <!--
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="assets/images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>George Washington</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>


            <div class="pt-5 mt-5">
              <h3 class="mb-5 h4 font-weight-bold">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="assets/images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-2">Oct. 15, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="assets/images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-2">Oct. 15, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="assets/images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta mb-2">Oct. 15, 2019 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="assets/images/person_1.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta mb-2">Oct. 15, 2019 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="assets/images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>John Doe</h3>
                                  <div class="meta mb-2">Oct. 15, 2019 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="assets/images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-2">Oct. 15, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
              </ul> -->
              <!-- END comment-list -->
              
              <!--
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 font-weight-bold">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>
          </div> --> <!-- .col-md-8 -->

          <!--
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3>Category</h3>
              <ul class="categories">
                <li><a href="#">Business <span>(6)</span></a></li>
                <li><a href="#">Finance <span>(8)</span></a></li>
                <li><a href="#">Auto loan <span>(2)</span></a></li>
                <li><a href="#">Real Estate <span>(2)</span></a></li>
                <li><a href="#">Businessman <span>(2)</span></a></li>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Popular Articles</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(assets/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(assets/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(assets/images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <ul class="tagcloud m-0 p-0">
                <a href="#" class="tag-cloud-link">School</a>
                <a href="#" class="tag-cloud-link">Kids</a>
                <a href="#" class="tag-cloud-link">Nursery</a>
                <a href="#" class="tag-cloud-link">Daycare</a>
                <a href="#" class="tag-cloud-link">Care</a>
                <a href="#" class="tag-cloud-link">Kindergarten</a>
                <a href="#" class="tag-cloud-link">Teacher</a>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
            	<h3>Archives</h3>
              <ul class="categories">
              	<li><a href="#">December 2018 <span>(30)</span></a></li>
              	<li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                <li><a href="#">September 2018 <span>(6)</span></a></li>
                <li><a href="#">August 2018 <span>(8)</span></a></li>
              </ul>
            </div>


            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div> --> <!-- END COL -->
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