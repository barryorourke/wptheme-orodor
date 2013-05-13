<?php get_header(); ?>

<?php if (have_posts()): ?>
  
<h2>Search Results for '<?php the_search_query(); ?>'</h2>

  <?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', 'search' ); ?>
  <?php endwhile; ?>

<?php else: ?>
<h2>Nothing found...</h2>
<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
<?php get_search_form(); ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
