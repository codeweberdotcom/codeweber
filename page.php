<?php get_header(); ?>
<?php
while (have_posts()) :
   the_post();
   if (!is_front_page()) :
      get_template_part('templates/sections/common', 'pageheader');
   endif;
   if (is_cart() || is_checkout()) :
      get_template_part('templates/content/cart', '');
   else :
      get_template_part('templates/content/page', '');
   endif;
?>
<?php endwhile ?>
<?php get_footer();
