<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/normalise.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster" />
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="page-wrapper">
    <header id="page">
      <?php wp_nav_menu( array( 'container' => 'nav', 'container_id' => 'menu' ) ); ?>

      <h1><?php bloginfo( 'name' ); ?></h1>
    </header>
    <div id="content-wrapper">
      <div id="content-area-wrapper">
        <div id="content-area">
