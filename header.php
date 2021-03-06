<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <meta name="description" content="">
	    <meta name="keywords" content="">
	    <meta name="author" content="">
	    <meta name="robots" content="">
	    <title>Betrayal the Martyrs</title>
	    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/img/logo-min.png" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/js/smooth_scrolling.js"></script>
		<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/js/video.js"></script>

	</head>
<body>


<nav class="navbar navbar-fixed-top">
	<div class="container-fluid">
	  <div class="navbar-header" id="navbarSmall">
                    <a href="#home" data-target="home"><img class="nav-logo" src="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/img/logo-min.png" alt="Betraying The Martyrs" /></a>
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
      </div>
	   <div class="navbar-collapse collapse" id="navbar">
	<?php $defaults = array(
		'theme_location' == '',
		'menu' == 'menu_general',
		'container' == '',
		'container_class' == "navbar navbar-default",
		'container_id' == '',
		'menu_class' == 'menu',
		'menu_id' == '',
		'echo' == true,
		'fallback_cb' == 'wp_page_menu',
		'before' == '',
		'after' == '',
		'link_before' == '',
		'link_after' == '',
		'items_wrap' == '<ul class="nav navbar-nav">%3$s</ul>',
		'depth' == '',
		'walker' == ''
		);
		wp_nav_menu($defaults);
	?>
	   </div>
	</div>
</nav>

<!--<nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header" id="navbarSmall">
                    <a href="#home" data-target="home"><img class="nav-logo" src="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/img/logo-min.png" alt="Betraying The Martyrs" /></a>
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#news" class="mon_scroll">News</a></li>
                        <li><a href="#bio_son" class="mon_scroll">Bio</a></li>
                        <li><a href="#">Calendrier</a></li>
                        <li class="logo-min"><h1><a href="" data-target="home"><img class="nav-logo" src="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/img/logo-min.png" alt="Betraying The Martyrs" /></a></h1></li>
                        <li><a href="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/clip.php">Clip</a></li>
                        <li><a href="#contact" class="mon_scroll">Contact</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/register.php">Espace Pro</a></li>
                    </ul>
                </div>
            </div>
        </nav> -->

				<div class="homepage-hero-module">

				    <div class="video-container">

				    	<div class="pattern"></div>

					        <div class="title-container">

							<!-- LOGO -->

					        </div>

					        <video autoplay loop class="fillWidth">
	                			<source src="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/BETRAYING.mp4" type="video/mp4">
	                		</video>

				    </div>

				</div>
