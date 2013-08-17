<?php if ( function_exists('wp_tag_cloud') ) : ?>
  <aside id="orodor-tags">
  <h2>Tags</h2>
    <ul>
    <?php wp_tag_cloud('smallest=8&largest=14&number=45&orderby=name&format=flat'); ?>
    </ul>
  </aside>
<?php endif; ?>

