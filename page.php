<?php get_header(); ?>

<?php while( have_rows('sections')): the_row(); ?>
<?php $layout = get_row_layout(); ?>
<?php $layout_path = 'templates/flexible-content/' . $layout . '/' . $layout; ?>
<?php get_template_part($layout_path,'',$layout); ?>
<?php endwhile; ?>

<?php
get_footer();
