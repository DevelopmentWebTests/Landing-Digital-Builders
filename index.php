<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Landing Demo</title>
		<link rel="stylesheet" href="css/bootstrap.min.css?ver=<?php echo filemtime("css/bootstrap.min.css"); ?>">
		<link rel="stylesheet" href="css/style.css?ver=<?php echo filemtime("css/style.css"); ?>">
		<link rel="stylesheet" href="css/animate.min.css?ver=<?php echo filemtime("css/animate.min.css"); ?>">
		<link rel="stylesheet" href="css/mediaelementplayer.css?ver=<?php echo filemtime("css/mediaelementplayer.css"); ?>">
		<link rel="stylesheet" href="css/jquery-ui.min.css?ver=<?php echo filemtime("css/jquery-ui.min.css"); ?>">
	</head>
  	<body>
  		<header id="main-hader">
  			<nav class="navbar navbar-expand-lg p-0">
			  	<div class="container-fluid no_padding">
				    <a class="navbar-brand p-0 m-0" href="/paginas-web/Landing-Digital-Builders/">
				    	<figure>
				    		<img id="logo_header" src="images/logo.png" class="img-fluid" alt="Logo" title="Logo">
				    	</figure>
				    </a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				      	<span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarNav">
				      	<ul class="navbar-nav">
					        <li class="nav-item">
					          	<a class="nav-link" href="#">Quiénes Somos</a>
					        </li>
					        <li class="nav-item">
					          	<a class="nav-link" href="#">MSI_ Platform</a>
					        </li>
					        <li class="nav-item">
					          	<a class="nav-link" href="#">Contacto</a>
					        </li>
				     	</ul>
			    	</div>
				</div>
			</nav>
  		</header>
  		<section id="content_1" class="section_home">
	  		<div class="container-fluid p-0">
	  			<video class="video-player" muted autoplay preload="none" style="width: 100%;height: 100%;">
		        	<source src="videos/video-slider.mp4" type="video/mp4"/>
		    	</video>
		    	<audio  class="video-player" controls>
                    <source src="https://www.bluegrassimport.es/wp-admin/audios/secuencia_uno/0.mp3" type="audio/mp3">
                </audio>
	  		</div>
		</section>
		<section id="content_2" class="section_home bw">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="content_info d-flex flex-column text-start justify-content-center">
							<figure>
		  						<img id="logo_content_2" src="images/logo.png" class="img-fluid d-inline-block wow animate__animated animate__fadeIn animate__slow" alt="Logo" title="Logo">
		  					</figure>
			   				<header class="header_section tb">
			   					<h2>
			   						<span class="d-inline-block wow animate__animated animate__fadeInUp" data-wow-duration="600ms" data-wow-delay="200ms">Hacemos</span>
				  					<span class="d-block">
				  						<span class="d-inline-block wow animate__animated animate__fadeInUp" data-wow-duration="600ms" data-wow-delay="310ms" >que</span>
				  						<span class="d-inline-block wow animate__animated animate__fadeInUp" data-wow-duration="600ms" data-wow-delay="420ms" >ocurra.</span>
				  					</span>
			   					</h2>
			   				</header>
						</div>
					</div>
				</div>
			</div>
		</section>		
		<section id="content_10" class="section_home">
			<div class="position-relative">
				<div class="bg_video position-absolute top-0 start-0 w-100 h-100"></div>
				<div class="position-absolute top-50 start-50 translate-middle w-100">
					<div class="container-fluid p-0">		
			  			<video class="video-player" width="100%" height="100%" muted autoplay loop preload="none">
				        	<source src="videos/video-bg-msi.mp4" type="video/mp4"/>
				    	</video>
		  			</div>
		  		</div>
		  		<div class="container">			
		   	 		<div class="row">
						<div class="col-12">
							<div class="content_info d-flex flex-column text-start justify-content-center">
								<figure>
		  							<img src="images/logo-blanco.png" class="img-fluid wow animate__animated animate__fadeIn animate__slow" alt="Logo" title="Logo">
		  						</figure>
				   				<header class="header_section tw">
				   					<h2>
				   						<span class="d-inline-block wow animate__animated animate__fadeInUp" data-wow-duration="600ms" data-wow-delay="200ms" >Hacemos</span>
					  					<span class="d-block">
					  						<span class="d-inline-block wow animate__animated animate__fadeInUp" data-wow-duration="600ms" data-wow-delay="310ms">que</span>
					  						<span class="d-inline-block wow animate__animated animate__fadeInUp" data-wow-duration="600ms" data-wow-delay="420ms">ocurra.</span>
					  					</span>
				   					</h2>
				   				</header>
				   				<div class="entry_content">
				   					<p>¿Quieres saber más sobre MSI?</p>
				   				</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
  		</section>
  		<section id="content_11" class="section_home bw">
  			<div class="position-relative">
  				<div class="bg_form position-absolute bottom-0 start-0 w-100 h-50"></div>  				
		        <div class="container">
		            <div class="row">
		                <div class="col-12 col-lg-5 p-0 mx-auto">
		                    <?php include_once("form/form.php");?>
		                </div>
		            </div>
		        </div>
	        </div>
	    </section>
  		<section id="content_12" class="section_home">
  			<div class="container-fluid">
  				<div class="row">
  					<div class="col-12 col-md-4">
  						<figure>
		  					<img src="images/logo-blanco.png" class="img-fluid mx-auto d-block" alt="Logo" title="Logo">
		  				</figure>
  					</div>
  					<div class="col-12 col-md-4">
  						<div class="item_footer">
  							<h5>
  								<span>Headquarters</span>
  							</h5>
  							<ul class="nav flex-column fw-light">
					          	<li class="nav-item">
					          		<span>C/ Comte de Salvatierra 10, ppal.</span>
					          	</li>
					          	<li class="nav-item">
					          		<span>08006 - Barcelona</span>
					          	</li>
					          	<li class="nav-item">
					          		<a href="tel:935276287" tagert="_blank"><span>935 27 62 87</span></a>
					          	</li>
					          	<li class="nav-item">
					          		<a href="mailto:info@msistudio.com" tagert="_blank"><span>info@msistudio.com</span></a>
					          	</li>
					        </ul>
  						</div>
  					</div>
  					<div class="col-12 col-md-4">
  						<div class="item_footer">
  							<h5>
  								<span>Centralita</span>
  							</h5>
  							<ul class="nav flex-column fw-light">
					          	<li class="nav-item">
					          		<span>Àlex Eseverri (Barcelona): 620 18 61 86</span>
					          	</li>
					          	<li class="nav-item">
					          		<span>Luis Iglesias (Madrid): 692 69 14 02</span>
					          	</li>
					        </ul>
  						</div>
  					</div>
  				</div>
  			</div>
  		</section>
  		<footer id="content_footer">
  			<div class="container">
  				<div class="col-12">
  					<p class="text-center text-md-start m-0">© 2022 DEV-MSI. All rights reserved</p>
  				</div>
  			</div>
  		</footer>
	  	<script src="js/jquery.min.js?ver=<?php echo filemtime("js/jquery.min.js"); ?>"></script>
	  	<script src="js/jquery-ui.min.js?ver=<?php echo filemtime("js/jquery-ui.min.js"); ?>"></script>
	  	<script src="js/bootstrap.min.js?ver=<?php echo filemtime("js/bootstrap.min.js"); ?>"></script>
	  	<script src="js/wow.min.js?ver=<?php echo filemtime("js/wow.min.js"); ?>"></script>	  	
		<script src="js/mediaelement-and-player.min.js?ver=<?php echo filemtime("js/mediaelement-and-player.min.js"); ?>"></script>
		<script src="js/jquery.validate.min.js?ver=<?php echo filemtime("js/jquery.validate.min.js"); ?>"></script>
		<script src="js/script.js?ver=<?php echo filemtime("js/script.js"); ?>"></script>
		<script src="js/form.js?ver=<?php echo filemtime("js/form.js"); ?>"></script>
  	</body>
</html>