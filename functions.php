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

  /* how many pages are there */
  $total_pages = $wp_query->max_num_pages;

  /* only show the pager if there are enough pages */
  if ($total_pages > 1){

    /* get the current page */
    $current_page = max(1, get_query_var('paged'));

    /* return the pager */
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

?>
