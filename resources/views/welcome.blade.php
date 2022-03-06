<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONGFONG</title>
	<meta name="description" content="A photography-inspired website layout with an expanding stack slider and a background image tilt effect" />
	<meta name="keywords" content="photography, template, layout, effect, expand, image stack, animation, flickity, tilt" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/flickity.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container">
		<div class="hero">
			<div class="hero__back hero__back--static"></div>
			<div class="hero__back hero__back--mover"></div>
			<div class="hero__front"></div>
		</div>
		<header class="codrops-header">
	
			<h1 class="codrops-title">NATAPORN SAKUNKAEW <span>ONGFONG</span></h1>
			<nav class="menu">
				<a class="menu__item menu__item--current" href="#"><span>Work</span></a>
			</nav>
		</header>
		<div class="stack-slider">
			<div class="stacks-wrapper">
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Activity"><span>Activity</span></a></h2>
	
					<div class="item">
							
							<h3 class="item__title">Symbol of engineering <span class="item__date">11/12/2000</span></h3>
							<h3></h3>
						

					<a href="posts" method="POST" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">MY ACTIVITY</a>


					</div>
					
					
				</div>
						
			</div>
			<!-- /stacks-wrapper -->
		</div>
		<!-- /stacks -->
		<img class="loader" src="img/three-dots.svg" width="60" alt="Loader image" />
	</div>
	<!-- /container -->
	<!-- Flickity v1.0.0 http://flickity.metafizzy.co/ -->
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/main.js"></script>
</body>
</html>