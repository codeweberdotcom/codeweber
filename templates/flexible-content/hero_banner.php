<?php if (have_rows('hero_banner')) : ?>
   <?php while (have_rows('hero_banner')) : the_row(); ?>
      <?php $layout = get_row_layout(); ?>
      <?php $layout_path = 'templates/flexible-content/hero-banner/' . $layout . '/' . $layout; ?>
      <?php get_template_part($layout_path, '', $layout); ?>
   <?php endwhile; ?>
<?php else : ?>
   <h1>Hero banner</h1>
<?php endif; ?>