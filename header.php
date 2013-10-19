<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css" />
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
  
  <div class="container">

    <header class="navbar navbar-default navbar" role="navigation"> 
      <div class="navbar-header pull-right"> 
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
          <span class="sr-only">Toggle navigation</span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </button> 
        <a class="navbar-brand" href="#"><?php bloginfo( 'name' ); ?></a>
      </div> 
      <div class="collapse navbar-collapse navbar-ex1-collapse"> 
      <?php
        wp_nav_menu( array(
          'menu' => 'top_menu',
          'depth' => 2,
          'container' => false,
          'menu_class' => 'nav navbar-nav',
          'walker' => new wp_bootstrap_navwalker())
        );
      ?>
      </div>
    </header>

    <div class="container mainpage">
      <div class="col-md-9">
