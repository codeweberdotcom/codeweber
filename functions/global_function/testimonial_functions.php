<?php

/**
 * Testimonial autotitle
 */

function auto_generate_post_title($title)
{
   global $post;
   /** Проверка на Post Type */
   if (isset($post->post_type)) {
      $post_type = $post->post_type;
   }
   /** Проверка на Post Type Testimonials*/
   if (isset($post->ID) && $post_type == 'testimonials') {
      if (have_rows('testimonials_post_field')) {
         while (have_rows('testimonials_post_field')) {
            the_row();
            $post_id = get_the_ID();
            $name = get_sub_field('name', $post_id);
            $date = get_the_date();
         }
      }
      /** Формирование Title*/
      $title = 'Отзыв_' . $name . '_ID' . $post_id . '_' . $date;
   }
   return $title;
}

add_filter('title_save_pre', 'auto_generate_post_title');



function ReadMore($string, $link, $quantity_symbol)
{
   $string = strip_tags($string);
   if (strlen($string) > $quantity_symbol) {

      // truncate string
      $stringCut = substr($string, 0, $quantity_symbol);
      $endPoint = strrpos($stringCut, ' ');

      //if the string doesn't contain any space then it will cut without word basis.
      $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
      $string .= '... <a href="' . $link . '" class="text-nowrap">' . esc_html__('Read More', 'codeweber') . '</a>';
   }
   return $string;
}
