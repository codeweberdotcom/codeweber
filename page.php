<?php get_header(); ?>

<?php
while (have_posts()) :
   the_post();
   if (!is_front_page()) :
      get_template_part('templates/sections/common', 'pageheader');
   endif;
   get_template_part('templates/content/page', ''); ?>

<?php endwhile ?>
<?php get_footer();
