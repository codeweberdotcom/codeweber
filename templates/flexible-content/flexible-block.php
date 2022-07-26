<?php if (have_rows('sections')) : ?>

   <?php while (have_rows('sections')) : the_row(); ?>
      <?php $layout = get_row_layout(); ?>
      <?php $layout_path = 'templates/flexible-content/hero-banner/' . $layout . '/' . $layout; ?>
      <?php get_template_part($layout_path, '', $layout); ?>
   <?php endwhile; ?>

<?php else : ?>

   <h1>Flexible block</h1>
<?php endif; ?>