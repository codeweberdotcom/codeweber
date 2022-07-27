<?php if (have_rows('facts')) : ?>
   <?php while (have_rows('facts')) : the_row(); ?>
      <?php $layout = get_row_layout(); ?>
      <?php $layout_path = 'templates/flexible-content/facts/' . $layout . '/' . $layout; ?>
      <?php get_template_part($layout_path, '', $layout); ?>
   <?php endwhile; ?>
<?php else : ?>
   <h1>Facts</h1>
<?php endif; ?>