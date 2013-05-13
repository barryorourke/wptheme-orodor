	  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'orodor' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <span class="submitted"><?php the_date('l, F j, Y'); ?></div>
            <div class="post-body">
            <?php the_content(); ?>
            </div>
            <div id="post-end">
              <div class="tags">Posted in: <?php the_category(', '); ?> Tagged: <?php the_tags( '', ', '); ?></div>
              <div class="links">
              <?php comments_popup_link( 'Leave a comment', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?>
              </div>
            </div>
          </article>
