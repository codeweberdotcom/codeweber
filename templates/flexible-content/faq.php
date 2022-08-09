<?php if (have_rows('faq')) : ?>
   <?php while (have_rows('faq')) : the_row(); ?>
      <?php $layout = get_row_layout(); ?>
      <?php $layout_path = 'templates/flexible-content/faq/' . $layout . '/' . $layout; ?>
      <?php get_template_part($layout_path, '', $layout); ?>
   <?php endwhile; ?>
<?php else : ?>
   <h1>Faq</h1>
<?php endif; ?>