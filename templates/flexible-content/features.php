<?php if (have_rows('features')) : ?>
   <?php while (have_rows('features')) : the_row(); ?>
      <?php $layout = get_row_layout(); ?>
      <?php $layout_path = 'templates/flexible-content/features/' . $layout . '/' . $layout; ?>
      <?php get_template_part($layout_path, '', $layout); ?>
   <?php endwhile; ?>
<?php else : ?>
   <h1>Features</h1>
<?php endif; ?>