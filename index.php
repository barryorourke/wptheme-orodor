<?php get_header(); ?>

       <?php if ( ! have_posts() ) : ?>

        <?php get_template_part( 'search' ); ?> 

       <?php else : ?>

         <?php while ( have_posts() ) : the_post(); ?>
           <?php get_template_part( 'content', get_post_format() ); ?>
	 <?php endwhile; ?>

         <nav id="pager"><?php echo orodor_pager(); ?></nav>

       <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
