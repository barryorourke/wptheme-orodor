<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'orodor' ), max( $paged, $page ) );

        ?></title>
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
    <header>
      <nav id="menu">
        <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
      </nav>
      <h1><?php bloginfo( 'name' ); ?></h1>
    </header>
    <div id="content-wrapper">
      <div id="content-area-wrapper">
        <div id="content-area">
