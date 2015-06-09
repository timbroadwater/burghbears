<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	
	<!-- Meta Information -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="keywords" content="Pittsburgh, The Burgh Bears, BurghBears, Pennsylvania, Cubs, Cubz, Woof, Bears After Dark, B.A.D., BAD, social group, member">
	<meta name="description" content="The Burgh Bears are a non-profit social group that host recreational activities for its members as well as charitable fund-raising for the local community.">
	<meta name="author" content="Tim Broadwater">
	<meta http-equiv="cleartype" content="on">
	<link rel="shortcut icon" href="favicon.ico">	  
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/mpopup.css" />
	
	<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/javascript/scripts.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/javascript/jquery.magnific-popup.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/javascript/gallery.js"></script>
	
	<!-- External CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
	
	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
	<header class="theader" role="banner">
	  <div class="hwrap">
		<div class="header-logo">
		  <a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="The Burgh Bears"/></a>
		</div>
		<i id="toggle" class="fa fa-bars"></i>
		<?php wp_nav_menu( array( 'container_class' => 'header-menu' ) ); ?>
	  </div>
	</header>
	<div class="container">