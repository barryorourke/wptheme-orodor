<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php
        global $page, $paged;

        wp_title( '|', true, 'right' );
        bloginfo( 'name' );

        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";

        if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'orodor' ), max( $paged, $page ) );

        ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/normalise.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/style.css" />
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
