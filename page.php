<?php get_header(); ?>

<?php
while (have_posts()) :
   the_post();
   if (!is_front_page() && get_field('pageheader') && get_field('pageheader') !== 'disable') :
      if (get_theme_mod('codeweber_page_header') == 'type_1') :
         get_template_part('templates/sections/common', 'breadcrumb');
      endif;
   endif;
   if (!is_front_page() && get_field('pageheader') && get_field('pageheader') !== 'disable') :
      if (get_theme_mod('codeweber_page_header') == 'type_2') :
         get_template_part('templates/sections/common', 'pageheader');
      elseif (get_theme_mod('codeweber_page_header') == 'type_3') :
         get_template_part('templates/sections/common', 'pageheader_1');
      endif;
   endif;


   if (is_shop() || is_product_tag() || is_product_category()) :
      get_template_part('templates/content/shop', '');
   elseif (is_cart()) :
      get_template_part('templates/content/cart', '');
   elseif (is_checkout()) :
      get_template_part('templates/content/checkout', '');
   else :
      get_template_part('templates/content/page', '');
   endif;
?>
<?php endwhile ?>
<?php get_footer();
