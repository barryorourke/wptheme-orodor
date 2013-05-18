<?php get_header(); ?>

  <?php if (have_posts()): ?>

    <header><h2>Search Results for '<?php the_search_query(); ?>'</h2></header>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'search' ); ?>
    <?php endwhile; ?>

  <?php else: ?>

    <header><h2>Nothing found...</h2></header>
    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
