<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		
		<title><?php echo get_bloginfo('name') ?></title>

		<?php get_template_part('_includes/iOS', 'icons') ?>
		<?php wp_head(); ?>
		<style>

		h1{
			font-size: 5em;
			color: #fff;
			letter-spacing: .05em;
			text-shadow: 2px 2px 5px #111145;
			width: 500px;
			margin: 0 auto;
			line-height: 1em;
		}

		.section{
			text-align:center;
			overflow: hidden;
		}

		#myVideo{
			position: absolute;
			right: 0;
			bottom: 0;
			top:0;
			right:0;
			width: 100%;
			height: 100%;
			background-size: 100% 100%;
	 		background-color: #111145;
	  		background-image: /* our video */;
	  		background-position: center center;
	  		background-size: contain;
	   		object-fit: cover;
	   		z-index:3;
		}

		#section0 .layer{
			position: absolute;
			z-index: 4;
			width: 100%;
			left: 0;
			top: 43%;
			-webkit-transform: translate3d(0,0,0);
			-ms-transform: translate3d(0,0,0);
			transform: translate3d(0,0,0);
		}

		#section0{
			overflow: hidden;
		}

		#section0 .layer svg {
			width: 40px;
			fill: #fff;
			margin-top: 60px;
			-webkit-filter: drop-shadow( 2px 2px 5px #111145 );
			filter: drop-shadow( 2px 2px 5px #111145 );
		}

		video::-webkit-media-controls {
			display:none !important;
		}

		#fp-nav ul li a span, .fp-slidesNav ul li a span { 
			background: #fff; 
			box-shadow: 2px 2px 5px #111145;
		}

		.fp-slidesNav.fp-bottom {
			bottom: 50px;
		}

		.slide{
			position: relative;
		}

		.fp-controlArrow.fp-next, .fp-controlArrow.fp-prev {
			border-color: transparent;
		}

		.slide h2 {
			z-index: 2;
			position: relative;
		}

		.slide img {
			width:100%; 
			position: absolute; 
			margin: auto;
			top: 0; 
			left: 0;
			bottom: 0;
			right: 0;
		}

		</style>
	</head>
	<body>