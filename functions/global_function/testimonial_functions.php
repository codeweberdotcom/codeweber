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
