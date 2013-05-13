<?php

add_theme_support( 'menus' );

register_sidebar( array (
  'name' => 'Primary Widget Area',
  'id' => 'primary_widget_area',
  'before_widget' => '<div id="%1$s" class="block">',
  'after_widget' => "</div>",
  'before_title' => '<h2>',
  'after_title' => '</h2>',
) );


?>
