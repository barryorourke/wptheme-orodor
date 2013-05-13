<div post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'orodor' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <div class="submitted"></div>
            <div class="post-body">
              <?php the_content(); ?>
            </div>
            <div class="post-end">
              <div class="tags"></div>
              <div class="links">&nbsp;</div>
            </div>
          </div>
