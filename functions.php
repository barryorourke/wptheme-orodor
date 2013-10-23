<?php

/* add theme support for menus */
add_theme_support( 'menus' );

/* register the sidebar */
register_sidebar(array(
  'name' => 'Primary Widget Area',
  'id' => 'primary_widget_area',
  'before_widget' => '<aside id="%1$s">',
  'after_widget' => "</aside>",
  'before_title' => '<h2>',
  'after_title' => '</h2>'));

/* custom pager function */
function orodor_pager() {
  global $wp_query;

  $total_pages = $wp_query->max_num_pages;
  if ($total_pages > 1){
    $current_page = max(1, get_query_var('paged'));
    return paginate_links(array(
          'base' => get_pagenum_link(1) . '%_%',
          'format' => 'page/%#%',
          'current' => $current_page,
          'total' => $total_pages,
          'type' => 'list',
          'prev_text' => 'Prev',
          'next_text' => 'Next'));
  }
}

/* Filters the_category() to output html 5 valid rel tag */
function html_validate( $text ) {
  $string = 'rel="tag"';
  $replace = 'rel="category tag"';
  $text = str_replace( $replace, $string, $text );
  return $text;
}
add_filter( 'the_category', 'html_validate' );
?>
