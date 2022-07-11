<?php
    include './controller/auth.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Web-site english</title>
    <!-- Metae -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 landing page template for developers and startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Global CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"></link>
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/respuestas.css">
    
    
    
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Global CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
   
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">       
            <h1 class="logo">
                <a  href="#hero">
                    <!--Icono y nombre que podemos poner-->
                    <span class="logo-icon-wrapper"><img class="logo-icon" src="images/English.png" alt="icon"></span>
                    <span class="text"><span class="highlight">Web-site</span> English</span></a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-expand-md float-right navbar-inverse" role="navigation">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a  href="#about" class="text-dark">Flagship I</a></li>
                        <li></li>
                        <!-- <li class="nav-item"><a  href="#about2" class="text-dark">Flagship II</a></li> -->
                        <li><form action="controller/logout.php" method="post"><button type="submit" class="btn btn-dark btn-link text-light btn-logut nav-item"><i class="fa-solid fa-right-from-bracket"></i></button></form></li>
                        
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->
    
    <div id="hero" class="hero-section">
        
        <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-ride="carousel" data-interval="10000">
            
            <div class="figure-holder-wrapper">
        		<div class="container">
            		<div class="row justify-content-end">
                		<div class="figure-holder">
                	        <!--<img class="figure-image img-fluid" src="assets/images/imac.png" alt="image" />-->
                        </div><!--//figure-holder-->
            		</div><!--//row-->
        		</div><!--//container-->
    		</div><!--//figure-holder-wrapper-->
            
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#hero-carousel"></li>
				<li data-slide-to="1" data-target="#hero-carousel"></li>
				<li data-slide-to="2" data-target="#hero-carousel"></li>
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
    			
				<div class="carousel-item item-1 active">
					<div class="item-content container">
    					<div class="item-content-inner">
    				        <!--En esta parte se puede escribir en los carruseles-->
				            <h2 class="heading"><br class="d-none d-md-block"></h2>
				            <p class="intro"  ></p>
				            
    				        
    					</div><!--//item-content-inner-->
					</div><!--//item-content-->
				</div><!--//item-->
				
				<div class="carousel-item item-2">
					<div class="item-content container">
						<div class="item-content-inner">
    				        
				            <h2 class="heading"></h2>
				            <p class="intro"></p>
				           
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
				
				<div class="carousel-item item-3">
					<div class="item-content container">
						<div class="item-content-inner">
    				        
				            <h2 class="heading"></h2>
				            <p class="intro"></p>
				            
<!--Aca termina donde puedo editar lo del carrusel-->
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
			</div><!--//carousel-inner-->

		</div><!--//carousel-->
    </div><!--//hero-->
    <div class="container">
        <div class="row">
            <div >
                <h3 class="center">Welcome <?php echo $_SESSION['usuario']; ?>!</h3>
            </div>
        </div>
    </div>
    <div id="about" class="about-section">
        <div class="container text-center">
            <h2 class="section-title">Flagship 1</h2>
            <p class="intro">En esta seccion podras reforzar tus conocimientos aprendidos durante las clases del libro flagship 1</p>
            <ul class="technologies list-inline">
               <!--<li class="list-inline-item"><img src="assets/images/logo-html5.svg" alt="HTML5"></li>
                <li class="list-inline-item"><img src="assets/images/logo-css3.svg" alt="CSS3"></li>
                <li class="list-inline-item"><img src="assets/images/logo-bootstrap.svg" alt="Bootstrap"></li>
                <li class="list-inline-item"><img src="assets/images/logo-sass.svg" alt="Sass"></li>
                <li class="list-inline-item"><img src="assets/images/logo-jquery.svg" alt="jQuery"></li>-->
            </ul>
            <!--Direccionamiento de la pagina -->
            <div class="items-wrapper row">
                <div class="item col-md-4 col-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="images/figure-1.png" alt="image">
                            
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Unit 1 </h3>
                        <div class="item-desc mb-3">
                            Names and occupations 
                        </div><!--//item-desc-->
                        <a class="btn btn-primary" href="occupations.php?unidad=1" target="">Iniciar</a>
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-4 col-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="images/img2.jpg" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Unit 2</h3>
                        <div class="item-desc mb-3">
                            About People </div><!--//item-desc-->
                            <a class="btn btn-primary" href="relationship.php?unidad=2" target="">Iniciar</a>
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-4 col-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="images/figure-3.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Unit 3</h3>
                        <div class="item-desc mb-3">
                            Places and How to get there</div><!--//item-desc-->
                            <a class="btn btn-primary" href="places.php?unidad=3" target="">Iniciar</a>
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-4 col-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="images/happy-family-silhouette-sunset_1303-22466.webp" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Unit 4</h3>
                        <div class="item-desc mb-3">
                            Family</div><!--//item-desc-->
                       <a class="btn btn-primary" href="family.php?unidad=4" target="">Iniciar</a>
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//items-wrapper-->
        </div><!--//container-->
    </div><!--//about-section-->




    <!-- Javascript -->          
    <script type="text/javascript" src="plugins/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>     
    <script type="text/javascript" src="js/main.js"></script> 
       
</body>
</html> 

